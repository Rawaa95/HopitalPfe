@include('header')

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <!-- Espace réservé pour d'éventuels ajouts futurs -->
            </div>
        </div>
        
       <div class="col-lg-6 mb-2 print-section" id="input-type-selection-1">
            <div id="data-to-print-1">
                <div class="print-header">
                  <h2 style="color: #0FB623;">Bilan Patient (Page 1)</h2>

                </div>
                <div class="print-body">
                    <p><strong>Nom :</strong> {{ $dossier->patient->nom }} {{ $dossier->patient->prenom }}</p>
                    <p><strong>Date de Naissance :</strong> Né le {{ $dossier->patient->date_naissance }}</p>
                    <p><strong>Numéro Dossier :</strong> {{ $dossier->num_dossier ?? '' }}</p>
                    <p><strong>Numéro Facultatif :</strong> {{ $dossier->num_facultatif ?? '' }}</p>
                    <p><strong>Sexe :</strong> Male</p>
                    <p><strong>Condition Médicale :</strong> Diabetes</p>
                    <p><strong>Adresse :</strong> {{ $dossier->patient->adresse ?? '' }}</p>
                    <p><strong>Téléphone :</strong> {{ $dossier->patient->num_telephone ?? '' }}</p>
                    <p><strong>Profession du Père :</strong> {{ $interrogatoires ? $interrogatoires->profession_pere : '' }}</p>
                    <p><strong>Profession de la Mère :</strong> {{ $interrogatoires ? $interrogatoires->profession_mere : '' }}</p>
                    <p><strong>Mode d'habitat 1 :</strong> {{ $interrogatoires && $interrogatoires->mode_habitat_1 == 'Urbain' ? 'Urbain' : ($interrogatoires && $interrogatoires->mode_habitat_1 == 'Rural' ? 'Rural' : '') }}</p>
                    <p><strong>Mode d'habitat 2 :</strong> {{ $interrogatoires && $interrogatoires->mode_habitat_2 == 'Rez-de-chaussée' ? 'Rez-de-chaussée' : ($interrogatoires && $interrogatoires->mode_habitat_2 == 'Avec escalier' ? 'Avec escalier' : '') }}</p>
                    <p><strong>Scolariser :</strong> {{ $interrogatoires && $interrogatoires->scolariser == 'oui' ? 'Oui' : 'Non' }}</p>
                    <p><strong>Niveau scolaire :</strong> {{ $interrogatoires ? $interrogatoires->niveau_scolaire : '' }}</p>
                    <p><strong>Rendement scolaire :</strong> {{ $interrogatoires ? $interrogatoires->rendement_scolaire : '' }}</p>
                    <p><strong>Description :</strong> {{ $interrogatoires ? $interrogatoires->description : '' }}</p>
                    <p><strong>Cas similaires / congénitales dans la famille :</strong> {{ $interrogatoires && $interrogatoires->cas_similaires == 'oui' ? 'Oui' : 'Non' }}</p>
                    <p><strong>Consanguinité :</strong> {{ $interrogatoires && $interrogatoires->consanguinite == 'oui' ? 'Oui' : 'Non' }}</p>
                     <p><strong>Suivi de grossesse :</strong> {{ $interrogatoires && $interrogatoires->suivi_grossesse == 'oui' ? 'Oui' : 'Non' }}</p>
    <div id="suiviDetails" style="{{ $interrogatoires && $interrogatoires->suivi_grossesse == 'oui' ? '' : 'display: none;' }}">
        <p><strong>Par qui :</strong> {{ $interrogatoires && $interrogatoires->par_qui ? ($interrogatoires->par_qui == 'gynecologue' ? 'Gynécologue' : 'Sage-femme') : '' }}</p>
    </div>
    <p><strong>Déroulement de la grossesse compliqué :</strong> {{ $interrogatoires && $interrogatoires->deroulement_grossesse == 'oui' ? 'Oui' : 'Non' }}</p>
    <div id="complications_container" style="{{ $interrogatoires && $interrogatoires->deroulement_grossesse == 'oui' ? '' : 'display: none;' }}">
        <p><strong>Complications :</strong> {{ $interrogatoires ? $interrogatoires->complication : '' }}</p>
    </div>
    <p><strong>Accouchement :</strong> {{ $interrogatoires ? ($interrogatoires->accouchement == 'vb' ? 'VB' : 'C/S') : '' }}</p>
    <p><strong>Terme :</strong> {{ $interrogatoires ? $interrogatoires->terme : '' }}</p>
    <p><strong>Apgar :</strong> {{ $interrogatoires ? $interrogatoires->apgar : '' }}</p>
    <p><strong>PN :</strong> {{ $interrogatoires ? $interrogatoires->pn : '' }}</p>
    <p><strong>Hospitalisation en néonat :</strong> {{ $interrogatoires && $interrogatoires->hospitalisation_neonat == 'oui' ? 'Oui' : 'Non' }}</p>
    <div id="nb_jours_input" style="{{ $interrogatoires && $interrogatoires->hospitalisation_neonat == 'oui' ? '' : 'display: none;' }}">
        <p><strong>Nombre de jours :</strong> {{ $interrogatoires ? $interrogatoires->nombre_jours_rea : '' }}</p>
    </div>
    <p><strong>Réa néonat :</strong> {{ $interrogatoires && $interrogatoires->rea_neonat == 'oui' ? 'Oui' : 'Non' }}</p>
    <p><strong>Etiologies :</strong> {{ $interrogatoires ? $interrogatoires->etiologies : '' }}</p>
    <p><strong>Crise convulsive :</strong> {{ $interrogatoires && $interrogatoires->crise_convulsive == 'oui' ? 'Oui' : 'Non' }}</p>
</div>
</div>
</div>
</div>


    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <!-- Espace réservé pour d'éventuels ajouts futurs -->
            </div>
        </div>






    <div class="col-lg-6 mb-2 print-section" id="input-type-selection-2">
            <div id="data-to-print-2">
                <div class="print-header">
                    <h2 style="color: #0FB623;">Bilan Patient (Page 2)</h2>
                </div>
                <div class="print-body">
    <p><strong>Médecin traitant :</strong> {{ $interrogatoires ? $interrogatoires->medecin_traitant : '' }}</p>
    <p><strong>Explorations :</strong> {{ $interrogatoires ? $interrogatoires->explorations : '' }}</p>
    <p><strong>EchoTF :</strong> {{ $interrogatoires ? $interrogatoires->echotf : '' }}</p>
    <p><strong>TDM cérébrale :</strong> {{ $interrogatoires ? $interrogatoires->tdm_cerebrale : '' }}</p>
    <p><strong>IRM cérébrale :</strong> {{ $interrogatoires ? $interrogatoires->irm_cerebrale : '' }}</p>
    <p><strong>EEG :</strong> {{ $interrogatoires ? $interrogatoires->eeg : '' }}</p>
    <p><strong>Rx Bassin :</strong> {{ $interrogatoires ? $interrogatoires->rx_bassin : '' }}</p>
    <p><strong>Autres :</strong> {{ $interrogatoires ? $interrogatoires->autre_r : '' }}</p>
    <p><strong>Médication :</strong> {{ $interrogatoires && $interrogatoires->medication == 'oui' ? 'Oui' : 'Non' }}</p>
@if($interrogatoires && $interrogatoires->medication == 'oui')
    <p><strong>Laquelle :</strong> {{ $interrogatoires->medication_laquelle }}</p>
@endif

<p><strong>Kinésithérapie :</strong> {{ $interrogatoires && $interrogatoires->kinesitherapie == 'oui' ? 'Oui' : 'Non' }}</p>
@if($interrogatoires && $interrogatoires->kinesitherapie == 'oui')
    <p><strong>Depuis quand :</strong> {{ $interrogatoires->kinesitherapie_depuis_quand }}</p>
    <p><strong>Nombre de séances par semaine :</strong> {{ $interrogatoires->kinesitherapie_nb_seances }}</p>
@endif

<p><strong>Appareillage :</strong> {{ $interrogatoires && $interrogatoires->appareillage == 'oui' ? 'Oui' : 'Non' }}</p>
@if($interrogatoires && $interrogatoires->appareillage == 'oui')
    <p><strong>Laquelle :</strong> {{ $interrogatoires->appareillage_laquelle }}</p>
@endif

<p><strong>Orthophonie :</strong> {{ $interrogatoires && $interrogatoires->orthophonie == 'oui' ? 'Oui' : 'Non' }}</p>
@if($interrogatoires && $interrogatoires->orthophonie == 'oui')
    <p><strong>Depuis quand :</strong> {{ $interrogatoires->orthophonie_depuis_quand }}</p>
    <p><strong>Nombre de séances par semaine :</strong> {{ $interrogatoires->orthophonie_nb_seances }}</p>
@endif

<p><strong>Ergothérapie :</strong> {{ $interrogatoires && $interrogatoires->ergotherapie == 'oui' ? 'Oui' : 'Non' }}</p>
@if($interrogatoires && $interrogatoires->ergotherapie == 'oui')
    <p><strong>Depuis quand :</strong> {{ $interrogatoires->ergotherapie_depuis_quand }}</p>
    <p><strong>Nombre de séances par semaine :</strong> {{ $interrogatoires->ergotherapie_nb_seances }}</p>
@endif

<p><strong>Chirurgie orthopédique :</strong> {{ $interrogatoires && $interrogatoires->chirurgie_orthopedique == 'oui' ? 'Oui' : 'Non' }}</p>
@if($interrogatoires && $interrogatoires->chirurgie_orthopedique == 'oui')
    <p><strong>Détail chirurgie :</strong> {{ $interrogatoires->detail_chirurgie }}</p>
@endif
<p><strong>Douleur :</strong> {{ $doleances_actuelles && $doleances_actuelles->douleur == 'oui' ? 'Oui' : 'Non' }}</p>
@if($doleances_actuelles && $doleances_actuelles->douleur == 'oui')
    <p><strong>Localisation :</strong> {{ $doleances_actuelles ? $doleances_actuelles->douleur_localisation : '' }}</p>
    <p><strong>Causes :</strong> {{ $doleances_actuelles ? $doleances_actuelles->douleur_causes : '' }}</p>
@endif

<p><strong>Développement psychomoteur :</strong> {{ $doleances_actuelles ? $doleances_actuelles->developpement_psychomoteur : '' }}</p>
<p><strong>Sourire réponse :</strong> {{ $doleances_actuelles ? $doleances_actuelles->sourire_reponse : '' }}</p>
<p><strong>Tenue de la tête :</strong> {{ $doleances_actuelles ? $doleances_actuelles->tenue_tete : '' }}</p>
<p><strong>Marche :</strong> {{ $doleances_actuelles ? $doleances_actuelles->marche : '' }}</p>
<p><strong>Propreté :</strong> {{ $doleances_actuelles ? $doleances_actuelles->proprete : '' }}</p>
<p><strong>Station assise :</strong> {{ $doleances_actuelles ? $doleances_actuelles->station_assise : '' }}</p>
<p><strong>Station debout :</strong> {{ $doleances_actuelles ? $doleances_actuelles->station_debout : '' }}</p>
<p><strong>Langage :</strong> 
    @if(isset($doleances_actuelles))
        @switch($doleances_actuelles->langage)
            @case('babillage')
                Babillage
                @break
            @case('syllabes')
                Syllabes
                @break
            @case('bisyllabes')
                Bisyllabes
                @break
            @case('1_mot')
                1 mot
                @break
            @case('phrases')
                Phrases
                @break
            @default
                Non spécifié
        @endswitch
    @else
        Non spécifié
    @endif
</p>
</div>
</div>
</div>
</div>


    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <!-- Espace réservé pour d'éventuels ajouts futurs -->
            </div>
        </div>
 <div class="col-lg-6 mb-2 print-section" id="input-type-selection-3">
            <div id="data-to-print-3">
                <div class="print-header">
                    <h2 style="color: #0FB623;">Bilan Patient (Page 3)</h2>
                </div>
                <div class="print-body">
<p><strong>Motricité spontanée : en DD et en DV des MS et MI:</strong> 
@if(isset($attitudes_spontanees) && $attitudes_spontanees->motricite_dd_dv_ms_mi)
    <a href="{{ asset('videos/' . $attitudes_spontanees->motricite_dd_dv_ms_mi) }}" target="_blank">Voir vidéo Existant</a>
@else
    Non spécifié
@endif
</p>

<p><strong>Réactions posturales:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->reactions_posturales : '' }}</p>

<h6>Suspension</h6>
<p><strong>Ventrale:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->suspension_ventrale : '' }}</p>
<p><strong>Dorsale:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->suspension_dorsale : '' }}</p>
<p><strong>Latérale:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->suspension_laterale : '' }}</p>

<p><strong>Réaction en balancier des MI:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_balancier_MI : '' }}</p>

<h6>Réactions parachutes:</h6>
<p><strong>Antérieur:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_parachute_anterieur : '' }}</p>
<p><strong>Postérieur:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_parachute_posterieur : '' }}</p>
<p><strong>Latéral:</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_parachute_lateral : '' }}</p>
<p><strong>Shema attitude spontanée :</strong> {{ $attitudes_spontanees ? $attitudes_spontanees->attitude_sp_shema : '' }}</p>
<h6>Motricités Provoquées:</h6>

<p><strong>Agrippement, préhension:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->agrippement == 'oui' ? 'Oui' : 'Non') : '' }}</p>

<p><strong>Retournement dos/ventre stimulé par MI:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->retournement_mi == 'oui' ? 'Oui' : 'Non') : '' }}</p>

<p><strong>Retournement dos/ventre stimulé par tête et MS:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->retournement_tete_ms == 'oui' ? 'Oui' : 'Non') : '' }}</p>

<p><strong>Redressement de la position couché par appui sur les membres supérieurs:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->redressement_membres_superieurs == 'oui' ? 'Oui' : 'Non') : '' }}</p>

<p><strong>Schéma de reptation:</strong> {{ $motricites_provoquees ? $motricites_provoquees->schema_reptation : '' }}</p>


<h6>Station assise:</h6>
<p><strong>Tenu assis:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->tenu_assis == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Tiré assis:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->tire_assis == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Assis tailleur:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->assis_tailleur == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Sur chaise:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->sur_chaise == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Passage entre assis-debout:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->passage_assis_debout == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Station verticale:</strong> {{ $motricites_provoquees ? ($motricites_provoquees->station_verticale == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<h6>Attitude Spontanée en Décubitus Dorsal:</h6>

<p><strong>Description:</strong> {{ $Attitude_spontanees_dds ? $Attitude_spontanees_dds->attitude_spontanee_dd_description : '' }}</p>

<p><strong>Déformation rachis :</strong> {{ $evaluations_rachis ? ($evaluations_rachis->deformation_rachis == 'oui' ? 'Oui' : 'Non') : '' }}</p>

@if ($evaluations_rachis && $evaluations_rachis->deformation_rachis == 'oui')
    <p><strong>Commentaire :</strong> {{ $evaluations_rachis->commentaire_deformation_rachis }}</p>
@endif
</div>
</div>
</div>
</div>


    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <!-- Espace réservé pour d'éventuels ajouts futurs -->
            </div>
        </div>


<div class="col-lg-6 mb-2 print-section" id="input-type-selection-4">
            <div id="data-to-print-4">
                <div class="print-header">
                    <h2 style="color: #0FB623;">Bilan Patient (Page 4)</h2>
                </div>
                <div class="print-body">
<h6>Examen podoscopique</h6>

<p><strong>Pied creux:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->pied_creux == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->pied_creux == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->pied_creux_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->pied_creux_gauche }}</p>
@endif

<p><strong>Pied plat:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->pied_plat == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->pied_plat == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->pied_plat_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->pied_plat_gauche }}</p>
@endif

<p><strong>Varus arrière pied:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->varus_arriere_pied == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->varus_arriere_pied == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->varus_arriere_pied_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->varus_arriere_pied_gauche }}</p>
@endif

<p><strong>Varus avant pied:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->varus_avant_pied == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->varus_avant_pied == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->varus_avant_pied_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->varus_avant_pied_gauche }}</p>
@endif
<p><strong>Examen podoscopique:</strong></p>

<p><strong>Valgus arrière pied:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->valgus_arriere_pied == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->valgus_arriere_pied == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->valgus_arriere_pied_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->valgus_arriere_pied_gauche }}</p>
@endif

<p><strong>Valgus avant pied:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->valgus_avant_pied == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->valgus_avant_pied == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->valgus_avant_pied_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->valgus_avant_pied_gauche }}</p>
@endif

<p><strong>Cassure médio-pied:</strong> {{ $examenpodoscopiques ? ($examenpodoscopiques->cassure_medio_pied == 'oui' ? 'Oui' : 'Non') : '' }}</p>
@if ($examenpodoscopiques && $examenpodoscopiques->cassure_medio_pied == 'oui')
    <p><strong>Droit:</strong> {{ $examenpodoscopiques->cassure_medio_pied_droit }}</p>
    <p><strong>Gauche:</strong> {{ $examenpodoscopiques->cassure_medio_pied_gauche }}</p>
@endif
<p><strong>Facteur B (état basal)</strong></p>
<p><strong>Anomalies observées au repos:</strong> {{ $etudes_facteurs ? ($etudes_facteurs->anomalies == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Facteur E</strong></p>
<p><strong>Réactions à des stimuli Internes</strong></p>
<p><strong>Parole:</strong> {{ $etudes_facteurs ? ($etudes_facteurs->parole == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Concentration / Stimuli:</strong> {{ $etudes_facteurs ? ($etudes_facteurs->concentration == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Réactions à des stimuli Externes</strong></p>

<p><strong>Bruit:</strong> {{ $etudes_facteurs ? ($etudes_facteurs->bruit == 'oui' ? 'Oui' : 'Non') : '' }}</p>
 <p><strong>Toucher:</strong> {{ $etudes_facteurs ? ($etudes_facteurs->toucher == 'oui' ? 'Oui' : 'Non') : '' }}</p>

</div>
</div>
</div>
</div>


    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <!-- Espace réservé pour d'éventuels ajouts futurs -->
            </div>
        </div>
<div class="col-lg-6 mb-2 print-section" id="input-type-selection-5">
            <div id="data-to-print-5">
                <div class="print-header">
                    <h2 style="color: #0FB623;">Bilan Patient (Page 5)</h2>
                </div>
                <div class="print-body">
                <p><strong>Effort contrarié:</strong> {{ $etudes_facteurs ? ($etudes_facteurs->effort == 'oui' ? 'Oui' : 'Non') : '' }}</p>
<p><strong>Evaluation fonctionnelle</strong></p>
<p><strong>Equilibre assis bord de table, jambes pendantes sans appui des membres supérieurs:</strong> {{ $evaluations_fonctionnelles ? ($evaluations_fonctionnelles->equilibre_assis_bord_table == 'oui' ? 'Oui' : 'Non') : '' }}</p>

 
<p><strong>Equilibre assis au sol sans appui des membres supérieurs:</strong> {{ $evaluations_fonctionnelles ? ($evaluations_fonctionnelles->equilibre_assis_sol == 'oui' ? 'Oui' : 'Non') : '' }}</p>

<p><strong>Equilibre debout sans appui des mains et bipodal:</strong> {{ $evaluations_fonctionnelles ? ($evaluations_fonctionnelles->equilibre_debout_bipodal == 'oui' ? 'Oui' : 'Non') : '' }}</p>

<p><strong>Equilibre sans appui des mains et unipodal:</strong> {{ $evaluations_fonctionnelles ? ($evaluations_fonctionnelles->equilibre_unipodal == 'oui' ? 'Oui' : 'Non') : '' }}</p>

@if ($evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_unipodal == 'oui')
    <p><strong>Temps (droite):</strong> {{ $evaluations_fonctionnelles->temps_droite }}</p>
    <p><strong>Temps (gauche):</strong> {{ $evaluations_fonctionnelles->temps_gauche }}</p>
@endif

<p><strong>Description:</strong> {{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->cms_image_description : '' }}</p>

<p><strong>Description:</strong> {{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->gmfcs_image_description : '' }}</p>
<p><strong>Description:</strong> {{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->gillette_image_description : '' }}</p>
<p><strong>Poids :</strong> {{ $evaluations_generales ? $evaluations_generales->poids : '' }}</p>
<p><strong>Taille :</strong> {{ $evaluations_generales ? $evaluations_generales->taille : '' }}</p>
<p><strong>Périmètre Crânien :</strong> {{ $evaluations_generales ? $evaluations_generales->perimetre_cranien : '' }}</p>
<p><strong>Insuffisance respiratoire:</strong> 
    {{ $evaluations_generales ? ($evaluations_generales->insuffisance_respiratoire == 'oui' ? 'Oui' : 'Non') : '' }}
</p>

<p><strong>Évaluation sensorielle :</strong> 
    @if ($evaluations_sensorielles)
        @switch($evaluations_sensorielles->evaluation_sensorielle)
            @case('strabisme')
                Strabisme
                @break
            @case('troubles_poursuite_oculaires')
                Troubles de la poursuite oculaires
                @break
            @case('cecite_corticale')
                Cécité corticale
                @break
            @case('nystagmus')
                Nystagmus
                @break
            @case('autres')
                Autres
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.getElementById("autres_description").style.display = "block";
                    });
                </script>
                @break
        @endswitch
    @endif
</p>


<p><strong>Troubles de l'audition :</strong> {{ $evaluations_sensorielles ? $evaluations_sensorielles->troubles_audition : '' }}</p>

<p><strong>Dyspraxie buccofaciale :</strong> 
    @if ($evaluations_sensorielles)
        @switch($evaluations_sensorielles->dyspraxie_buccofaciale)
            @case('bavage')
                Bavage
                @break
            @case('protrusion_langue')
                Protrusion de la langue
                @break
            @case('autre')
                Autre
                @break
        @endswitch
    @endif
</p>

<p><strong>Autre (précisez) :</strong> {{ $evaluations_sensorielles ? $evaluations_sensorielles->autre_troubles_deglutition : '' }}</p>
<p><strong>Trouble du langage :</strong> 
    @if ($evaluations_sensorielles)
        @if ($evaluations_sensorielles->trouble_langage == 'oui')
            Oui
        @elseif ($evaluations_sensorielles->trouble_langage == 'non')
            Non
        @endif
    @endif
</p>

<p><strong>Description :</strong> {{ $evaluations_sensorielles ? $evaluations_sensorielles->description_langage : '' }}</p>
<p><strong>Troubles des fonctions supérieures :</strong> 
    @if ($evaluations_sensorielles)
        @if ($evaluations_sensorielles->troubles_fonctions == 'oui')
            Oui
        @elseif ($evaluations_sensorielles->troubles_fonctions == 'non')
            Non
        @endif
    @endif
</p>

<p><strong>Quel type :</strong> {{ $evaluations_sensorielles ? $evaluations_sensorielles->type_fonctions : '' }}</p>
<p><strong>Bilan neuro-psychologique :</strong> 
    @if ($evaluations_sensorielles)
        @if ($evaluations_sensorielles->bilan_neuro == 'oui')
            Oui
        @elseif ($evaluations_sensorielles->bilan_neuro == 'non')
            Non
        @endif
    @endif
</p>

@if ($evaluations_sensorielles && $evaluations_sensorielles->bilan_neuro == 'oui')
    <p><strong>CR du bilan :</strong> {{ $evaluations_sensorielles->cr_bilan }}</p>
@endif
<p><strong>Syncinésies :</strong>
    @if ($evaluations_sensorielles)
        @if ($evaluations_sensorielles->syncinesies == 'oui')
            Oui
        @elseif ($evaluations_sensorielles->syncinesies == 'non')
            Non
        @endif
    @endif
</p>
<p><strong>Troubles vésico sphinctériens :</strong>
    @if ($evaluations_sensorielles)
        @switch($evaluations_sensorielles->troubles_vesico_sphincteriens)
            @case('pollakiurie')
                Pollakiurie
                @break
            @case('fuites')
                Fuites
                @break
            @case('dysurie')
                Dysurie
                @break
            @case('énurésie')
                Énurésie
                @break
        @endswitch
    @endif
</p>
<p><strong>Troubles anorectaux :</strong> {{ $evaluations_sensorielles ? $evaluations_sensorielles->troubles_anorectaux : '' }}</p>

<p><strong>Acquisition de la propreté anale :</strong> 
    @if ($evaluations_sensorielles)
        @if ($evaluations_sensorielles->acquisition_proprete_anale == 'oui')
            Oui
        @elseif ($evaluations_sensorielles->acquisition_proprete_anale == 'non')
            Non
        @endif
    @endif
</p>
<p><strong>Troubles urinaires :</strong> 
    @if ($evaluations_sensorielles)
        @if ($evaluations_sensorielles->troubles_urinaires == 'oui')
            Oui
        @elseif ($evaluations_sensorielles->troubles_urinaires == 'non')
            Non
        @endif
    @endif
</p>
</div>
</div>
</div>
</div>


    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <!-- Espace réservé pour d'éventuels ajouts futurs -->
            </div>
        </div>
<div class="col-lg-6 mb-2 print-section" id="input-type-selection-6">
            <div id="data-to-print-6">
                <div class="print-header">
                    <h2 style="color: #0FB623;">Bilan Patient (Page 6)</h2>
                </div>
                <div class="print-body">
<p><strong>Kinésithérapie :</strong> 
    @if ($kinesitherapies)
        @if ($kinesitherapies->kinesitherapie == 'oui')
            Oui
        @elseif ($kinesitherapies->kinesitherapie == 'non')
            Non
        @endif
    @endif
</p>
@if ($kinesitherapies && $kinesitherapies->kinesitherapie == 'oui')
    <p><strong>Nombre de séances par semaine :</strong> {{ $kinesitherapies->seances_par_semaine }}</p>
@endif
<p><strong>Autorééducation à domicile :</strong> 
    @if ($kinesitherapies)
        @if ($kinesitherapies->autoreeducation == 'oui')
            Oui
        @elseif ($kinesitherapies->autoreeducation == 'non')
            Non
        @endif
    @endif
</p>

@if ($kinesitherapies && $kinesitherapies->autoreeducation == 'oui')
    <p><strong>Apprentissage fait :</strong> 
        @if ($kinesitherapies->apprentissage)
            @if ($kinesitherapies->apprentissage == 'oui')
                Oui
            @elseif ($kinesitherapies->apprentissage == 'non')
                Non
            @endif
        @else
            N/A
        @endif
    </p>
@endif
 @if ($injections_toxines)
        <p><strong>Injection de toxine :</strong> {{ $injections_toxines->injection_toxine == 'oui' ? 'Oui' : 'Non' }}</p>
        @if ($injections_toxines->injection_toxine == 'oui')
            <p><strong>Date :</strong> {{ $injections_toxines->date_injection }}</p>
            <p><strong>Type :</strong> {{ $injections_toxines->type_toxine }}</p>
            <p><strong>Dose totale injectée :</strong> {{ $injections_toxines->dose_totale_injectee }}</p>
            <p><strong>Dose par Muscle injecté :</strong> {{ $injections_toxines->dose_par_muscle }}</p>
        @endif
@endif

 
 <p><strong>Corset siège :</strong> {{ $appareillages->corset_siege == 'oui' ? 'Oui' : 'Non' }}</p>
 <p><strong>Verticalisateur :</strong> {{ $appareillages->verticalisateur == 'oui' ? 'Oui' : 'Non' }}</p>
 <p><strong>ACP :</strong> {{ $appareillages->acp == 'oui' ? 'Oui' : 'Non' }}</p>
<p><strong>FR :</strong> {{ $appareillages->fr == 'oui' ? 'Oui' : 'Non' }}</p>
<p><strong>Déambulateur :</strong> {{ $appareillages->deambulateur == 'oui' ? 'Oui' : 'Non' }}</p>
<p><strong>Attelle Tamarak de marche :</strong> {{ $appareillages->attelle_tamarak_marche == 'oui' ? 'Oui' : 'Non' }}</p>
<p><strong>Attelle anti talus :</strong> {{ $appareillages->attelle_anti_talus == 'oui' ? 'Oui' : 'Non' }}</p>
<p><strong>Corset garchoix :</strong> {{ $appareillages->corset_garchoix == 'oui' ? 'Oui' : 'Non' }}</p>
 @if ($appareillages)
        <p><strong>Orthèse de la main :</strong> {{ $appareillages->orthese_main == 'oui' ? 'Oui' : 'Non' }}</p>
        <p><strong>Orthèse plantaire :</strong> {{ $appareillages->orthese_plantaire == 'oui' ? 'Oui' : 'Non' }}</p>
        @if ($appareillages->orthese_plantaire == 'oui')
            <p><strong>Type d'orthèse plantaire :</strong> {{ $appareillages->type_orthese_plantaire }}</p>
        @endif
        <p><strong>Chaussures :</strong> {{ $appareillages->chaussures == 'oui' ? 'Oui' : 'Non' }}</p>
        <p><strong>Remarques :</strong> {{ $appareillages->remarque }}</p>
@endif        
@if ($prescriptions)
        <p><strong>Plâtre :</strong> {{ $prescriptions->platre == 'oui' ? 'Oui' : 'Non' }}</p>
        @if ($prescriptions->platre == 'oui')
            <p><strong>Type de plâtre :</strong> {{ $prescriptions->type_platre }}</p>
        @endif
@endif        


@if ($prescriptions)
        <p><strong>Ergothérapie :</strong> {{ $prescriptions->ergotherapie == 'oui' ? 'Oui' : 'Non' }}</p>
        @if ($prescriptions->ergotherapie == 'oui')
            <p><strong>Depuis quand :</strong> {{ $prescriptions->depuis_quand }}</p>
        @endif
@endif 
@if ($prescriptions)
        <p><strong>Neuropsychologique :</strong> {{ $prescriptions->neuropsychologique == 'oui' ? 'Oui' : 'Non' }}</p>
  
@endif

    @if ($prescriptions)
        <p><strong>Chirurgie :</strong> {{ $prescriptions->chirurgie == 'oui' ? 'Oui' : 'Non' }}</p>
        @if ($prescriptions->chirurgie == 'oui')
            <p><strong>Décision chirurgicale :</strong> {{ $prescriptions->decision_chirurgie }}</p>
        @endif 
   @endif
   </div>    
   </div>
   </div>        



               
        
        <!-- Ajout du bouton d'impression dans une div pour un meilleur positionnement -->
        <div class="col-lg-6 mb-2">
            <button id="print-button" class="btn btn-primary" onclick="printPage()">Imprimer cette page</button>
        </div>
    </div>
</div>

@include('footer')


<style>

  /* Styles généraux pour les sections à imprimer */
.print-section {
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 8px;
    background-color: #f9f9f9;
    margin-bottom: 20px;
     margin-left: 80mm; /* Décalage à droite */
    
}

.print-header {
    text-align: center;
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
    padding-bottom: 10px;
}

.print-header h2 {
    font-family: 'Arial', sans-serif;
    color: #333;
    font-size: 18px; /* Taille de police pour les titres */
}

.print-body p {
    font-family: 'Arial', sans-serif;
    color: #555;
    margin: 10px 0;
    font-size: 12px; /* Taille de police pour les paragraphes */
    
}

.print-body p strong {
    color: #000;
}

@media print {
    @page {
        size: A4;
        margin: 0; /* Supprimez les marges par défaut */
    }

    body * {
        visibility: hidden;
    }

    .print-section, .print-section * {
        visibility: visible;
    }

    .print-section {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 8px;
        background-color: #f9f9f9;
        margin-bottom: -10; /* Supprimez le margin-bottom pour éviter le débordement de contenu */
        margin-left: -80mm; /* Centrez horizontalement */
        margin-right: auto; /* Centrez horizontalement */
        width: 190mm; /* Largeur A4 */
        height: 250mm; /* Hauteur A4 */
        page-break-after: always; /* Assurez-vous que chaque section commence sur une nouvelle page */
        box-sizing: border-box;
    }
}



</style>

<script>
    function printPage() {
        window.print();
    }
</script>