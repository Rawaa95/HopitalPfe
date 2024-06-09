<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\Visite;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisiteController extends Controller
{

    public function medecinVisites($dossier_id)
    {
        $dossier= Dossier::find($dossier_id);
        $visites = Visite::where('dossier_id', $dossier_id)
                         ->orderBy('date', 'desc')
                         ->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();

        return view('medecin.medecinVisites', compact('visites','dossier_id','dossier','recepteurs'));
    }

    public function medecinAddvisitePost(Request $request)
    {
        $visite = new Visite();

        $visite->dossier_id= $request->dossier_id;
        $visite->titre= $request->titre;
        $visite->type = $request->type;
        $visite->date = $request->date;

        $visite->save();

        return redirect()->route('medecinVisites', $request->dossier_id)->with(['success' => 'Une visite a été creé avec succès']);
    }


    public function medecinEditVisitePost(Request $request)

    {       $visite = Visite::find($request->id);
            $visite->titre = $request->titre;
            $visite->type = $request->type;
            $visite->date = $request->date;

            $dossier_id = $visite->dossier_id;

            $visite->update();

            return redirect()->route('medecinVisites', $dossier_id)->with(['success' => 'La visite a été modifiée avec succès']);
    }


    public function medecinDELETEvisitePost(Request $request)
    {
        $visite = Visite::findOrFail($request->id);

        $dossier_id=$visite->$dossier_id;
        $visite->delete();

        return redirect()->route('medecinVisites', $dossier_id)->with(['success' => 'La visite  a été supprimée avec succès']);
    }




    ///VISITE SECRETAIRE

    public function secretaireVisites($dossier_id)
    {
        $dossier= Dossier::find($dossier_id);
        $visites = Visite::where('dossier_id', $dossier_id)->orderBy('date', 'desc')->where('supprime', 'non')->get(); 

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        return view('secretaire.secretaireVisites', compact('visites','dossier_id','dossier','recepteurs'));
    }

    public function secretaireAddvisitePost(Request $request)
    {
        $visite = new Visite();

        $visite->dossier_id= $request->dossier_id;
        $visite->titre= $request->titre;
        $visite->type = $request->type;
        $visite->date = $request->date;

        $visite->save();

        return redirect()->back()->with(['success' => 'Une visite a été creé avec succès']);
    }


    public function secretaireEditVisitePost(Request $request)

    {       $visite = Visite::find($request->id);
            $visite->titre = $request->titre;
            $visite->type = $request->type;
            $visite->date = $request->date;

            $dossier_id = $visite->dossier_id;

            $visite->update();

            return redirect()->back()->with(['success' => 'La visite a été modifiée avec succès']);
    }


    public function secretaireDELETEvisitePost(Request $request)
    {
        $visite = Visite::findOrFail($request->id);

        $visite->supprime='oui';   

        $visite->update();

        return redirect()->back()->with(['success' => 'La visite  a été supprimée avec succès']);
    }

}
