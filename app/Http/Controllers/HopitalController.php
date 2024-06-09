<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hopital;
use App\Models\User;
use App\Models\Ville;
use App\Models\Reclamation; 

class HopitalController extends Controller
{
    // Affichage 
    public function adminhopitaux()
    {
        $hopitaux= Hopital::with('ville')->get();
        $villes=Ville::all();
        
        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        return view('admin.adminhopitaux',compact('hopitaux','villes','recepteurs','reclamations'));
    } 

     // Ajouter un hopital
 
     public function adminADDhopitalPost(Request $request)
     { 
         $hopital = new Hopital();
         $hopital->nom=$request->nom;
         $hopital->ville_id=$request->ville_id; // hedha attribut
         $hopital->save();
         
         return redirect()->route('adminhopitaux')->with(['success' => 'Un hopital a été ajouté avec succès']);
     }
 
 
 
      public function adminEDIThopitalPost(Request $request)
      {
          $hopital= Hopital::where('id',$request->id)->first();
          $hopital->nom=$request->nom;
          $hopital->ville_id=$request->ville_id;
          $hopital->update();
          return redirect()->route('adminhopitaux')->with(['success' => 'Un hopital a été modifié avec succès']);
  
      }
 
 
    public function adminDELETEhopitalPost(Request $request)
    {
        $hopital= Hopital::where('id',$request->id)->first();
        $hopital->delete();
 
        return redirect()->route('adminhopitaux')->with(['success' => 'Un hopital a été supprimé avec succès']);
    }  
 
   
}
