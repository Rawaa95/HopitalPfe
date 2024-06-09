<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hopital;
use App\Models\Ville;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Reclamation; 
use App\Models\Message; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($userId = null)
    { 
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)
                                    ->orderBy('date', 'desc')
                                    ->take(5)
                                    ->get();
    
        $userIdAuth = auth()->id();
        $user = auth()->user();
    
        // Récupérez les destinataires
        $recepteurs = User::whereIn('role', [1, 2, 3])
                            ->whereNotIn('id', [$userIdAuth])
                            ->get();
    
        // Récupérez les messages entre l'utilisateur authentifié et le premier destinataire par défaut
        //$firstDestinataireId = $recepteurs->first()->id;
        //$messages = $this->getMessagesWithUser($firstDestinataireId);
    
        return view('home', compact('recepteurs', 'reclamations'));
    }
    
    //public function getMessagesWithUser($destinataireId)
    //{
    //    $userIdAuth = Auth::id();
    
        // Récupérez les messages entre l'utilisateur authentifié et le destinataire spécifique
    //    $messages = Message::where(function ($query) use ($userIdAuth, $destinataireId) {
    //                       $query->where('emetteur_id', $userIdAuth)
    //                              ->where('recepteur_id', $destinataireId);
    //                    })
    //                    ->orWhere(function ($query) use ($userIdAuth, $destinataireId) {
    //                        $query->where('recepteur_id', $userIdAuth)
    //                              ->where('emetteur_id', $destinataireId);
    //                    })
    //                    ->orderBy('datetime', 'desc')
    //                    ->get();
    
        // Passer également le destinataire à la vue
    //    $destinataire = User::find($destinataireId);
    
    //    return $messages; // Retourner les messages pour une utilisation ultérieure dans la vue home
    //}
    



    public function profile()
    {
        $user = Auth::user();
        $villes=Ville::all();
        $hopitaux = Hopital::all(); // Récupérer la liste des hôpitaux

        $user = auth()->user();
        $userId = auth()->id();

        $recepteurs = User::whereIn('role', [1, 2, 3])
                            ->whereNotIn('id', [$userId])
                            ->get();

        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        return view('profile', compact('user', 'hopitaux','villes','reclamations','recepteurs'));
    }

    public function profilePost(Request $request)
    { 
        $user = Auth::user();

        if (\Hash::check($request->passwordActuel, $user->password) && $request->passwordNew1 == $request->passwordNew2)
        {
            $user->password = \Hash::make($request->passwordNew1);
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->sexe = $request->sexe;
            $user->carte_professionnelle = $request->carte_professionnelle;
            $user->specialite = $request->specialite;
            $user->num = $request->num;
            $user->date_naissance = $request->date_naissance;
            $user->hopital_id = $request->hopital_id; 
        
      
            if ($request->hasFile('image')) {
                if (File::exists('image/'.$user->image)) {
                    File::delete('image/'.$user->image);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('image/', $filename);
                $user->image = $filename;
            }

            if ($request->hasFile('carte_professionnelle')) {
                if (File::exists('cart/'.$user->carte_professionnelle)) {
                    File::delete('cart/'.$user->carte_professionnelle);
                }

                $file = $request->file('carte_professionnelle');
                $ext = $file->getClientOriginalExtension();
                $nomcarte= time() . '.' . $ext;
                $file->move('cart/', $nomcarte);
                $user->carte_professionnelle = $nomcarte;
            }


            $user->update();

            return redirect()->route('home')->with(['SuccessMessage'=>'Votre profil a été mis à jour.']);
        }
        else
        {   $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->sexe = $request->sexe;
            $user->specialite = $request->specialite;
            $user->num = $request->num;
            $user->date_naissance = $request->date_naissance;
            $user->hopital_id = $request->hopital_id; 
        
      
            if ($request->hasFile('image')) {
                if (File::exists('image/'.$user->image)) {
                    File::delete('image/'.$user->image);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('image/', $filename);
                $user->image = $filename;
            }
            if ($request->hasFile('carte_professionnelle')) {
                if (File::exists('cart/'.$user->carte_professionnelle)) {
                    File::delete('cart/'.$user->carte_professionnelle);
                }

                $file = $request->file('carte_professionnelle');
                $ext = $file->getClientOriginalExtension();
                $nomcarte= time() . '.' . $ext;
                $file->move('cart/', $nomcarte);
                $user->carte_professionnelle = $nomcarte;
            }

            $user->update();

            return redirect()->route('home')->with(['SuccessMessage'=>'Votre profil a été mis à jour.']);
        }
          
    }

 

    public function getHopitauxVilleprofil(Request $request)
    {
        $hopitaux = Hopital::where('ville_id', $request->ville)->get();
        
        return response()->json($hopitaux);
    }


    //Verification compte :
    public function adminverification()
    {
        $users = User::where('role', 2)->orwhere('role', 3)->orwhere('role', 4)->orderBy('created_at', 'desc')->get();
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        $user = auth()->user();
        $userId = auth()->id();

        $recepteurs = User::whereIn('role', [1, 2, 3])
                            ->whereNotIn('id', [$userId])
                            ->get();

        return view('admin.adminverification',compact('users','reclamations','recepteurs'));
    }

    public function adminverificationuser($id) 
    {
        $user = User::where('id', $id)->first();
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        $userId = auth()->id();

        $recepteurs = User::whereIn('role', [1, 2, 3])
                            ->whereNotIn('id', [$userId])
                            ->get();

        return view('admin.adminverificationuser',compact('user','reclamations','recepteurs'));
    }


    public function adminverificationpost(Request $request)
    {
        $user = User::where('id', $request->id)->first();

        $user->verifie=$request->verifie;

        $email = $user->email;
        $username = $user->username;

        $details = [ 
            'email' => $email,
            'username' => $username, 
            'verifie' => $request->verifie,
        ];
    
        \Mail::to($email)->send(new \App\Mail\MyTestMail($details));


        $user->update();

        return redirect()->route('adminverification');
    }

    public function admindeleteuser(Request $request)
    {
        $user = User::where('id', $request->id)->first();

        $user->delete();

        return redirect()->route('adminverification');
    }
}
