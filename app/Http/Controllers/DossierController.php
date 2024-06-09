<?php

namespace App\Http\Controllers;
use App\Models\Hopital;
use App\Models\User;
use App\Models\Ville;
use App\Models\Dossier;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request; 

class DossierController extends Controller
{
     // Affichage de dossiers 
     public function secretairedossiers()
     { 
         $dossiers= Dossier::where('secretaire_id', \Auth::user()->id)->where('supprime', 'non')->orderBy('date_creation', 'desc')->get(); 
         $patients = Patient::get();
         $medecins = User::where('role', 2)->where('hopital_id', auth()->user()->hopital_id)->get();
         $users = User::where('role', 4)->get(); //parent

         $user = auth()->user();
         $userId = auth()->id();

         $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
         return view('secretaire.secretairedossiers',compact('dossiers', 'patients', 'medecins','users','recepteurs'));
     } 


      // Ajouter un dossier
  
      public function secretaireADDdossierPost(Request $request)
      { 
            $patient = new Patient(); 
            
            $patient->author_id=\Auth::user()->id;
            $patient->parent_id=$request->parent_id;
            $patient->nom=$request->nom;
            $patient->prenom=$request->prenom;
            $patient->date_naissance=$request->date_naissance;
            $patient->num_telephone=$request->num_telephone;
            $patient->adresse=$request->adresse;
            $patient->sexe=$request->sexe;


            if ($request->hasfile('photo')) {
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('image/', $filename);
                $patient->photo = $filename;
            }

            $patient->save();

          $dossier = new Dossier(); 
          $dossier->medecin_id=$request->medecin_id;
          $dossier->patient_id=$patient->id;
          $dossier->secretaire_id=\Auth::user()->id;
          $dossier->num_dossier=$request->num_dossier;
          $dossier->num_facultatif=$request->num_facultatif;
          $dossier->couverture_sociale=$request->couverture_sociale;   
          $dossier->date_creation= \Carbon\Carbon::now();  
 
          $dossier->save();

          
          return redirect()->route('secretairedossiers')->with(['success' => 'Un dossier a été ajouté avec succès']);
      }
  

   
      public function secretaireEDITdossierPost(Request $request)
      {
          $dossier= Dossier::where('id',$request->id)->first();

          $dossier->num_facultatif=$request->num_facultatif;
          $dossier->couverture_sociale=$request->couverture_sociale;   

          $dossier->update();

          $patient = Patient::find($request->patient_id);

          $patient->nom=$request->nom;
          $patient->prenom=$request->prenom;
          $patient->date_naissance=$request->date_naissance;
          $patient->num_telephone=$request->num_telephone;
          $patient->adresse=$request->adresse;
          $patient->sexe=$request->sexe;
          
          $patient->update();

          return redirect()->route('secretairedossiers')->with(['success' => 'Le dossier a été modifié avec succès']);
      }
      
  
     public function secretaireDELETEdossierPost(Request $request)
     {
         $dossier= Dossier::where('id',$request->id)->first();
         $dossier->supprime='oui';   

         $dossier->update();
  
         return redirect()->route('secretairedossiers')->with(['success' => 'Un dossiera été supprimé avec succès']);
     }  
  


     //partie medecin *************************************************************

     public function medecindossiers()
     { 
        $dossiers= Dossier::where('medecin_id', \Auth::user()->id)->where('supprime', 'non')->get(); 
        
        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();

        return view('medecin.medecindossiers',compact('dossiers','recepteurs'));
     } 
 
     
   
      public function medecinEDITdossierPost(Request $request)
      {
                $dossier= Dossier::where('id',$request->id)->first();

                $dossier->num_facultatif=$request->num_facultatif;
                $dossier->couverture_sociale=$request->couverture_sociale;   

                $dossier->update();

                $patient = Patient::find($request->patient_id);

                $patient->nom=$request->nom;
                $patient->prenom=$request->prenom;
                $patient->date_naissance=$request->date_naissance;
                $patient->num_telephone=$request->num_telephone;
                $patient->adresse=$request->adresse;
                $patient->sexe=$request->sexe;
                
                $patient->update();
          return redirect()->route('medecindossiers')->with(['success' => 'Le dossier a été modifié avec succès']);
      }
      
  
     public function medecinDELETEdossierPost(Request $request)
     {
         $dossier= Dossier::where('id',$request->id)->first();
         $dossier->supprime='oui';   

         $dossier->update();
  
  
         return redirect()->route('medecindossiers')->with(['success' => 'Un dossiera été supprimé avec succès']);
     } 

     
     
}
