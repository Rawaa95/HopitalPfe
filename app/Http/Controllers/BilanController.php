<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appareillage;
use App\Models\Attitude_spontanee;
use App\Models\doleances_actuelles ;
use App\Models\Etude_Facteur;
use App\Models\Evaluation_fonctionnelle;
use App\Models\Evaluation_generale;
use App\Models\Evaluation_marche;
use App\Models\Evaluation_rachi;
use App\Models\Evaluation_sensorielle;
use App\Models\Examenpodoscopique;
use App\Models\Injection_toxine;
use App\Models\interrogatoire;
use App\Models\kinesitherapie;
use App\Models\Motricite_provoquee;
use App\Models\Prescription;
use App\Models\Attitude_spontanees_dd;
use App\Models\Visite; 
use App\Models\Dossier; 
use App\Models\Groupement;
use App\Models\User;
use App\Models\SpecificEvaluation;

class BilanController extends Controller
{
    
    public function medecinBilans($visite_id)
    {
        $visite= Visite::where('id', $visite_id)->first();
        $dossier_id = $visite->dossier_id;
        $dossier = Dossier::where('id', $dossier_id)->first();

        $visites = Visite::where('dossier_id', $dossier_id)->get();

        $appareillages = Appareillage::where('visite_id', $visite_id)->first();
        $attitudes_spontanees = Attitude_spontanee::where('visite_id', $visite_id)->first();
        //$doleances_actuelles = Doleances_actuelles::where('visite_id', $visite_id)->first();
        $etudes_facteurs = Etude_Facteur::where('visite_id', $visite_id)->first();
        $evaluations_fonctionnelles = Evaluation_fonctionnelle::where('visite_id', $visite_id)->first();
        $evaluations_generales = Evaluation_generale::where('visite_id', $visite_id)->first();
        $evaluations_marches = Evaluation_marche::where('visite_id', $visite_id)->first();
        $evaluations_rachis = Evaluation_rachi::where('visite_id', $visite_id)->first();
        $evaluations_sensorielles = Evaluation_sensorielle::where('visite_id', $visite_id)->first();
        $examenpodoscopiques = Examenpodoscopique::where('visite_id', $visite_id)->first();
        $injections_toxines = Injection_toxine::where('visite_id', $visite_id)->first();
        //$interrogatoires = Interrogatoire::where('visite_id', $visite_id)->first();
        $interrogatoires = Interrogatoire::where('dossier_id', $dossier_id)->first();
        $doleances_actuelles = Doleances_actuelles::where('dossier_id', $dossier_id)->first();

        $kinesitherapies = Kinesitherapie::where('visite_id', $visite_id)->first();
        $motricites_provoquees = Motricite_provoquee::where('visite_id', $visite_id)->first();
        $Attitude_spontanees_dds = Attitude_spontanees_dd::where('visite_id', $visite_id)->first();
        $prescriptions = Prescription::where('visite_id', $visite_id)->first();

        //2eme partie 
        $liste_parents = Groupement::whereNull('parent_id')->get(); // Définir la variable $liste_parents
        $specific_evaluation = Groupement::where('parent_id')->get();
        $groupements = Groupement::whereNull('parent_id')
            ->with(['children.specificEvaluations', 'specificEvaluations'])
            ->get();
            $user = auth()->user();
            $userId = auth()->id();
   
            $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
            
            

        return view('medecin.medecinBilans', compact(
            'visite_id', 'appareillages', 'attitudes_spontanees', 'doleances_actuelles', 
            'etudes_facteurs', 'evaluations_fonctionnelles', 'evaluations_generales', 
            'evaluations_marches', 'evaluations_rachis', 'evaluations_sensorielles', 
            'examenpodoscopiques', 'injections_toxines', 'interrogatoires', 
            'kinesitherapies', 'motricites_provoquees', 'prescriptions', 'Attitude_spontanees_dds' ,
            'dossier_id' , 'visites', 'dossier', 'groupements','liste_parents','recepteurs'
        ));
    }

    public function medecinBilanspost(Request $request)
    {
        $visite_id = $request->visite_id;
        $dossier_id = $request->dossier_id;

        $interrogatoire= interrogatoire::where('dossier_id', $dossier_id)->first();

        $niveauScolaire = $request->filled('niveau_scolaire') ? $request->niveau_scolaire : null;

        $interrogatoireData = [
            'profession_pere' => $request->profession_pere,
            'profession_mere' => $request->profession_mere,
            'mode_habitat_1' => $request->mode_habitat_1,
            'mode_habitat_2' => $request->mode_habitat_2,
            'scolariser' => $request->scolariser,
            'niveau_scolaire' => $request->niveau_scolaire,
            'rendement_scolaire' => $request->rendement_scolaire,
            'description' => $request->description,
            'cas_similaires' => $request->cas_similaires,
            'consanguinite' => $request->consanguinite,
            'suivi_grossesse' => $request->suivi_grossesse,
            'par_qui' =>$request->par_qui,
            'deroulement_grossesse' => $request->deroulement_grossesse,
            'complication' => $request->complication,
            'accouchement' => $request->accouchement,
            'terme' => $request->terme,
            'apgar' => $request->apgar,
            'pn' => $request->pn,
            'hospitalisation_neonat' => $request->hospitalisation_neonat,
            'nombre_jours_rea' => $request->nombre_jours_rea,
            'rea_neonat' => $request->rea_neonat,
            'etiologies' => $request->etiologies,
            'crise_convulsive' => $request->crise_convulsive,
            'medecin_traitant' => $request->medecin_traitant,
            'explorations' => $request->explorations,
            'echotf' => $request->echotf,
            'tdm_cerebrale' => $request->tdm_cerebrale,
            'irm_cerebrale' => $request->irm_cerebrale,
            'eeg' => $request->eeg,
            'rx_bassin' => $request->rx_bassin,
            'autre_r' => $request->autre_r,
            'medication' => $request->medication,
            'medication_laquelle' => $request->medication_laquelle,
            'kinesitherapie' => $request->kinesitherapie,
            'kinesitherapie_depuis_quand' => $request->kinesitherapie_depuis_quand,
            'kinesitherapie_nb_seances' => $request->kinesitherapie_nb_seances,
            'appareillage' => $request->appareillage,
            'appareillage_laquelle' => $request->appareillage_laquelle,
            'orthophonie' => $request->orthophonie,
            'orthophonie_depuis_quand' => $request->orthophonie_depuis_quand,
            'orthophonie_nb_seances' => $request->orthophonie_nb_seances,
            'ergotherapie' => $request->ergotherapie,
            'ergotherapie_depuis_quand' => $request->ergotherapie_depuis_quand,
            'ergotherapie_nb_seances' => $request->ergotherapie_nb_seances,
            'chirurgie_orthopedique' => $request->chirurgie_orthopedique,
            'detail_chirurgie' => $request->detail_chirurgie,
          
        ];
    
        if ($interrogatoire) {
            $interrogatoire->update($interrogatoireData);
        

        } else {
         
            $interrogatoireData['dossier_id'] = $dossier_id;
            interrogatoire::create($interrogatoireData);
        }

    $doleances_actuelles = doleances_actuelles::where('dossier_id', $dossier_id)->first();

    $doleancesActuellesData = [
        'douleur' => $request->douleur,
        'douleur_localisation' => $request->douleur_localisation,
        'douleur_causes' => $request->douleur_causes,
        'developpement_psychomoteur' => $request->developpement_psychomoteur,
        'sourire_reponse' => $request->sourire_reponse,
        'tenue_tete' => $request->tenue_tete,
        'marche' => $request->marche,
        'proprete' => $request->proprete,
        'station_assise' => $request->station_assise,
        'station_debout' => $request->station_debout,
        'langage' => $request->langage,
      
    ];

    if ($doleances_actuelles) {
        $doleances_actuelles->update($doleancesActuellesData);
    } else {
       
        $doleancesActuellesData['dossier_id'] = $dossier_id;
        doleances_actuelles::create($doleancesActuellesData);
    }


    $motricite_provoquee = Motricite_provoquee::where('visite_id', $visite_id)->first();

    $motriciteProvoqueeData = [
        'agrippement' => $request->agrippement,
        'retournement_mi' => $request->retournement_mi,
        'retournement_tete_ms' => $request->retournement_tete_ms,
        'redressement_membres_superieurs' => $request->redressement_membres_superieurs,
        'schema_reptation' => $request->schema_reptation,
        'tenu_assis' => $request->tenu_assis,
        'tire_assis' => $request->tire_assis,
        'assis_tailleur' => $request->assis_tailleur,
        'sur_chaise' => $request->sur_chaise,
        'passage_assis_debout' => $request->passage_assis_debout,
        'station_verticale' => $request->station_verticale,
    ];

    if ($motricite_provoquee) {
        $motricite_provoquee->update($motriciteProvoqueeData);
    } else {
        $motriciteProvoqueeData['visite_id'] = $visite_id;
        Motricite_provoquee::create($motriciteProvoqueeData);
    } 
    
    // Recherche l'enregistrement existant
    $Attitude_spontanees_dd = Attitude_spontanees_dd::where('visite_id', $visite_id)->first();

    // Préparation des données
    $attitudeSpontaneeddData = [
        'attitude_spontanee_dd_description' => $request->attitude_spontanee_dd_description,
    ];

    // Gestion de l'upload du fichier 'attitude_spontanee_dd_video'
    if ($request->hasFile('attitude_spontanee_dd_video')) {
        $file = $request->file('attitude_spontanee_dd_video');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('videos'), $filename);
        $attitudeSpontaneeddData['attitude_spontanee_dd_video'] = $filename;
    }

    // Mise à jour ou création de l'enregistrement
    if ($Attitude_spontanees_dd) {
        $Attitude_spontanees_dd->update($attitudeSpontaneeddData);
    } else {
        $attitudeSpontaneeddData['visite_id'] = $visite_id;
        Attitude_spontanees_dd::create($attitudeSpontaneeddData);
    }

    $etudeFacteur = Etude_Facteur::where('visite_id', $visite_id)->first();

        $etudeFacteurData = [
            'anomalies' => $request->anomalies,
            'parole' => $request->parole,
            'concentration' => $request->concentration,
            'bruit' => $request->bruit,
            'toucher' => $request->toucher,
            'effort' => $request->effort,
        ];

        if ($etudeFacteur) {
            $etudeFacteur->update($etudeFacteurData);
        } else {
            $etudeFacteurData['visite_id'] = $visite_id;
            Etude_Facteur::create($etudeFacteurData);
        }



        // Vérifier si l'enregistrement existe
        $appareillage = Appareillage::where('visite_id', $visite_id)->first();
    
        $appareillageData = [
            'remarque' => $request->remarque,
            'corset_siege' => $request->corset_siege,
            'verticalisateur' => $request->verticalisateur,
            'acp' => $request->acp,
            'fr' => $request->fr,
            'deambulateur' => $request->deambulateur,
            'attelle_tamarak_marche' => $request->attelle_tamarak_marche,
            'attelle_anti_talus' => $request->attelle_anti_talus,
            'corset_garchoix' => $request->corset_garchoix,
            'orthese_main' => $request->orthese_main,
            'orthese_plantaire' => $request->orthese_plantaire,
            'type_orthese_plantaire' => $request->type_orthese_plantaire,
            'chaussures' => $request->chaussures
        ];
    
        if ($appareillage) {
            $appareillage->update($appareillageData);
        } else {
            $appareillageData['visite_id'] = $visite_id;
            Appareillage::create($appareillageData);
        }
        $evaluation_fonctionnelle = Evaluation_fonctionnelle::where('visite_id', $visite_id)->first();

        $evaluationFonctionnelleData = [
            'equilibre_assis_bord_table' => $request->equilibre_assis_bord_table,
            'equilibre_assis_sol' => $request->equilibre_assis_sol,
            'equilibre_debout_bipodal' => $request->equilibre_debout_bipodal,
            'equilibre_unipodal' => $request->equilibre_unipodal,
            'temps_droite' => $request->temps_droite,
            'temps_gauche' => $request->temps_gauche,
            'cms_image_description' => $request->cms_image_description,
            'gmfcs_image_description' => $request->gmfcs_image_description,
            'gillette_image_description' => $request->gillette_image_description,
        ];

        if ($evaluation_fonctionnelle) {
            $evaluation_fonctionnelle->update($evaluationFonctionnelleData);
        } else {
            $evaluationFonctionnelleData['visite_id'] = $visite_id;
            Evaluation_fonctionnelle::create($evaluationFonctionnelleData);
        }
      
        
            $Evaluation_rachi = Evaluation_rachi::where('visite_id', $visite_id)->first();
        
            $Evaluation_rachiData = $request->only([
                'deformation_rachis',
                'commentaire_deformation_rachis',
                'visite_id',
            ]);
        
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('imageb'), $filename);
                $Evaluation_rachiData['photo'] = $filename;
            }
        
            if ($Evaluation_rachi) {
                $Evaluation_rachi->update($Evaluation_rachiData);
            } else {
                $Evaluation_rachiData['visite_id'] = $visite_id;
                Evaluation_rachi::create($Evaluation_rachiData);
            }
        
       


            $examenPodoscopique = Examenpodoscopique::where('visite_id', $request->visite_id)->first();

            // Récupérer les données de la requête
            $examenPodoscopiqueData = $request->only([
                'pied_creux',
                'pied_creux_droit',
                'pied_creux_gauche',
                'pied_plat',
                'pied_plat_droit',
                'pied_plat_gauche',
                'varus_arriere_pied',
                'varus_arriere_pied_droit',
                'varus_arriere_pied_gauche',
                'varus_avant_pied',
                'varus_avant_pied_droit',
                'varus_avant_pied_gauche',
                'valgus_arriere_pied',
                'valgus_arriere_pied_droit',
                'valgus_arriere_pied_gauche',
                'valgus_avant_pied',
                'valgus_avant_pied_droit',
                'valgus_avant_pied_gauche',
                'cassure_medio_pied',
                'cassure_medio_pied_droit',
                'cassure_medio_pied_gauche',
                'visite_id',
            ]);
    
            // Si une photo est incluse dans la requête, la sauvegarder
            if ($request->hasFile('photos_podoscopique')) {
                $file = $request->file('photos_podoscopique');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('imageb'), $filename);
                $examenPodoscopiqueData['photos_podoscopique'] = $filename;
            }
    
            // Mettre à jour ou créer une nouvelle entrée
            if ($examenPodoscopique) {
                $examenPodoscopique->update($examenPodoscopiqueData);
            } else {
                $examenPodoscopiqueData['visite_id'] = $request->visite_id;
                Examenpodoscopique::create($examenPodoscopiqueData);
            }










            $evaluation_marche = Evaluation_marche::where('visite_id', $visite_id)->first();
            
            $evaluationMarcheData = [
                'evaluation_marche' => $request->evaluation_marche,
                'description_marche' => $request->description_marche,
                'vitesse_marche' => $request->vitesse_marche,
            ];

            // Handling file upload for 'video_marche'
            if ($request->hasFile('video_marche')) {
                $file = $request->file('video_marche');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('videos'), $filename);
                $evaluationMarcheData['video_marche'] = $filename;
            }

            if ($evaluation_marche) {
                $evaluation_marche->update($evaluationMarcheData);
            } else {
                $evaluationMarcheData['visite_id'] = $visite_id;
                Evaluation_marche::create($evaluationMarcheData);
            }
            $evaluation_generale = Evaluation_generale::where('visite_id', $visite_id)->first();
    
            $evaluationGeneraleData = [
                'poids' => $request->poids,
                'taille' => $request->taille,
                'perimetre_cranien' => $request->perimetre_cranien,
                'insuffisance_respiratoire' =>$request->insuffisance_respiratoire,
            ];
        
            if ($evaluation_generale) {
                $evaluation_generale->update($evaluationGeneraleData);
            } else {
                $evaluationGeneraleData['visite_id'] = $visite_id;
                Evaluation_generale::create($evaluationGeneraleData);
            }
            $evaluation_sensorielle = Evaluation_sensorielle::where('visite_id', $visite_id)->first();

                $evaluationSensorielleData = [
                    'evaluation_sensorielle' => $request->evaluation_sensorielle,
                    'autres_description_text' => $request->autres_description_text,
                    'troubles_audition' => $request->troubles_audition,
                    'dyspraxie_buccofaciale' => $request->dyspraxie_buccofaciale,
                    'troubles_deglutition' => $request->troubles_deglutition,
                    'autre_troubles_deglutition' => $request->autre_troubles_deglutition,
                    'trouble_langage' => $request->trouble_langage,
                    'description_langage' => $request->description_langage,
                    'troubles_fonctions' => $request->troubles_fonctions,
                    'type_fonctions' => $request->type_fonctions,
                    'bilan_neuro' => $request->bilan_neuro,
                    'cr_bilan' => $request->cr_bilan,
                    'syncinesies' => $request->syncinesies,
                    'troubles_vesico_sphincteriens' => $request->troubles_vesico_sphincteriens,
                    'troubles_anorectaux' => $request->troubles_anorectaux,
                    'acquisition_proprete_anale' => $request->acquisition_proprete_anale,
                    'troubles_urinaires' => $request->troubles_urinaires,
                ];

                if ($evaluation_sensorielle) {
                    $evaluation_sensorielle->update($evaluationSensorielleData);
                } else {
                    $evaluationSensorielleData['visite_id'] = $visite_id;
                    Evaluation_sensorielle::create($evaluationSensorielleData);
                }
                $kinesitherapie = Kinesitherapie::where('visite_id', $visite_id)->first();

                $kinesitherapieData = [
                    'kinesitherapie' => $request->kinesitherapie,
                    'seances_par_semaine' => $request->seances_par_semaine,
                    'autoreeducation' => $request->autoreeducation,
                    'apprentissage_fait' => $request->apprentissage_fait,
                    // Les autres champs...
                ];

                if ($kinesitherapie) {
                    $kinesitherapie->update($kinesitherapieData);
                } else {
                    $kinesitherapieData['visite_id'] = $visite_id;
                    Kinesitherapie::create($kinesitherapieData);
                }
                $injectionToxine = Injection_toxine::where('visite_id', $visite_id)->first();

                $injectionToxineData = [
                    'injection_toxine' => $request->injection_toxine,
                    'date_injection' => $request->date_injection,
                    'type_toxine' => $request->type_toxine, // Assurez-vous que le nom du champ correspond ici
                    'dose_totale_injectee' => $request->dose_totale_injectee,
                    'dose_par_muscle' => $request->dose_par_muscle,
                    // Les autres champs...
                ];
                
                if ($injectionToxine) {
                    $injectionToxine->update($injectionToxineData);
                } else {
                    $injectionToxineData['visite_id'] = $visite_id;
                    Injection_toxine::create($injectionToxineData);
                }
                
                $prescription = Prescription::where('visite_id', $visite_id)->first();

                $prescriptionData = [
                    'platre' => $request->platre,
                    'type_platre' => $request->type_platre,
                    'ergotherapie' => $request->ergotherapie,
                    'depuis_quand' => $request->depuis_quand,
                    'orthophonie' => $request->orthophonie,
                    'neuropsychologique' => $request->neuropsychologique,
                    'chirurgie' => $request->chirurgie,
                    'decision_chirurgie' => $request->decision_chirurgie,
                    // autres attributs...
                ];

                if ($prescription) {
                    $prescription->update($prescriptionData);
                } else {
                    $prescriptionData['visite_id'] = $visite_id;
                    Prescription::create($prescriptionData);
                }




        
        $Attitude_spontanee = Attitude_spontanee::where('visite_id', $visite_id)->first();
        $attitudeData = [
            'attitude_sp' => $request->attitude_sp,
            'reactions_posturales' => $request->reactions_posturales,
            'suspension_ventrale' => $request->suspension_ventrale,
            'suspension_dorsale' => $request->suspension_dorsale,
            'suspension_laterale' => $request->suspension_laterale,
            'reaction_balancier_MI' => $request->reaction_balancier_MI,
            'reaction_parachute_anterieur' => $request->reaction_parachute_anterieur,
            'reaction_parachute_posterieur' => $request->reaction_parachute_posterieur,
            'reaction_parachute_lateral' => $request->reaction_parachute_lateral,
            'attitude_sp_shema' => $request->attitude_sp_shema
        ];
    
        if ($request->hasFile('motricite_dd_dv_ms_mi')) {
            $file = $request->file('motricite_dd_dv_ms_mi');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('videos'), $filename);
            $attitudeData['motricite_dd_dv_ms_mi'] = $filename;
        }
    
        if ($Attitude_spontanee) {
            $Attitude_spontanee->update($attitudeData);
        } else {
            $attitudeData['visite_id'] = $visite_id;
            Attitude_spontanee::create($attitudeData);
        }

        //2eme partie 
        // Traitement des groupements spécifiques
        if (is_array($request->groupements) || is_object($request->groupements)) {
            foreach ($request->groupements as $groupement_id => $data) {
                $specificEvaluation = SpecificEvaluation::where('groupement_id', $groupement_id)->where('visite_id', $visite_id)->first();

                $specificEvaluationData = [
                    'groupement_id' => $groupement_id,
                    'visite_id' => $visite_id
                ];

                if (isset($data['g_av'])) {
                    $specificEvaluationData['g_av'] = $data['g_av'];
                }

                if (isset($data['g_ar'])) {
                    $specificEvaluationData['g_ar'] = $data['g_ar'];
                }

                if (isset($data['d_av'])) {
                    $specificEvaluationData['d_av'] = $data['d_av'];
                }

                if (isset($data['d_ar'])) {
                    $specificEvaluationData['d_ar'] = $data['d_ar'];
                }

                if ($specificEvaluation) {
                    $specificEvaluation->update($specificEvaluationData);
                } else {
                    SpecificEvaluation::create($specificEvaluationData);
                }
            }

        }

    
        return redirect()->back()->with(['success' => 'Bilan sauvegardé avec succès']);
    }
    public function medecinImprimerBilan($visite_id)
    {
        $visite= Visite::where('id', $visite_id)->first();
        $dossier_id = $visite->dossier_id;
        $dossier = Dossier::where('id', $dossier_id)->first();

        $visites = Visite::where('dossier_id', $dossier_id)->get();
        $user = auth()->user();
        $userId = auth()->id();

        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();

        $appareillages = Appareillage::where('visite_id', $visite_id)->first();
        $attitudes_spontanees = Attitude_spontanee::where('visite_id', $visite_id)->first();
        //$doleances_actuelles = Doleances_actuelles::where('visite_id', $visite_id)->first();
        $etudes_facteurs = Etude_Facteur::where('visite_id', $visite_id)->first();
        $evaluations_fonctionnelles = Evaluation_fonctionnelle::where('visite_id', $visite_id)->first();
        $evaluations_generales = Evaluation_generale::where('visite_id', $visite_id)->first();
        $evaluations_marches = Evaluation_marche::where('visite_id', $visite_id)->first();
        $evaluations_rachis = Evaluation_rachi::where('visite_id', $visite_id)->first();
        $evaluations_sensorielles = Evaluation_sensorielle::where('visite_id', $visite_id)->first();
        $examenpodoscopiques = Examenpodoscopique::where('visite_id', $visite_id)->first();
        $injections_toxines = Injection_toxine::where('visite_id', $visite_id)->first();
        //$interrogatoires = Interrogatoire::where('visite_id', $visite_id)->first();
        $interrogatoires = Interrogatoire::where('dossier_id', $dossier_id)->first();
        $doleances_actuelles = Doleances_actuelles::where('dossier_id', $dossier_id)->first();

        $kinesitherapies = Kinesitherapie::where('visite_id', $visite_id)->first();
        $motricites_provoquees = Motricite_provoquee::where('visite_id', $visite_id)->first();
        $Attitude_spontanees_dds = Attitude_spontanees_dd::where('visite_id', $visite_id)->first();
        $prescriptions = Prescription::where('visite_id', $visite_id)->first();

        return view('medecin.medecinImprimerBilan', compact(
            'visite_id', 'appareillages', 'attitudes_spontanees', 'doleances_actuelles', 
            'etudes_facteurs', 'evaluations_fonctionnelles', 'evaluations_generales', 
            'evaluations_marches', 'evaluations_rachis', 'evaluations_sensorielles', 
            'examenpodoscopiques', 'injections_toxines', 'interrogatoires', 
            'kinesitherapies', 'motricites_provoquees', 'prescriptions', 'Attitude_spontanees_dds' ,'dossier_id' , 'visites', 'dossier','recepteurs'
        ));
    }
}