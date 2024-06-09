<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use App\Models\User;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RdvController extends Controller
{

    // Affichage
    public function secretaireRdvs()
    {
        $rdvs = Rdv::where('emetteur_id', \Auth::user()->id)->orwhere('recepteur_id', \Auth::user()->id)->get();
        $users = User::where('role', 4)->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        $dossiers = Dossier::all();

        return view('secretaire.secretaireRdvs', compact('rdvs','users','recepteurs','dossiers'));

    }


    public function secretaireAddRdvPost(Request $request)
    {
        $rdv = new Rdv();

        $rdv->emetteur_id = \Auth::user()->id;

        $rdv->recepteur_id = $request->recepteur_id;
        $rdv->dossier_id=$request->dossier_id;
        $rdv->date = $request->date;
        $rdv->status = $request->status;
        $rdv->note = $request->note;

        $rdv->save();

        return redirect()->route('secretairerdvs')->with(['success' => 'Un rendez-vous a été ajouté avec succès']);
    }

    public function secretaireEditRdvPost(Request $request)
    {
        $rdv = Rdv::find($request->id);
        $rdv->date = $request->date;
        $rdv->status = $request->status;
        $rdv->note = $request->note;

        $rdv->save();

        return redirect()->route('secretairerdvs')->with(['success' => 'Le rendez-vous a été modifié avec succès']);
    }


    public function secretaireVALIDrdvPost(Request $request)
    {
        $rdv = Rdv::find($request->id);
        $rdv->date = $request->date;
        $rdv->status = $request->status;
        $rdv->note = $request->note;

        $rdv->save();

        return redirect()->route('secretairerdvs')->with(['success' => 'Opération effectuée avec succès']);
    }

    public function secretaireDeleteRdvPost(Request $request)
    {
        $rdv = Rdv::findOrFail($request->id);
        $rdv->delete();

        return redirect()->route('secretairerdvs')->with(['success' => 'Le rendez-vous a été supprimé avec succès']);
    }



//rdv parent

    public function parentRdvs()
    {
        $rdvs = Rdv::where('emetteur_id', \Auth::user()->id)->orwhere('recepteur_id', \Auth::user()->id)->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        return view('parent.parentRdvs', compact('rdvs','recepteurs'));
    }


}
