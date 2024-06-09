<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth;


class ReclamationController extends Controller
{
    public function userreclamations()
    { 
        $reclamations= Reclamation::where('user_id', \Auth::user()->id)->orderBy('date', 'desc')->get(); 
        $admin = User::where('role', 1)->first();
        $authUserId = \Auth::user()->id;

        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$authUserId])->get();
        
        return view('reclamations.userreclamations',compact('reclamations','admin','recepteurs'));
    } 
    public function adminreclamations()
    { 
        $reclamations= Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->get(); 

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        return view('reclamations.adminreclamations',compact('reclamations','recepteurs'));
    } 

    // Envoyer un reclamation
  
    public function userAddreclamationPost(Request $request)
    { 
            
        $reclamation = new Reclamation(); 
        $reclamation->user_id=\Auth::user()->id;
        $reclamation->recepteur_id=$request->recepteur_id;
        $reclamation->feedback=$request->feedback;
        $reclamation->date= now();

        $reclamation->save();

          
        return redirect()->route('userreclamations')->with(['success' => 'Une réclamation a été ajoutée avec succès']);
    }

    public function userEditreclamationPost(Request $request)
    { 
            
        $reclamation = Reclamation::find($request->id);

        $reclamation->feedback=$request->feedback;
        $reclamation->date= now(); 

        $reclamation->update();

          
        return redirect()->route('userreclamations')->with(['success' => 'Une réclamation a été modifiée avec succès']);
    }

    public function userDeletereclamationPost(Request $request)
    {
        $reclamation = Reclamation::find($request->id);
        $reclamation->delete();
        return redirect()->back()->with(['success' => 'La visite  a été supprimée avec succès']);
    }


}
