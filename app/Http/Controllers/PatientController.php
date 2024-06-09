<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;
use App\Models\Ville;
use App\Models\Hopital;
use Illuminate\Support\Facades\File;



class PatientController extends Controller
{
    // Affichage 
    public function secretairepatients()
    {
        $hopitaux= Hopital::all();
        $villes=Ville::all();
        $patients= Patient::where('author_id', \Auth::user()->id)->get();
        $users = User::where('role', 4)->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();

        return view('secretaire.secretairepatients',compact('patients','hopitaux','villes','users','recepteurs'));
    }


    public function secretaireADDpatientPost(Request $request)
    { 
        $patient = new Patient();
        
        $patient->author_id=\Auth::user()->id;
        $patient->parent_id=$request->parent_id;
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->username=$request->username;
        $patient->date_naissance=$request->date_naissance;


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image/', $filename);
            $patient->photo = $filename;
        }

        $patient->save();
        return redirect()->route('secretairepatients')->with(['success' => 'Un patient a été ajouté avec succès']);
    }

    public function secretaireEDITpatientPost(Request $request)
    {
        $patient= Patient::where('id',$request->id)->first();
        
        $patient->parent_id=$request->parent_id;
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->username=$request->username;
        $patient->date_naissance=$request->date_naissance;

        if ($request->hasfile('photo')) {
            if (File::exists('image/'.$patient->photo))
            {
                File::delete('image/'.$patient->photo);
            }

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image/', $filename);
            $patient->photo = $filename;
        }

        $patient->update();
        return redirect()->route('secretairepatients')->with(['success' => 'Un patient a été modifié avec succès']);

    }


    public function secretaireDELETEpatientPost(Request $request)
    {
        $patient= Patient::where('id',$request->id)->first();
        $patient->delete();

        return redirect()->route('secretairepatients')->with(['success' => 'Un patient a été supprimé avec succès']);
    }





    ///Partie Parent  --------------------
    public function parentpatients()
    {
        $patients= Patient::where('parent_id', \Auth::user()->id)->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        return view('parent.parentpatients',compact('patients','recepteurs'));
    } 


    //Recherche hopital
    public function getHopitauxVille(Request $request)
    {
        $hopitaux = Hopital::where('ville_id', $request->ville)->get();
        
        return response()->json($hopitaux);
    }
}
