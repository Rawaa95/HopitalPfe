<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visite; 
use App\Models\Ordonnance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdonnanceController extends Controller
{

    public function medecinOrdonnances($visite_id)
    {
        $visite = Visite::find($visite_id);
        $ordonnances = Ordonnance::where('visite_id', $visite_id)->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        return view('medecin.medecinOrdonnances', compact('ordonnances','visite','visite_id','recepteurs'));

    }


    public function medecinAddordonnancePost(Request $request)
    {
        $ordonnance = new Ordonnance();

        $ordonnance->visite_id = $request->visite_id;
        $ordonnance->contenu = $request->contenu;
        $ordonnance->type = $request->type;

        $ordonnance->save();

        return redirect()->route('medecinOrdonnances',$request->visite_id)->with(['success' => 'Un ordonnance a été creé avec succès']);
    }

    public function medecinEditordonnancePost(Request $request)
    {

            $ordonnance = Ordonnance::find($request->id);

            $ordonnance->contenu = $request->contenu;
            $ordonnance->type = $request->type;

            $visite_id = $ordonnance->visite_id;

            $ordonnance->update();

            return redirect()->route('medecinOrdonnances' , $visite_id)->with(['success' => 'L\'ordonnance été modifié avec succès']);
    }


    public function medecinDELETEordonnancePost(Request $request)
    {
        $ordonnance = Ordonnance::findOrFail($request->id);
        $visite_id = $ordonnance->visite_id;

        $ordonnance->delete();

        return redirect()->route('medecinOrdonnances', $visite_id)->with(['success' => 'L\'ordonnance  a été supprimée avec succès']);
    }

    }
