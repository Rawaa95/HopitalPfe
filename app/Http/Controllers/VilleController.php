<?php

namespace App\Http\Controllers;
use App\Models\Ville;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reclamation; 
use App\Models\User;


class VilleController extends Controller
{
    public function adminvilles()
    {
        $villes=Ville::all();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        return view('admin.adminvilles',compact('villes','recepteurs','reclamations'));
    }


    //Ajouter ville 

    public function adminADDvillePost(Request $request)
    { 
        $ville = new Ville();
        $ville->nom=$request->nom;

        $ville->save();
        return redirect()->route('adminvilles')->with(['success' => 'Une ville a été ajouté avec succès']);
    }

}