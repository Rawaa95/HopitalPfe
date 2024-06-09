@include('header')



	<!--**********************************
		Content body start
	***********************************-->
    <style>
     .notification {
            display: none; /* Hide the notification by default */
        }

        /* Style pour le tableau */


table {
    border-collapse: collapse;
    width: 90%; /* Ajustez la largeur du tableau selon vos besoins */
    margin: 10px auto; /* Centrer le tableau sur la page */
}

/* Style pour les cellules du tableau */
th, td {
    border: 1px solid #dddddd;
    padding: 2px;
    text-align: center;
}

/* Style pour les en-têtes de tableau */
th {
    background-color: #008000;

}

/* Style pour les colonnes */
.left, .middle, .right {
    background-color: #f9f9f9;
}

/* Spécificité pour les colonnes gauche et droite subdivisées */
.left-before, .left-after, .right-before, .right-after {
    background-color: #008000;
}

.left-before input, .left-after input, .right-before input, .right-after input {
    width: 100%; /* Assurez-vous que les inputs ne dépassent pas la cellule */
}

/* Style spécifique pour centrer les colonnes parent */
.parent {

    text-align: center ;
	background-color:#008000;
}

.middle {
    font-weight:normal; /* Texte en gras */
    color: #000000; /* Couleur noire */}



</style>

<form id="myForm" method="post" action="{{ route('medecinBilanspost') }}" enctype="multipart/form-data" >
    @csrf
   <input type="hidden" name="visite_id" value="{{ $visite_id }}">
   <input type="hidden" name="dossier_id" value="{{ $dossier_id }}">


        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<li class="breadcrumb-item active text-center">
						<a href="javascript:void(0)" style="color: #008000; display: flex; align-items: center; justify-content: center;">
							<i class="las la-file-medical" style="font-size: 30px; margin-right: 5px;"></i>
							<span style="font-size: 24px;">Evaluation clinique d'un paralysé cérébrale</span>
						</a>
					</li>
                </div>
				<div class="element-area">
					<div class="element-view">
						<!-- row -->
						<div class="row">
							<!-- Column interogatoire -->
							<div class="col-xl-12">
								<div class="card dz-card">
									<div class="card-header flex-wrap border-0 pb-0" id="default-tab">
										<h4 class="card-title mb-0"> Interrogatoire</h4>

									</div>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<!-- Nav tabs -->
												<div class="default-tab">
													<ul class="nav nav-tabs" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-question-circle me-2"></i>Information général</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="las la-heartbeat me-2"></i>Antécedents</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#contact"><i class="las la-history me-2"></i> Historique thérapeutique</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#message"><i class="las la-user-injured m-2"></i>Doléances actuelles</a>
														</li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane fade show active" id="home" role="tabpanel">
															<div class="pt-4">
																<div class="row">
																<div class="col-xl-6 col-xxl-8">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                        <div class="media d-sm-flex d-block text-center text-sm-start pb-4 mb-4 border-bottom">
                                                                            <img alt="image" class="rounded me-sm-4 me-0" width="100" src="{{asset('/image/'.$dossier->patient->photo)}}" >
                                                                            <div class="media-body align-items-center">
                                                                                <div class="d-sm-flex d-block justify-content-between my-3 my-sm-0">
                                                                                    <div>
                                                                                        <h3 class="fs-22 text-black font-w600 mb-0" >{{$dossier->patient->nom}} {{$dossier->patient->prenom}}</h3>
                                                                                        <p class="mb-2 mb-sm-2">Né le {{$dossier->patient->date_naissance}}</p>
                                                                                    </div>
																				
                                                                                    <span><strong>Num D : </strong> {{ $dossier->num_dossier ?? '' }}</span>
																					 <span><strong>Num F : </strong>{{ $dossier->num_facultatif ?? '' }}</span>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="btn btn-primary light btn-rounded mb-2 me-2" style="margin-left:90px">
                                                                                    
                                                                                    {{ $dossier->patient->sexe ?? '' }}
                                                                                </a>

										
									</div>
								</div>
								<div class="row">
									<div class="col-lg-9 mb-3">
										<div class="media align-items-start">
											<span class="p-3 border border-primary-light rounded-circle me-3">
												<svg width="22" height="22" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0)">
													<path d="M27.5716 13.4285C27.5716 22.4285 16.0001 30.1428 16.0001 30.1428C16.0001 30.1428 4.42871 22.4285 4.42871 13.4285C4.42871 10.3596 5.64784 7.41637 7.8179 5.24631C9.98797 3.07625 12.9312 1.85712 16.0001 1.85712C19.0691 1.85712 22.0123 3.07625 24.1824 5.24631C26.3524 7.41637 27.5716 10.3596 27.5716 13.4285Z" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M16.0002 17.2857C18.1305 17.2857 19.8574 15.5588 19.8574 13.4286C19.8574 11.2983 18.1305 9.57141 16.0002 9.57141C13.87 9.57141 12.1431 11.2983 12.1431 13.4286C12.1431 15.5588 13.87 17.2857 16.0002 17.2857Z" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
													</g>
													<defs>
													<clipPath id="clip0">
													<rect width="30.8571" height="30.8571" fill="white" transform="translate(0.571533 0.571411)"></rect>
													</clipPath>
													</defs>
												</svg>
											</span>
											<div class="media-body">
												<span class="d-block text-dark  font-w600 mb-1">Address</span>
												<p class="mb-0 font-w600">{{ $dossier->patient->adresse ?? '' }}</p>
											</div>
										</div>
									</div>
								{{-- 
									<div class="col-lg-6">
										<div class="map-bx mb-3">
											<img src="images/svg/map.svg" alt="">
											<a href="javascript:void(0);" class="map-button">View in Fullscreen</a>
											<a class="map-marker" href="javascript:void(0);">
												<i class="las la-map-marker-alt"></i>
											</a>
										</div>
									</div>
									--}}
									<div class="col-lg-6 mb-md-0 mb-3">
										<div class="media">
											<span class="p-3 border border-primary-light rounded-circle me-3">
												<svg width="22" height="22" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M28.2884 21.7563V25.6138C28.2898 25.9719 28.2165 26.3264 28.073 26.6545C27.9296 26.9826 27.7191 27.2771 27.4553 27.5192C27.1914 27.7613 26.8798 27.9456 26.5406 28.0604C26.2014 28.1751 25.8419 28.2177 25.4853 28.1855C21.5285 27.7555 17.7278 26.4035 14.3885 24.238C11.2817 22.2638 8.64771 19.6297 6.67352 16.523C4.50043 13.1685 3.14808 9.34928 2.72601 5.37477C2.69388 5.0192 2.73614 4.66083 2.8501 4.32248C2.96405 3.98413 3.14721 3.67322 3.38792 3.40953C3.62862 3.14585 3.92159 2.93517 4.24817 2.79092C4.57475 2.64667 4.9278 2.57199 5.28482 2.57166H9.14232C9.76634 2.56552 10.3713 2.78649 10.8445 3.1934C11.3176 3.60031 11.6267 4.16538 11.714 4.78329C11.8768 6.01778 12.1788 7.22988 12.6141 8.39648C12.7871 8.85671 12.8245 9.35689 12.722 9.83775C12.6194 10.3186 12.3812 10.76 12.0354 11.1096L10.4024 12.7426C12.2329 15.9617 14.8983 18.6271 18.1174 20.4576L19.7504 18.8246C20.1001 18.4789 20.5414 18.2406 21.0223 18.1381C21.5031 18.0355 22.0033 18.073 22.4636 18.246C23.6302 18.6813 24.8423 18.9832 26.0767 19.1461C26.7014 19.2342 27.2718 19.5488 27.6796 20.0301C28.0874 20.5113 28.304 21.1257 28.2884 21.7563Z" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
											<div class="media-body">
												<span class="d-block text-dark  font-w600 mb-1">Phone</span>
												<p class="mb-0 font-w600">{{ $dossier->patient->num_telephone ?? '' }}</p>
											</div>
										</div>
									</div>
									{{-- 
									<div class="col-lg-6">
										<div class="media">
											<span class="p-3 border border-primary-light rounded-circle me-3">
												<svg width="22" height="22" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.14344 5.14331H25.7168C27.1312 5.14331 28.2884 6.30056 28.2884 7.71498V23.145C28.2884 24.5594 27.1312 25.7166 25.7168 25.7166H5.14344C3.72903 25.7166 2.57178 24.5594 2.57178 23.145V7.71498C2.57178 6.30056 3.72903 5.14331 5.14344 5.14331Z" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M28.2884 7.71503L15.4301 16.7159L2.57178 7.71503" stroke="#2BC155" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
											<div class="media-body">
												<span class="d-block text-black font-w600 mb-1">Email</span>
												<p class="mb-0 font-w600"></p>
											</div>
										</div>
									</div>
									--}} 
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-md-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="fs-20 font-w600">Historique</h4>
							</div>
							<div class="card-body">
								<div class="widget-timeline-icon2">
									<ul class="timeline">
									@foreach($visites as $visite)
										<li>
											<div class="icon bg-primary"><i class="las la-stethoscope"></i></div>
											<a class="timeline-panel text-muted" href="{{route('medecinVisites', $dossier_id)}}">
												<h4 class="mb-2 mt-1">{{$visite->titre}}</h4>
												<p class="fs-15 mb-3 ">{{$visite->date}}</p>
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
		<div class="tab-pane fade" id="profile">
			<div class="pt-4">
				<div class="col-lg-12 mb-2">
					<div class="row">
						<!-- Champs "fouchou" -->
						<div class="col-lg-6 mb-2">
							<div class="form-group">
                                <label class="text-label">Profession du Père :</label>
                                <input type="text" name="profession_pere" class="form-control" placeholder="Profession du père" required value="{{ $interrogatoires ? $interrogatoires->profession_pere : '' }}">
                                <div class="invalid-feedback">Ce champ est requis.</div>
                            </div>

                            <!-- Champs pour la profession de la mère -->
                            <div class="form-group">
                                <label class="text-label">Profession de la mère :</label>
                                <input type="text" name="profession_mere" class="form-control" placeholder="Profession de la mère" required value="{{ $interrogatoires ? $interrogatoires->profession_mere : '' }}">
                                <div class="invalid-feedback">Ce champ est requis.</div>
                            </div>
					  <label class="text-label">Mode d'habitat 1 :<span class="required"></span></label>
					  <div class="row">
						  <div class="col-lg-6">
							  <div class="form-check custom-checkbox mb-3">
								  <input type="checkbox" class="form-check-input" id="habitat_urbain" name="mode_habitat_1" value="Urbain" required {{ $interrogatoires && $interrogatoires->mode_habitat_1 == 'Urbain' ? 'checked' : '' }}>
								  <label class="form-check-label" for="habitat_urbain">Urbain</label>
							  </div>
						  </div>
						  <div class="col-lg-6">
							  <div class="form-check custom-checkbox mb-3">
								  <input type="checkbox" class="form-check-input" id="habitat_rural" name="mode_habitat_1" value="Rural" required {{ $interrogatoires && $interrogatoires->mode_habitat_1 == 'Rural' ? 'checked' : '' }}>
								  <label class="form-check-label" for="habitat_rural">Rural</label>
							  </div>
						  </div>
					  </div>
					  <label class="text-label">Mode d'habitat 2 :<span class="required"></span></label>
					  <div class="row">
						  <div class="col-lg-6">
							  <div class="form-check custom-checkbox mb-3">
								  <input type="checkbox" class="form-check-input" id="logement_rez_chaussee" name="mode_habitat_2" value="Rez-de-chaussée" required {{ $interrogatoires && $interrogatoires->mode_habitat_2 == 'Rez-de-chaussée' ? 'checked' : '' }}>
								  <label class="form-check-label" for="logement_rez_chaussee">Rez-de-chaussée</label>
							  </div>
						  </div>
						  <div class="col-lg-6">
							  <div class="form-check custom-checkbox mb-3">
								  <input type="checkbox" class="form-check-input" id="logement_avec_escalier" name="mode_habitat_2" value="Avec escalier" required {{$interrogatoires && $interrogatoires->mode_habitat_2 == 'Avec escalier' ? 'checked' : '' }}>
								  <label class="form-check-label" for="logement_avec_escalier">Avec escalier</label>
							  </div>
						  </div>
					  </div>
					  <label class="text-label">Scolariser :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="niveau_scolaire_oui" name="scolariser" value="oui" {{ $interrogatoires && $interrogatoires->scolariser == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="niveau_scolaire_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="niveau_scolaire_non" name="scolariser" value="non" {{ $interrogatoires && $interrogatoires->scolariser == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="niveau_scolaire_non">Non</label>
                        </div>
                    </div>
				</div>
					<div class="form-group">
						<div id="niveau_scolaire_options" style="display: none;">
							<div class="mb-3">
								<label class="form-label">Niveau scolaire :</label>
								<select class="default-select form-control wide mb-3" id="niveau_scolaire" name="niveau_scolaire">
									<option value="primaire" {{ isset($interrogatoires) && $interrogatoires->niveau_scolaire == 'primaire' ? 'selected' : '' }}>Primaire</option>
									<option value="secondaire" {{ isset($interrogatoires) && $interrogatoires->niveau_scolaire == 'secondaire' ? 'selected' : '' }}>Secondaire</option>
									<option value="supérieur" {{ isset($interrogatoires) && $interrogatoires->niveau_scolaire == 'supérieur' ? 'selected' : '' }}>Supérieur</option>
									<option value="spécialisé" {{ isset($interrogatoires) && $interrogatoires->niveau_scolaire == 'spécialisé' ? 'selected' : '' }}>Spécialisé</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group" id="rendement_scolaire_container" style="display: none;">
						<label class="form-label">Rendement scolaire :</label>
						<textarea class="form-control" rows="8" id="rendement_scolaire" name="rendement_scolaire"> {{ $interrogatoires ? $interrogatoires->rendement_scolaire : '' }}</textarea>
					</div>
					<div class="form-group">
						<label for="description" class="form-label">Description :</label>
						<textarea class="form-control" rows="8" id="description" name="description">{{ $interrogatoires ? $interrogatoires->description : '' }}</textarea>
					</div>
					<label class="text-label">Cas similaires / congénitales dans la famille :</label>
						<div class="row">
							<div class="col-lg-6">
									<div class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" id="cas_similaires_oui" name="cas_similaires" value="oui" {{ $interrogatoires && $interrogatoires->cas_similaires == 'oui' ? 'checked' : '' }}>
										<label class="form-check-label" for="cas_similaires_oui">Oui</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" id="cas_similaires_non" name="cas_similaires" value="non" {{$interrogatoires && $interrogatoires->cas_similaires == 'non' ? 'checked' : '' }}>
										<label class="form-check-label" for="cas_similaires_non">Non</label>
									</div>
								</div>
						</div>

						<label class="text-label">Consanguinité :</label>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-check custom-checkbox mb-3">
									<input class="form-check-input" type="checkbox" id="consanguinite_oui" name="consanguinite" value="oui" {{$interrogatoires && $interrogatoires->consanguinite == 'oui' ? 'checked' : '' }}>
									<label class="form-check-label" for="consanguinite_oui">Oui</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-check custom-checkbox mb-3">
									<input class="form-check-input" type="checkbox" id="consanguinite_non" name="consanguinite" value="non" {{ $interrogatoires && $interrogatoires->consanguinite == 'non' ? 'checked' : '' }}>
									<label class="form-check-label" for="consanguinite_non">Non</label>
								</div>
							</div>
						</div>

					<br>
					<h5><i class="las la-clone mi-2"></i> Antécedents personnels</h5>
					<br>
					<label class="text-label">Suivi Grossesse :</label>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-check custom-checkbox mb-3">
								<input class="form-check-input" type="checkbox" id="suivi_grossesse_oui" name="suivi_grossesse" value="oui" {{ $interrogatoires && $interrogatoires->suivi_grossesse == 'oui' ? 'checked' : '' }}>
								<label class="form-check-label" for="suivi_grossesse_oui">Oui</label>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-check custom-checkbox mb-3">
								<input class="form-check-input" type="checkbox" id="suivi_grossesse_non" name="suivi_grossesse" value="non" {{  $interrogatoires && $interrogatoires->suivi_grossesse == 'non' ? 'checked' : '' }}>
								<label class="form-check-label" for="suivi_grossesse_non">Non</label>
							</div>
						</div>
					</div>
					<!-- Éléments de détails du suivi de grossesse -->
					<div id="suiviDetails">
						<label class="text-label">Par qui :</label>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-check custom-checkbox mb-3">
									<input class="form-check-input" type="checkbox" id="par_qui_g" name="par_qui" value="gynecologue" {{ $interrogatoires && $interrogatoires->par_qui == 'gynecologue' ? 'checked' : '' }}>
									<label class="form-check-label" for="par_qui_g">Gynécologue</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-check custom-checkbox mb-3">
									<input class="form-check-input" type="checkbox" id="par_qui_f" name="par_qui" value="sage_femme" {{ $interrogatoires && $interrogatoires->par_qui == 'sage_femme' ? 'checked' : '' }}>
									<label class="form-check-label" for="par_qui_f">Sage-femme</label>
								</div>
							</div>
						</div>
					</div>


							<label class="text-label">Déroulement de la grossesse compliqué :</label>
							<div class="row">
								<div class="col-lg-6">
									<div  class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" id="deroulement_oui" name="deroulement_grossesse" value="oui" {{  $interrogatoires && $interrogatoires-> deroulement_grossesse == 'oui' ? 'checked' : '' }}>
										<label class="form-check-label" for="deroulement_oui">Oui</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div  class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" id="deroulement_non" name="deroulement_grossesse" value="non" {{ $interrogatoires && $interrogatoires->deroulement_grossesse == 'non' ? 'checked' : '' }}>
										<label class="form-check-label" for="deroulement_non">Non</label>
									</div>
								</div>
							</div>
					       <div class="form-group" id="complications_container" style="{{ isset($interrogatoires) && $interrogatoires->complication ? '' : 'display: none;' }}">
								<label class="text-label">Complications :</label>
								<select class="default-select form-control wide mb-3" id="complication_select" name="complication">
									<option value="Toxemie" {{ isset($interrogatoires) && $interrogatoires->complication == 'Toxemie' ? 'selected' : '' }}>Toxémie gravidique</option>
									<option value="Diabete" {{ isset($interrogatoires) && $interrogatoires->complication == 'Diabete' ? 'selected' : '' }}>Diabète gestationnel</option>
									<option value="RCIU" {{ isset($interrogatoires) && $interrogatoires->complication == 'RCIU' ? 'selected' : '' }}>RCIU</option>
									<option value="Embryofeothopathies" {{ isset($interrogatoires) && $interrogatoires->complication == 'Embryofeothopathies' ? 'selected' : '' }}>Embryofeothopathies</option>
								</select>
							</div>

						<label class="text-label">Accouchement :</label>
				<div class="row">
					<div class="col-lg-6">
						<div  class="form-check custom-checkbox mb-3">
							<input class="form-check-input" type="checkbox" id="vb" name="accouchement" value="vb" {{ $interrogatoires && $interrogatoires->accouchement == 'vb' ? 'checked' : '' }}>
							<label class="form-check-label" for="vb">VB</label>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-check custom-checkbox mb-3">
							<input class="form-check-input" type="checkbox" id="cs" name="accouchement" value="cs" {{$interrogatoires && $interrogatoires->accouchement == 'cs' ? 'checked' : '' }}>
							<label class="form-check-label" for="cs">C/S</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="text-label">Terme :<span class="required"></span></label>
					<input type="text" name="terme" class="form-control" placeholder="Terme 00 SA" required value="{{ $interrogatoires ? $interrogatoires->terme : '' }}">
				</div>



			</div>


			<!-------en bas -->
						<div class="col-lg-6 mb-2">
							<div class="form-group">

								<div class="form-group">
									<label class="text-label">Apgar :<span class="required"></span></label>
									<input type="text" name="apgar" class="form-control" placeholder="Apgar 00/10" required value="{{ $interrogatoires ? $interrogatoires->apgar : '' }}">
								</div>
								<label class="text-label">PN :<span class="required"></span></label>
								<input type="text" name="pn" class="form-control" placeholder="PN 0000g" required value="{{ $interrogatoires ? $interrogatoires->pn : '' }}">
							</div>
							<label class="text-label">Hospitalisation en néonat :</label>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" id="hospitalisation_oui" name="hospitalisation_neonat" value="oui" {{ $interrogatoires && $interrogatoires->hospitalisation_neonat == 'oui' ? 'checked' : '' }}>
										<label class="form-check-label" for="hospitalisation_oui">Oui</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-check custom-checkbox mb-3">
										<input class="form-check-input" type="checkbox" id="hospitalisation_non" name="hospitalisation_neonat" value="non"{{ $interrogatoires && $interrogatoires->hospitalisation_neonat == 'non' ? 'checked' : '' }}>
										<label class="form-check-label" for="hospitalisation_non">Non</label>
									</div>
								</div>
							</div>
							<div class="form-group" id="nb_jours_input" style="display: none;">
								<label class="text-label">Nombre de jours :<span class="required"></span></label>
								<input type="number" name="nombre_jours_rea" class="form-control" placeholder="Nombre de jours" min="1" required value="{{$interrogatoires ? $interrogatoires->nombre_jours_rea : '' }}">
							</div>

									<label class="text-label">Réa néonat :</label>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="rea_oui" name="rea_neonat" value="oui" {{ $interrogatoires && $interrogatoires->rea_neonat == 'oui' ? 'checked' : '' }}>
												<label class="form-check-label" for="rea_oui">Oui</label>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="rea_non" name="rea_neonat" value="non" value="{{ $interrogatoires && $interrogatoires->rea_neonat == 'non' ? 'checked' : '' }}">
												<label class="form-check-label" for="rea_non">Non</label>
											</div>
										</div>
									</div>

								<div class="form-group">
								<label class="text-label">Etiologies :</label>
								<select class="default-select form-control wide mb-3" id="complication_oui_select" name="etiologies">
									<option value="Premature" {{ isset($interrogatoires) && $interrogatoires->etiologies == 'Premature' ? 'selected' : '' }}>Prématuré</option>
									<option value="SFA" {{ isset($interrogatoires) && $interrogatoires->etiologies == 'SFA' ? 'selected' : '' }}>SFA</option>
									<option value="SFC" {{ isset($interrogatoires) && $interrogatoires->etiologies == 'SFC' ? 'selected' : '' }}>SFC</option>
									<option value="infections" {{ isset($interrogatoires) && $interrogatoires->etiologies == 'infections' ? 'selected' : '' }}>Infections post-natales</option>
								</select>
							</div>

									<label class="text-label">Crise convulsive :</label>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="crise_oui" name="crise_convulsive" value="oui" {{ $interrogatoires && $interrogatoires->crise_convulsive == 'oui' ? 'checked' : '' }}>
												<label class="form-check-label" for="crise_oui">Oui</label>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="crise_non" name="crise_convulsive" value="non" {{ $interrogatoires && $interrogatoires->crise_convulsive == 'non' ? 'checked' : '' }}>
												<label class="form-check-label" for="crise_non">Non</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="text-label">Médecin traitant :<span class="required"></span></label>
										<input type="text" name="medecin_traitant" class="form-control" placeholder="Médecin traitant" required value="{{ $interrogatoires ? $interrogatoires->medecin_traitant : '' }}">
									</div>
									<div class="form-group">
										<label class="form-label">Explorations:</label>
										<textarea class="form-control" rows="3" id="exploration" name="explorations">{{ $interrogatoires ? $interrogatoires->explorations : '' }}</textarea>
									</div>
									<div class="form-group">
										<label class="text-label">EchoTF :</label>
										<input type="text" name="echotf" class="form-control" placeholder="EchoTF" value="{{ $interrogatoires ? $interrogatoires->echotf : '' }}">
									</div>
									<div class="form-group">
										<label class="text-label">TDM cérébrale :</label>
										<input type="text" name="tdm_cerebrale" class="form-control" placeholder="TDM cérébrale" value="{{ $interrogatoires ? $interrogatoires->tdm_cerebrale : '' }}">
									</div>
									<div class="form-group">
										<label class="text-label">IRM cérébrale :</label>
										<input type="text" name="irm_cerebrale" class="form-control" placeholder="IRM cérébrale" value="{{ $interrogatoires ? $interrogatoires->irm_cerebrale : '' }}">
									</div>
									<div class="form-group">
										<label class="text-label">EEG :</label>
										<input type="text" name="eeg" class="form-control" placeholder="EEG" value="{{ $interrogatoires ? $interrogatoires->eeg : '' }}">
									</div>
									<div class="form-group">
										<label class="text-label">Rx Bassin :</label>
										<input type="text" name="rx_bassin" class="form-control" placeholder="Rx Bassin" value="{{ $interrogatoires ? $interrogatoires->rx_bassin : '' }}">
									</div>
									<div class="form-group">
										<label class="text-label">Autres :</label>
										<input type="text" name="autre_r" class="form-control" placeholder="Autres" value="{{ $interrogatoires ? $interrogatoires->autre_r : '' }}">
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>


			<script>
				// Fonction pour basculer l'affichage des éléments en fonction de l'état de la case à cocher "Scolariser"
				function toggleScolariser() {
			// Vérification de l'état de la case à cocher "Scolariser"
			if (checkboxScolariser.checked) {
			// Afficher les options de niveau scolaire
			niveauScolaireOptions.style.display = 'block';
			// Afficher le conteneur de rendement scolaire
			rendementScolaireContainer.style.display = 'block';
			// Focus sur le champ de rendement scolaire lorsqu'il est affiché
		rendementScolaireTextarea.focus();
		} else {
			// Masquer les options de niveau scolaire
		niveauScolaireOptions.style.display = 'none';
		// Masquer le conteneur de rendement scolaire
			rendementScolaireContainer.style.display = 'none';
		}
	}

		// Sélection des éléments HTML
				const checkboxScolariser = document.getElementById('niveau_scolaire_oui');
			const niveauScolaireOptions = document.getElementById('niveau_scolaire_options');
			const rendementScolaireContainer = document.getElementById('rendement_scolaire_container');
		const rendementScolaireTextarea = document.getElementById('rendement_scolaire');

		// Ajouter un écouteur d'événements à la case à cocher "Scolariser"
		checkboxScolariser.addEventListener('change', toggleScolariser);

		// Appeler la fonction pour initialiser l'état de l'affichage
			toggleScolariser();
		/*******************/


		// Fonction pour basculer l'affichage des éléments en fonction de l'état de la case à cocher "Suivi Grossesse"
		function toggleSuiviGrossesse() {
			// Vérification de l'état de la case à cocher "Suivi Grossesse"
			if (suiviGrossesseOui.checked) {
				// Afficher les détails du suivi
				suiviDetails.style.display = 'block';
			} else {
				// Masquer les détails du suivi
				suiviDetails.style.display = 'none';
			}
		}

		// Sélection de la case à cocher "Suivi Grossesse"
		const suiviGrossesseOui = document.getElementById('suivi_grossesse_oui');

		// Sélection des éléments HTML contenant les détails du suivi
		const suiviDetails = document.getElementById('suiviDetails');

		// Ajouter un écouteur d'événements à la case à cocher "Suivi Grossesse"
		suiviGrossesseOui.addEventListener('change', toggleSuiviGrossesse);

		// Appeler la fonction pour initialiser l'état de l'affichage
		toggleSuiviGrossesse();
		/********************/

			// Fonction pour basculer l'affichage des éléments en fonction de l'état de la case à cocher "Déroulement de la grossesse compliqué"
			function toggleDeroulementGrossesse() {
    // Vérification de l'état de la case à cocher "Déroulement de la grossesse compliqué"
    if (deroulementOui.checked) {
        // Afficher le formulaire de complications
        complicationsContainer.style.display = 'block';
    } else {
        // Masquer le formulaire de complications
        complicationsContainer.style.display = 'none';
    }
}

// Sélection de la case à cocher "Déroulement de la grossesse compliqué"
const deroulementOui = document.getElementById('deroulement_oui');

// Sélection de l'élément contenant le formulaire de complications
const complicationsContainer = document.getElementById('complications_container');

// Ajouter un écouteur d'événements à la case à cocher "Déroulement de la grossesse compliqué"
deroulementOui.addEventListener('change', toggleDeroulementGrossesse);

// Appeler la fonction pour initialiser l'état de l'affichage
toggleDeroulementGrossesse();

function toggleNbJours() {
const hospitalisationOui = document.getElementById('hospitalisation_oui');
const nbJoursInput = document.getElementById('nb_jours_input');

if (hospitalisationOui.checked) {
nbJoursInput.style.display = 'block';
} else {
nbJoursInput.style.display = 'none';
}
}

document.getElementById('hospitalisation_oui').addEventListener('change', toggleNbJours);
toggleNbJours(); // Appel initial pour définir l'état initial

/********/
</script>
<div class="tab-pane fade" id="contact">
    <div class="pt-4">
        <div class="row">
            <div class="col-lg-6 mb-2">
                <label class="text-label">Médication :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="medication_oui" name="medication" value="oui" {{ $interrogatoires && $interrogatoires->medication == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="medication_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="medication_non" name="medication" value="non" {{ $interrogatoires && $interrogatoires->medication == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="medication_non">Non</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="medication_laquelle" style="display: none;">
                    <label class="text-label">Laquelle :</label>
                    <input type="text" name="medication_laquelle" class="form-control" placeholder="Laquelle" value="{{ $interrogatoires ? $interrogatoires->medication_laquelle : '' }}">
                </div>
                <label class="text-label">Kinésithérapie :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="kinesitherapie_oui" name="kinesitherapie" value="oui" {{ $interrogatoires && $interrogatoires->kinesitherapie == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="kinesitherapie_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="kinesitherapie_non" name="kinesitherapie" value="non" {{ $interrogatoires && $interrogatoires->kinesitherapie == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="kinesitherapie_non">Non</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="kinesitherapie_depuis_quand" style="display: none;">
                    <label class="text-label">Depuis quand :</label>
                    <input   class="form-control" type="text" name="kinesitherapie_depuis_quand" placeholder="Depuis quand" value="{{ $interrogatoires ? $interrogatoires->kinesitherapie_depuis_quand : '' }}">
                </div>
                <div class="form-group"z>
				<div id="kinesitherapie_nb_seances" style="display: none;">
                    <label class="text-label">Nombre de séances par semaine :</label>
                    <input  class="form-control"  type="text" name="kinesitherapie_nb_seances" placeholder="Nombre de séances" value="{{ $interrogatoires ? $interrogatoires->kinesitherapie_nb_seances : '' }}">
                </div>
				</div>
                <label class="text-label">Appareillage :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="appareillage_oui" name="appareillage" value="oui" {{ $interrogatoires && $interrogatoires->appareillage == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="appareillage_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="appareillage_non" name="appareillage" value="non" {{ $interrogatoires && $interrogatoires->appareillage == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="appareillage_non">Non</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="appareillage_laquelle" style="display: none;">
                    <label class="text-label">Laquelle :</label>
                    <input type="text" name="appareillage_laquelle" class="form-control" placeholder="Laquelle" value="{{ $interrogatoires ? $interrogatoires->appareillage_laquelle : '' }}">
                </div>
            </div>
            <div class="col-lg-6 mb-2">
                <label class="text-label">Orthophonie :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="orthophonie_oui" name="orthophonie" value="oui"{{ $interrogatoires && $interrogatoires->orthophonie == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="orthophonie_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="orthophonie_non" name="orthophonie" value="non" {{ $interrogatoires && $interrogatoires->orthophonie == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="orthophonie_non">Non</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="depuiQuandContainer" style="display: none;">
                    <label class="text-label">Depuis quand :</label>
                    <input type="text" name="orthophonie_depuis_quand" class="form-control" placeholder="Depuis quand" value="{{ $interrogatoires ? $interrogatoires->orthophonie_depuis_quand : '' }}">
                </div>
                <div class="form-group" id="nbSeancesContainer" style="display: none;">
                    <label class="text-label">Nombre de séances par semaine :</label>
                    <input type="text" name="orthophonie_nb_seances" class="form-control" placeholder="Nombre de séances" value="{{ $interrogatoires ? $interrogatoires->orthophonie_nb_seances : '' }}">
                </div>
                <label class="text-label">Ergothérapie :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="ergotherapie_oui" name="ergotherapie" value="oui" {{ $interrogatoires && $interrogatoires->ergotherapie == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="ergotherapie_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="ergotherapie_non" name="ergotherapie" value="non" {{ $interrogatoires && $interrogatoires->ergotherapie == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="ergotherapie_non">Non</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="ergoDepuisQuandContainer" style="display: none;">
                    <label class="text-label">Depuis quand :</label>
                    <input type="text" name="ergotherapie_depuis_quand" class="form-control" placeholder="Depuis quand" value="{{ $interrogatoires ? $interrogatoires->ergotherapie_depuis_quand : '' }}">
                </div>
                <div class="form-group" id="ergoNbSeancesContainer" style="display: none;">
                    <label class="text-label">Nombre de séances par semaine :</label>
                    <input type="text" name="ergotherapie_nb_seances" class="form-control" placeholder="Nombre de séances" value="{{ $interrogatoires ? $interrogatoires->ergotherapie_nb_seances : '' }}">
                </div>
                <label class="text-label">Chirurgie orthopédique :</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="chirurgie_orthopedique_oui" name="chirurgie_orthopedique" value="oui" {{ $interrogatoires && $interrogatoires->chirurgie_orthopedique == 'oui' ? 'checked' : '' }}>
                            <label class="form-check-label" for="chirurgie_orthopedique_oui">Oui</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check custom-checkbox mb-3">
                            <input class="form-check-input" type="checkbox" id="chirurgie_orthopedique_non" name="chirurgie_orthopedique" value="non" {{ $interrogatoires && $interrogatoires->chirurgie_orthopedique == 'non' ? 'checked' : '' }}>
                            <label class="form-check-label" for="chirurgie_orthopedique_non">Non</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="detail_chirurgie_container" style="display: none;">
                    <label class="text-label">Détail chirurgie :</label>
                    <input type="text" name="detail_chirurgie" class="form-control" placeholder="Détail chirurgie" value="{{ $interrogatoires ? $interrogatoires->detail_chirurgie : '' }}">
                </div>
            </div>
        </div>
       </div>
      </div>



																		<script>
																			function toggleMedicationLaquelle() {
											const medicationOui = document.getElementById('medication_oui');
											const medicationLaquelleInput = document.getElementById('medication_laquelle');

											if (medicationOui.checked) {
												medicationLaquelleInput.style.display = 'block';
											} else {
												medicationLaquelleInput.style.display = 'none';
											}
										}

										document.getElementById('medication_oui').addEventListener('change', toggleMedicationLaquelle);
										document.getElementById('medication_non').addEventListener('change', toggleMedicationLaquelle);

										// Appel initial pour s'assurer que le bon champ est affiché ou masqué selon la valeur initiale
										toggleMedicationLaquelle();
										/****************************/



										// Fonction pour basculer l'affichage des éléments en fonction de l'état de la case à cocher "Kinésithérapie"
												function toggleKinesitherapieFields() {
													// Vérification de l'état de la case à cocher "Kinésithérapie"
													if (checkboxKinesitherapieOui.checked) {
														// Afficher les champs "Depuis quand" et "Nombre de séances"
														depuisQuandField.style.display = 'block';
														nbSeancesField.style.display = 'block';
														// Focus sur le champ "Depuis quand" lorsqu'il est affiché
														depuisQuandField.focus();
													} else {
														// Masquer les champs "Depuis quand" et "Nombre de séances"
														depuisQuandField.style.display = 'none';
														nbSeancesField.style.display = 'none';
													}
												}

												// Sélection des éléments HTML
												const checkboxKinesitherapieOui = document.getElementById('kinesitherapie_oui');
												const checkboxKinesitherapieNon = document.getElementById('kinesitherapie_non');
												const depuisQuandField = document.getElementById('kinesitherapie_depuis_quand');
												const nbSeancesField = document.getElementById('kinesitherapie_nb_seances');

												// Ajouter des écouteurs d'événements aux cases à cocher "Kinésithérapie"
												checkboxKinesitherapieOui.addEventListener('change', toggleKinesitherapieFields);
												checkboxKinesitherapieNon.addEventListener('change', toggleKinesitherapieFields);

												// Appeler la fonction pour initialiser l'état de l'affichage
												toggleKinesitherapieFields();


																					/********************/

																																											function toggleAppareillageFields() {
																							const appareillageOui = document.getElementById('appareillage_oui');
																							const appareillageLaquelleDiv = document.getElementById('appareillage_laquelle');

																							if (appareillageOui.checked) {
																								appareillageLaquelleDiv.style.display = 'block';
																							} else {
																								appareillageLaquelleDiv.style.display = 'none';
																							}
																						}

																						// Initial call to set the correct display state on page load
																						toggleAppareillageFields();

																						// Add event listeners for changes
																						document.getElementById('appareillage_oui').addEventListener('change', toggleAppareillageFields);
																						document.getElementById('appareillage_non').addEventListener('change', toggleAppareillageFields);


																			


																					/********************/




																					document.addEventListener('DOMContentLoaded', function () {
																					var orthophonieOui = document.getElementById('orthophonie_oui');
																					var depuiQuandContainer = document.getElementById('depuiQuandContainer');
																					var nbSeancesContainer = document.getElementById('nbSeancesContainer');

																					function toggleOrthophonieFields() {
																						if (orthophonieOui.checked) {
																							depuiQuandContainer.style.display = 'block';
																							nbSeancesContainer.style.display = 'block';
																						} else {
																							depuiQuandContainer.style.display = 'none';
																							nbSeancesContainer.style.display = 'none';
																						}
																					}

																					// Initial call to set the correct display state on page load
																					toggleOrthophonieFields();

																					// Add event listeners for changes
																					orthophonieOui.addEventListener('change', toggleOrthophonieFields);
																					document.getElementById('orthophonie_non').addEventListener('change', toggleOrthophonieFields);
																				});

																							/**********************/
																							document.addEventListener('DOMContentLoaded', function () {
																					var ergotherapieOuiCheckbox = document.getElementById('ergotherapie_oui');
																					var ergoDepuisQuandContainer = document.getElementById('ergoDepuisQuandContainer');
																					var ergoNbSeancesContainer = document.getElementById('ergoNbSeancesContainer');

																					function toggleErgotherapieFields() {
																						if (ergotherapieOuiCheckbox.checked) {
																							ergoDepuisQuandContainer.style.display = 'block';
																							ergoNbSeancesContainer.style.display = 'block';
																						} else {
																							ergoDepuisQuandContainer.style.display = 'none';
																							ergoNbSeancesContainer.style.display = 'none';
																						}
																					}

																					// Add event listener for changes
																					ergotherapieOuiCheckbox.addEventListener('change', toggleErgotherapieFields);
																				});


										/****************************************/
																							    document.addEventListener('DOMContentLoaded', function () {
																								var chirurgieOrthopediqueOuiCheckbox = document.getElementById('chirurgie_orthopedique_oui');
																								var detailChirurgieContainer = document.getElementById('detail_chirurgie_container');

																								function toggleChirurgieFields() {
																									if (chirurgieOrthopediqueOuiCheckbox.checked) {
																										detailChirurgieContainer.style.display = 'block';
																									} else {
																										detailChirurgieContainer.style.display = 'none';
																									}
																								}

																								// Initial call to set the correct display state on page load
																								toggleChirurgieFields();

																								// Add event listeners for changes
																								chirurgieOrthopediqueOuiCheckbox.addEventListener('change', toggleChirurgieFields);
																								document.getElementById('chirurgie_orthopedique_non').addEventListener('change', toggleChirurgieFields);
																							});

											</script>
  <div class="tab-pane fade" id="message">
    <div class="pt-4">
        <div class="row">
            <!-- Champs "douleur" -->
            <div class="col-lg-6 mb-2">
				<label class="text-label">Douleur :</label>
        <div class="row">
        <div class="col-lg-6">
        <div class="form-check custom-checkbox mb-3">
            <input class="form-check-input" type="checkbox" id="douleur_oui" name="douleur" value="oui" {{ $doleances_actuelles && $doleances_actuelles->douleur == 'oui' ? 'checked' : '' }}>
            <label class="form-check-label" for="douleur_oui">Oui</label>
          </div>
           </div>
              <div class="col-lg-6">
              <div class="form-check custom-checkbox mb-3">
              <input class="form-check-input" type="checkbox" id="douleur_non" name="douleur" value="non" {{ $doleances_actuelles && $doleances_actuelles->douleur == 'non' ? 'checked' : '' }}>
              <label class="form-check-label" for="douleur_non">Non</label>
                </div>
           </div>
						</div>
							<div class="form-group" id="douleur_localisation_container" style="display: none;">
							<label class="text-label">Localisation :</label>
							<input type="text" name="douleur_localisation" class="form-control" placeholder="Localisation" value="{{ $doleances_actuelles ? $doleances_actuelles->douleur_localisation : '' }}">
							</div>
								<div class="form-group" id="douleur_causes_container" style="display: none;">
								<label class="text-label">Causes :</label>
								<input type="text" name="douleur_causes" class="form-control" placeholder="Causes" value="{{ $doleances_actuelles ? $doleances_actuelles->douleur_localisation : '' }}">
								</div>
							<div class="form-group">
								<label class="text-label">Développement psychomoteur :</label>
								<textarea name="developpement_psychomoteur" class="form-control" rows="3" placeholder="Développement psychomoteur">{{ $doleances_actuelles ? $doleances_actuelles->developpement_psychomoteur : '' }}</textarea>
							</div>
							<div class="form-group">
								<label class="text-label">Sourire réponse :</label>
								<textarea name="sourire_reponse" class="form-control" rows="3" placeholder="Sourire réponse">{{ $doleances_actuelles ? $doleances_actuelles->sourire_reponse: '' }}</textarea>
							</div>
							<div class="form-group">
								<label class="text-label">Tenue de la tête :</label>
								<textarea name="tenue_tete" class="form-control" rows="3" placeholder="Tenue de la tête">{{ $doleances_actuelles ? $doleances_actuelles->tenue_tete : '' }}</textarea>
							</div>
							<div class="form-group">
								<label class="text-label">Marche :</label>
								<textarea name="marche" class="form-control" rows="3" placeholder="Marche">{{ $doleances_actuelles ? $doleances_actuelles->marche : '' }}</textarea>
							</div>
						</div>
						<!-- Champs "sourire" -->
						<div class="col-lg-6 mb-2">


							<div class="form-group">
								<label class="text-label">Propreté :</label>
								<textarea name="proprete" class="form-control" rows="3" placeholder="Propreté">{{ $doleances_actuelles ? $doleances_actuelles->proprete : '' }}</textarea>
							</div>
							<div class="form-group">
								<label class="text-label">Station assise :</label>
								<textarea name="station_assise" class="form-control" rows="3" placeholder="Station assise">{{ $doleances_actuelles? $doleances_actuelles->station_assise : '' }}</textarea>
							</div>
							<div class="form-group">
								<label class="text-label">Station debout :</label>
								<textarea name="station_debout" class="form-control" rows="3" placeholder="Station debout">{{ $doleances_actuelles ? $doleances_actuelles->station_debout : '' }}</textarea>
							</div>
							<div class="form-group">
    <label class="text-label">Langage :</label>
    <select class="form-control" name="langage">
        <option value="babillage" {{ isset($doleances_actuelles) && $doleances_actuelles->langage == 'babillage' ? 'selected' : '' }}>Babillage</option>
        <option value="syllabes" {{ isset($doleances_actuelles) && $doleances_actuelles->langage == 'syllabes' ? 'selected' : '' }}>Syllabes</option>
        <option value="bisyllabes" {{ isset($doleances_actuelles) && $doleances_actuelles->langage == 'bisyllabes' ? 'selected' : '' }}>Bisyllabes</option>
        <option value="1_mot" {{ isset($doleances_actuelles) && $doleances_actuelles->langage == '1_mot' ? 'selected' : '' }}>1 mot</option>
        <option value="phrases" {{ isset($doleances_actuelles) && $doleances_actuelles->langage == 'phrases' ? 'selected' : '' }}>Phrases</option>
    </select>
</div>




						</div>
						</div>
					</div>
					</div>
					</div>
				</div>
				</div>
				</div>
				<div class="tab-pane fade" id="DefaultTab-html" role="tabpanel" aria-labelledby="home-tab">
				<div class="card-body p-0 code-area">
				</div>
				</div>

				</div>
				</div>
				</div>





							<script>
				document.addEventListener('DOMContentLoaded', function () {
				var douleurOuiCheckbox = document.getElementById('douleur_oui');
				var douleurLocalisationContainer = document.getElementById('douleur_localisation_container');
				var douleurCausesContainer = document.getElementById('douleur_causes_container');

				function toggleDouleurFields() {
					if (douleurOuiCheckbox.checked) {
						douleurLocalisationContainer.style.display = 'block';
						douleurCausesContainer.style.display = 'block';
					} else {
						douleurLocalisationContainer.style.display = 'none';
						douleurCausesContainer.style.display = 'none';
					}
				}

				// Initial call to set the correct display state on page load
				toggleDouleurFields();

				// Add event listeners for changes
				douleurOuiCheckbox.addEventListener('change', toggleDouleurFields);
				document.getElementById('douleur_non').addEventListener('change', toggleDouleurFields);
			});

						</script>
							<!-- Column evaluation inférieur 2 ans -->
							<div class="col-xl-12">
								<div class="card dz-card">
									<div class="card-header flex-wrap border-0 pb-0" id="default-tab1">
										<h4 class="card-title mb-0">Evaluation enfant inférieur 2 ans</h4>

									</div>

									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<!-- Nav tabs -->
												<div class="default-tab">
													<ul class="nav nav-tabs">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab"  href="#home1"><i class="las la-heartbeat me-2"></i>Réflexe archaïque & Attitude spontanée & Motricité spontanée </a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#profile1"><i class="la la-user me-2"></i> Motricité provoquée</a>
														</li>

													</ul>

													<div class="tab-content">
														<div class="tab-pane fade" id="home1" role="tabpanel">
															<div class="pt-4">
															<div class="col-lg-12 mb-2">
																<div class="row">
																	<!-- Champs "fouchou" -->
																	<div class="col-lg-6 mb-2">



																			        <div class="form-group">
																					<button type="button" class="btn btn-square btn-success" id="view_image_button_partie1">
																						<i class="fas fa-image me-2"></i>Voir photo Récapitulatif 1
																					</button>
																				</div>

																				<a href="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/partie1.png" target="_blank" id="image_link_partie1" style="display: none;">
																					<img id="myImg" src="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/partie1.png" alt="photo partie1" style="width:100%;max-width:300px;">
																				</a>

																				<!-- Button for Partie 2 -->
																				<div class="form-group">
																					<button type="button" class="btn btn-square btn-success" id="view_image_button_partie2">
																						<i class="fas fa-image me-2"></i>Voir photo Récapitulatif 2
																					</button>
																				</div>

																				<a href="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/partie2.png" target="_blank" id="image_link_partie2" style="display: none;">
																					<img id="myImg2" src="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/partie2.png" alt="photo partie2" style="width:100%;max-width:300px;">
																				</a>

																				
																			<h5><i class="las la-clone mi-2"></i>Attitude spontanée:</h5>

																		 
																			<div class="form-group">
																				<label class="text-label">Motricité spontanée : en DD et en DV des MS et MI:</label>
																				<input type="file" class="form-control" id="motricite_dd_dv_ms_mi" name="motricite_dd_dv_ms_mi" />
																				<br>
																				@if(isset($attitudes_spontanees) && $attitudes_spontanees->motricite_dd_dv_ms_mi)
																				<label class="text-label">Image existante :</label>
																				<a href="{{ asset('videos/' . $attitudes_spontanees->motricite_dd_dv_ms_mi) }}" target="_blank">Voir vidéo Existant</a>
																				@endif
																			</div>

																			<div class="form-group">
																			<label class="text-label">Réactions posturales:</label>
																			<textarea class="form-control" id="reactions_posturales" name="reactions_posturales" rows="3" >{{ $attitudes_spontanees ? $attitudes_spontanees->reactions_posturales : '' }}</textarea>
																			</div>
																			<label class="text-label"><h5>Suspension </h5></label>
																			<div class="form-group">
																				<label class="text-label">Ventrale:</label>
																				<textarea class="form-control" id="suspension_ventrale" name="suspension_ventrale" rows="3"> {{ $attitudes_spontanees ? $attitudes_spontanees->suspension_ventrale : '' }}</textarea>
																			</div>
																			<div class="form-group">
																				<label class="text-label">  Dorsale:</label>
																				<textarea class="form-control" id="suspension_dorsale" name="suspension_dorsale" rows="3" >{{ $attitudes_spontanees ? $attitudes_spontanees->suspension_dorsale : '' }}</textarea>
																			</div>


																	</div>
																	<!-- Champs "louta" -->
																	<div class="col-lg-6 mb-2">



																			<div class="form-group">
																				<label class="text-label">Latérale:</label>
																				<textarea class="form-control" id="suspension_laterale" name="suspension_laterale" rows="3" >{{ $attitudes_spontanees ? $attitudes_spontanees->suspension_laterale : '' }} </textarea>
																			</div>
																			<div class="form-group">
																				<label class="text-label">Réaction en balancier des MI:</label>
																				<textarea class="form-control" id="reaction_balancier_MI" name="reaction_balancier_MI" rows="3"> {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_balancier_MI : '' }} </textarea>
																			</div>
																			<label class="text-label"><h5>Réactions parachutes:</h5></label>

																				<!-- Partie Antérieur -->
																				<div class="form-group">
																					<label class="text-label">Antérieur:</label>
																					<textarea class="form-control" id="reaction_parachute_anterieur" name="reaction_parachute_anterieur" rows="3"> {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_parachute_anterieur : '' }} </textarea>
																				</div>
																				<div class="form-group">
																					<label class="text-label">Postérieur:</label>
																					<textarea class="form-control" id="reaction_parachute_posterieur" name="reaction_parachute_posterieur" rows="3" >{{ $attitudes_spontanees ? $attitudes_spontanees->reaction_parachute_posterieur : '' }} </textarea>
																				</div>
																				<div class="form-group">
																					<label class="text-label">Latéral:</label>
																					<textarea class="form-control" id="reaction_parachute_lateral" name="reaction_parachute_lateral" rows="3" > {{ $attitudes_spontanees ? $attitudes_spontanees->reaction_parachute_lateral : '' }}</textarea>
																				</div>
																				<div class="form-group">
																					<label class="text-label"><h4>schema d'attitude spontanée</h4></label>
																					<img id="image_preview_3" src="images/imageBilan/schema_spont.PNG" alt="schema d'attitude spontanée" style="max-width: 100%; height: auto;" >
																				</div>
																				<div class="form-group">
																					<label class="text-label">shema attitude spontanée :</label>
																					<input type="text" name="attitude_sp_shema" class="form-control" placeholder="attitude spontanée" value="{{ $attitudes_spontanees ? $attitudes_spontanees->attitude_sp_shema : '' }}"/> 
																				</div>

																	</div>
																</div>
															</div>
														</div>
													</div>






																  <script>
																	document.getElementById('image_preview_1').addEventListener('change', function(event) {
																	  var image = document.getElementById('image_preview_1');
																	  image.src = URL.createObjectURL(event.target.files[0]);
																	});

																	document.getElementById('image_preview_2').addEventListener('change', function(event) {
																	  var image = document.getElementById('image_preview_2');
																	  image.src = URL.createObjectURL(event.target.files[0]);
																	});
																  /*******************/
															

																

																</script>
							                         <div class="tab-pane fade" id="profile1">
											            <div class="pt-4">
												           	<div class="col-lg-12 mb-2">
																	<div class="row">
																		<!-- Champs "fouchou" -->
																		<div class="col-lg-6 mb-2">
																			<label class="text-label">Agrippement, préhension:</label>
																			<div class="row">
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="agrippement_oui" name="agrippement" value="oui"  {{ ($motricites_provoquees->agrippement ?? '') == 'oui' ? 'checked' : '' }}>
																				<label class="form-check-label" for="agrippement_oui">Oui</label>
																			</div>
																			</div>

																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																				 <input class="form-check-input" type="checkbox" id="agrippement_non" name="agrippement" value="non" {{ ($motricites_provoquees->agrippement ?? '') == 'non' ? 'checked' : '' }}>
																				<label class="form-check-label" for="agrippement_non">Non</label>
																			</div>
																			</div>
																			</div>
																			<label class="text-label">Retournement dos/ventre stimulé par MI:</label>
																			<div class="row">
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="retournement_mi_oui" name="retournement_mi" value="oui" {{ ($motricites_provoquees->retournement_mi ?? '') == 'oui' ? 'checked' : '' }}>
																				<label class="form-check-label" for="retournement_mi_oui">Oui</label>
																			</div>
																			</div>
																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="retournement_mi_non" name="retournement_mi" value="non" {{ ($motricites_provoquees->retournement_mi ?? '') == 'non' ? 'checked' : '' }}>
																				<label class="form-check-label" for="retournement_mi_non">Non</label>
																			</div>
																			</div>
																			</div>
																				<label class="text-label">Retournement dos/ventre stimulé par  tête et MS:</label>
																				<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="retournement_mi_oui" name="retournement_tete_ms" value="oui" {{ ($motricites_provoquees->retournement_tete_ms ?? '') == 'oui' ? 'checked' : '' }}>
																					<label class="form-check-label" for="retournement_mi_oui">Oui</label>
																				</div>
																				</div>
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="retournement_mi_non" name="retournement_tete_ms" value="non" {{ ($motricites_provoquees->retournement_tete_ms ?? '') == 'non' ? 'checked' : '' }}>
																					<label class="form-check-label" for="retournement_mi_non">Non</label>
																				</div>
																			</div>
																			</div>
																			<label class="text-label">Redressement de la position couché par appui sur les membres supérieurs:</label>
																			<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="redressement_membres_superieurs_oui" name="redressement_membres_superieurs" value="oui" {{ ($motricites_provoquees->redressement_membres_superieurs ?? '') == 'oui' ? 'checked' : '' }}>
																				<label class="form-check-label" for="redressement_membres_superieurs_oui">Oui</label>
																			</div>
																			</div>
																			<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="redressement_membres_superieurs_non" name="redressement_membres_superieurs" value="non" {{ ($motricites_provoquees->redressement_membres_superieurs ?? '') == 'non' ? 'checked' : '' }}>
																				<label class="form-check-label" for="redressement_membres_superieurs_non">Non</label>
																			</div>
																		    </div>
																		    </div>
																		   <div class="form-group">
																			<label class="text-label">Schéma de reptation:</label>
																			<textarea class="form-control" id="schema_reptation" name="schema_reptation" rows="3"> {{ $motricites_provoquees ? $motricites_provoquees->schema_reptation : '' }}</textarea>
																		  </div>
																      </div>

																		<!-- Champs "louta" -->
																		<div class="col-lg-6 mb-2">

																			<label class="text-label"> <h5>Station assise :</h5></label><br>
																			 <label class="text-label">Tenu assis:</label>
																			 <div class="row">
																			 <div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="tenu_assis_oui" name="tenu_assis" value="oui" {{ ($motricites_provoquees->tenu_assis ?? '') == 'oui' ? 'checked' : '' }}>
																				<label class="form-check-label" for="tenu_assis_oui">Oui</label>
																			</div>
																			</div>
																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																				<input class="form-check-input" type="checkbox" id="tenu_assis_non" name="tenu_assis" value="non" {{ ($motricites_provoquees->tenu_assis ?? '') == 'non' ? 'checked' : '' }}>
																				<label class="form-check-label" for="tenu_assis_non">Non</label>
																			</div>
																		   </div>
																		  </div>
																		  <label class="text-label">Tiré assis:</label>
																		  <div class="row">
																		  <div class="col-lg-6">
																			 <div class="form-check custom-checkbox mb-3">
																			 <input class="form-check-input" type="checkbox" id="tire_assis_oui" name="tire_assis" value="oui" {{ ($motricites_provoquees->tire_assis ?? '') == 'oui' ? 'checked' : '' }}>
																			 <label class="form-check-label" for="tire_assis_oui">Oui</label>
																		 </div>
																		 </div>
																		 <div class="col-lg-6">
																			 <div class="form-check custom-checkbox mb-3">
																			 <input class="form-check-input" type="checkbox" id="tire_assis_non" name="tire_assis" value="non" {{ ($motricites_provoquees->tire_assis ?? '') == 'non' ? 'checked' : '' }}>
																			 <label class="form-check-label" for="tire_assis_non">Non</label>
																		 </div>
																		</div>
																	   </div>
																		 <label class="text-label">Assis tailleur:</label>
																		 <div class="row">
																			<div class="col-lg-6">
																			   <div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="assis_tailleur_oui" name="assis_tailleur" value="oui" {{ ($motricites_provoquees->assis_tailleur ?? '') == 'oui' ? 'checked' : '' }}>
																			<label class="form-check-label" for="assis_tailleur_oui">Oui</label>
																		  </div>
																		 </div>

																		<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="assis_tailleur_non" name="assis_tailleur" value="non" {{ ($motricites_provoquees->assis_tailleur ?? '') == 'non' ? 'checked' : '' }}>
																			<label class="form-check-label" for="assis_tailleur_non">Non</label>
																		</div>
																	   </div>
																	   </div>
																	  <label class="text-label">Sur chaise:</label>
																	 <div class="row">
																		<div class="col-lg-6">
																		   <div class="form-check custom-checkbox mb-3">
																		 <input class="form-check-input" type="checkbox" id="sur_chaise_oui" name="sur_chaise" value="oui" {{ ($motricites_provoquees->sur_chaise ?? '') == 'oui' ? 'checked' : '' }}>
																		 <label class="form-check-label" for="assis_tailleur_oui">Oui</label>
																		</div>
																		</div>
																		<div class="col-lg-6">

																		<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="sur_chaise_non" name="sur_chaise" value="non" {{ ($motricites_provoquees->sur_chaise ?? '') == 'non' ? 'checked' : '' }}>
																			<label class="form-check-label" for="sur_chaise_non">Non</label>
																		</div>
																	  </div>
																      </div>
																		<label class="text-label">Passage entre assis-debout:</label>
																		<div class="row">
																			<div class="col-lg-6">
																			   <div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="passage_assis_debout_oui" name="passage_assis_debout" value="oui" {{ ($motricites_provoquees->passage_assis_debout ?? '') == 'oui' ? 'checked' : '' }}>
																			<label class="form-check-label" for="passage_assis_debout_oui">Oui</label>
																		</div>
																		</div>
																		<div class="col-lg-6">
																		<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="passage_assis_debout_non" name="passage_assis_debout" value="non" {{ ($motricites_provoquees->passage_assis_debout ?? '') == 'non' ? 'checked' : '' }}>
																			<label class="form-check-label" for="passage_assis_debout_non">Non</label>
																		</div>
																	   </div>
																      </div>
																       <label class="text-label">Station verticale:</label>
														               <div class="row">
																			<div class="col-lg-6">
																			   <div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="station_verticale_oui" name="station_verticale" value="oui" {{ ($motricites_provoquees->station_verticale ?? '') == 'oui' ? 'checked' : '' }}>
																					<label class="form-check-label" for="station_verticale_oui">Oui</label>
																				</div>
																				</div>

																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="station_verticale_non" name="station_verticale" value="non" {{ ($motricites_provoquees->station_verticale ?? '') == 'non' ? 'checked' : '' }}>
																					<label class="form-check-label" for="station_verticale_non">Non</label>
																				</div>
																			</div>
															        	</div>
																	</div>

															       </div>
															   </div>
														   </div>
													   </div>


													</div>
												</div>
											</div>
										</div>


															<div class="tab-pane fade" id="DefaultTab-html" role="tabpanel" aria-labelledby="home-tab">
															<div class="card-body p-0 code-area">
														</div>
													</div>
										</div>
									</div>
								</div>








							<!-- Column evaluation supérieur 2 ans  -->
							<div class="col-xl-12">
								<div class="card dz-card" >
									<div class="card-header flex-wrap border-0 pb-0" id="default-tab2">
										<h4 class="card-title mb-0 text-center" style="color: #454d47;">
											<i class="las la-baby fs-4 me-2" style="font-size: 2.5em;"></i>
											Evaluation enfant superieur 2 ans
										</h4>
									</div>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="DefaultTab1" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<!-- Nav tabs -->
												<div class="default-tab">
													<ul class="nav nav-tabs">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#home3"><i class="las la-microscope me-2"></i> Att Spontanee & eval quant</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#profile3"><i class="las la-stethoscope me-2"></i> T l’échel d’Ashworth</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#contact3"><i class="las la-user-clock me-2"></i> L’amp articu</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#message3"><i class="las la-briefcase-medical me-2"></i> Examen podosco</a>
														</li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane fade " id="home3" role="tabpanel">
															<div class="pt-4">
																<div class="form-group">
																	<label class="text-label"><h5>ATTITUDE SPONTANEE EN DECUBITUS DORSAL :</h5></label>
																	<div class="form-group">
																		<label class="text-label">Description :</label>
																		<textarea class="form-control" id="attitude_spontanee_decubitus_dorsal_description" name="attitude_spontanee_dd_description" rows="3"> {{ $Attitude_spontanees_dds ? $Attitude_spontanees_dds->attitude_spontanee_dd_description : '' }}</textarea>
																	</div>
																	<div class="form-group">
																	<label class="text-label">Ajouter vidéo :</label>
																	<input type="file" class="form-control" id="attitude_spontanee_decubitus_dorsal_video" name="attitude_spontanee_dd_video">
																</div>
														
																@if($Attitude_spontanees_dds && $Attitude_spontanees_dds->attitude_spontanee_dd_video)
																<div class="form-group">
																	<label class="text-label">Vidéo existante :</label>
																	<a href="{{ asset('videos/' . $Attitude_spontanees_dds->attitude_spontanee_dd_video) }}" target="_blank">Voir vidéo Existant</a>
																</div>
																@endif
																


																</div>


																<table class="tg">
																	<thead>
																		<tr>
																		  <th class="tg-0lax" colspan="5" style="text-align: center;">
																			<span style="font-weight: bold; color: rgb(26, 118, 204);">ISOLATION MOTRICE</span>
																		  </th>
																		</tr>
																	  </thead>

																<tbody>
																	<tr>
																		<td class="tg-0lax"><span style="font-weight:bold">Gauche Avant </span></td>
																		<td class="tg-0pky"><span style="font-weight:bold">Gauche Apres</span></td>
																		<td class="tg-0pky"><span style="font-weight:bold">1ère tension / angle résiduel </span></td>
																		<td class="tg-lboi"><span style="font-weight:bold">Droite Avant</span></td>
																		<td class="tg-0lax"><span style="font-weight:bold">Droite Apres</span></td>
																	  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">EPAULE</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_gavant" name="epaule_abd_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_gapres" name="epaule_abd_gapres"></td>
																	<td class="tg-0lax">Abd (déltoide)</td>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_davant" name="epaule_abd_davant"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_dapres" name="epaule_abd_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="epaule_add_gavant_gd" name="epaule_add_gavant_gd"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_gapres_gd" name="epaule_abd_gapres_gd"></td>
																	<td class="tg-0lax">Add (Gd pectoral)</td>
																	<td class="tg-0lax"><input type="text" id="epaule_add_davant_gd" name="epaule_add_davant_gd"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_add_dapres_gd" name="epaule_add_dapres_gd"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">COUDE</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="flechisseurs_coude_gavant" name="flechisseurs_coude_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="flechisseurs_coude_gapres" name="flechisseurs_coude_gapres"></td>
																	<td class="tg-0lax">Fléchisseurs coude</td>
																	<td class="tg-0lax"><input type="text" id="flechisseurs_coude_davant" name="flechisseurs_coude_davant"></td>
																	<td class="tg-0lax"><input type="text" id="flechisseurs_coude_dapres" name="flechisseurs_coude_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="tb_coude_gavant" name="tb_coude_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="tb_coude_gapres" name="tb_coude_gapres"></td>
																	<td class="tg-0lax">TB</td>
																	<td class="tg-0lax"><input type="text" id="tb_coude_davant" name="tb_coude_davant"></td>
																	<td class="tg-0lax"><input type="text" id="tb_coude_dapres" name="tb_coude_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="pronateurs_gavant" name="pronateurs_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="pronateurs_gapres" name="pronateurs_gapres"></td>
																	<td class="tg-0lax">Pronateurs (rond /carré pronateur)</td>
																	<td class="tg-0lax"><input type="text" id="pronateurs_davant" name="pronateurs_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pronateurs_dapres" name="pronateurs_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="supinateurs_gavant" name="supinateurs_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="supinateurs_gapres" name="supinateurs_gapres"></td>
																	<td class="tg-0lax">Supinateurs</td>
																	<td class="tg-0lax"><input type="text" id="supinateurs_davant" name="supinateurs_davant"></td>
																	<td class="tg-0lax"><input type="text" id="supinateurs_dapres" name="supinateurs_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">POIGNET</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="fr_carpe_gavant" name="fr_carpe_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="fr_carpe_gapres" name="fr_carpe_gapres"></td>
																	<td class="tg-0lax">FR du carpe</td>
																	<td class="tg-0lax"><input type="text" id="fr_carpe_davant" name="fr_carpe_davant"></td>
																	<td class="tg-0lax"><input type="text" id="fr_carpe_dapres" name="fr_carpe_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="fc_carpe_gavant" name="fr_carpe_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="fc_carpe_dapres" name="fr_carpe_dapres"></td>
																	<td class="tg-0lax">FC du carpe</td>
																	<td class="tg-0lax"><input type="text" id="fc_carpe_davant" name="fc_carpe_davant"></td>
																	<td class="tg-0lax"><input type="text" id="fc_carpe_dapres" name="fc_carpe_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="long_palmaire_gavant" name="long_palmaire_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="long_palmaire_gapres" name="long_palmaire_gapres"></td>
																	<td class="tg-0lax">Long palmaire</td>
																	<td class="tg-0lax"><input type="text" id="long_palmaire_davant" name="long_palmaire_davant"></td>
																	<td class="tg-0lax"><input type="text" id="long_palmaire_dapres" name="long_palmaire_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">MAIN</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="main_fcs_gavant" name="main_fcs_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="main_fcs_gapres" name="main_fcs_gapres"></td>
																	<td class="tg-0lax">FCS</td>
																	<td class="tg-0lax"><input type="text" id="main_fcs_davant" name="main_fcs_davant"></td>
																	<td class="tg-0lax"><input type="text" id="main_fcs_dapres" name="main_fcs_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="main_fcp_gavant" name="main_fcp_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="main_fcp_gapres" name="main_fcp_gapres"></td>
																	<td class="tg-0lax">FCP</td>
																	<td class="tg-0lax"><input type="text" id="main_fcp_davant" name="main_fcp_davant"></td>
																	<td class="tg-0lax"><input type="text" id="main_fcp_dapres" name="main_fcp_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="long_flechisseur_gavant" name="long_flechisseur_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="long_flechisseur_gapres" name="long_flechisseur_gapres"></td>
																	<td class="tg-0lax">Long fléchisseur du pouce</td>
																	<td class="tg-0lax"><input type="text" id="long_flechisseur_davant" name="long_flechisseur_davant"></td>
																	<td class="tg-0lax"><input type="text" id="long_flechisseur_dapres" name="long_flechisseur_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="adducteurs_gavant" name="adducteurs_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="adducteurs_gapres" name="adducteurs_gapres"></td>
																	<td class="tg-0lax">Adducteurs du pouce</td>
																	<td class="tg-0lax"><input type="text" id="adducteurs_davant" name="adducteurs_davant"></td>
																	<td class="tg-0lax"><input type="text" id="adducteurs_dapres" name="adducteurs_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">HANCHES</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="psoas_gavant" name="psoas_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="psoas_gapres" name="psoas_gapres"></td>
																	<td class="tg-0lax">Psoas iliacus (Psoas)</td>
																	<td class="tg-0lax"><input type="text" id="Psoas_davant" name="Psoas_davant "></td>
																	<td class="tg-0lax"><input type="text" id="Psoas_dapres" name="Psoas_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="rectus_gavant" name="rectus_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="rectus_gapres" name="rectus_gapres"></td>
																	<td class="tg-0lax">Rectus femoris</td>
																	<td class="tg-0lax"><input type="text" id="rectus_davant" name="rectus_davant"></td>
																	<td class="tg-0lax"><input type="text" id="rectus_dapres" name="rectus_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="gluteus_gavant" name="gluteus_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="gluteus_gapres" name="gluteus_gapres"></td>
																	<td class="tg-0lax">Gluteus maximus (Grands fessiers)</td>
																	<td class="tg-0lax"><input type="text" id="gluteus_davant" name="gluteus_davant"></td>
																	<td class="tg-0lax"><input type="text" id="gluteus_dapres" name="gluteus_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="adductors_gavant" name="adductors_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="adductors_gapres" name="adductors_gapres"></td>
																	<td class="tg-0lax">Adductors brevis, longus, magnus</td>
																	<td class="tg-0lax"><input type="text" id="adductors_davant" name="adductors_davant"></td>
																	<td class="tg-0lax"><input type="text" id="adductors_dapres" name="adductors_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="gracilis_gavant" name="gracilis_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="gracilis_gapres" name="gracilis_gapres"></td>
																	<td class="tg-0lax">Gracilis (droit interne)</td>
																	<td class="tg-0lax"><input type="text" id="gracilis_davant" name="gracilis_davant"></td>
																	<td class="tg-0lax"><input type="text" id="gracilis_gt_dapres" name="gracilis_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="rotateursi_gavant" name="rotateursi_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="rotateursi_gapres" name="rotateursi_gapres"></td>
																	<td class="tg-0lax">Rotateurs Internes</td>
																	<td class="tg-0lax"><input type="text" id="rotateursi_davant" name="rotateursi_davant"></td>
																	<td class="tg-0lax"><input type="text" id="rotateursi_dapres" name="rotateursi_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="rotateurse_gavant" name="rotateurse_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="rotateurse_gapres" name="rotateurse_gapres"></td>
																	<td class="tg-0lax">Rotateurs externes</td>
																	<td class="tg-0lax"><input type="text" id="rotateurse_davant" name="rotateurse_davant"></td>
																	<td class="tg-0lax"><input type="text" id="rotateurse_dapres" name="rotateurse_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">GENOUX</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="quadriceps_gavant" name="quadriceps_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="quadriceps_gapres" name="quadriceps_gapres"></td>
																	<td class="tg-0lax">Quadriceps femoris</td>
																	<td class="tg-0lax"><input type="text" id="quadriceps_davant" name="quadriceps_davant"></td>
																	<td class="tg-0lax"><input type="text" id="quadriceps_dapres" name="quadriceps_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="clonus_gavant" name="clonus_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="clonus_gapres" name="clonus_gapres"></td>
																	<td class="tg-0lax">Clonus : nb</td>
																	<td class="tg-0lax"><input type="text" id="clonus_davant" name="clonus_davant"></td>
																	<td class="tg-0lax"><input type="text" id="clonus_dapres" name="clonus_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="semitendinosis_gavant" name="semitendinosis_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="semitendinosis_gapres" name="semitendinosis_gapres"></td>
																	<td class="tg-0lax">Semitendinosis-Semimembranosus/Biceps fémoris</td>
																	<td class="tg-0lax"><input type="text" id="semitendinosis_davant" name="semitendinosis_davant"></td>
																	<td class="tg-0lax"><input type="text" id="semitendinosis_dapres" name="semitendinosis_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"><span  style="font-weight: bold; color: rgb(3, 3, 3);">PIEDS</span></td>
																	<td class="tg-0lax"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="soleus_gavant" name="soleus_davant"></td>
																	<td class="tg-0lax"><input type="text" id="soleus_gapres" name="soleus_gapres"></td>
																	<td class="tg-0lax">Soleus (Soléaire)</td>
																	<td class="tg-0lax"><input type="text" id="soleus_davant" name="soleus_davant"></td>
																	<td class="tg-0lax"><input type="text" id="soleus_dapres" name="soleus_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="tep_gavant" name="tep_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="tep_gapres" name="tep_gapres"></td>
																	<td class="tg-0lax">T.E.P : nb</td>
																	<td class="tg-0lax"><input type="text" id="tep_davant" name="tep_davant"></td>
																	<td class="tg-0lax"><input type="text" id="tep_dapres" name="tep_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="gastrocnemius_gavant" name="gastrocnemius_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="gastrocnemius_gapres" name="gastrocnemius_gapres"></td>
																	<td class="tg-0lax">Gastrocnemius (Jumeaux)</td>
																	<td class="tg-0lax"><input type="text" id="gastrocnemius_davant" name="gastrocnemius_davant"></td>
																	<td class="tg-0lax"><input type="text" id="gastrocnemius_dapres" name="gastrocnemius_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="tepp_gavant" name="tepp_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="tepp_gapres" name="tepp_gapres"></td>
																	<td class="tg-0lax">T.E.P : nb</td>
																	<td class="tg-0lax"><input type="text" id="tepp_davant" name="tepp_davant"></td>
																	<td class="tg-0lax"><input type="text" id="tepp_dapres" name="tepp_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="tibialisa_gavant" name="tibialisa_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="tibialisa_gapres" name="tibialisa_gapres"></td>
																	<td class="tg-0lax">Tibialis antérior (Jambier ant.)</td>
																	<td class="tg-0lax"><input type="text" id="tibialisa_davant" name="tibialisa_davant"></td>
																	<td class="tg-0lax"><input type="text" id="tibialisa_dapres" name="tibialisa_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="tibialise_gavant" name="tibialise_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="tibialise_gapres" name="tibialise_gapres"></td>
																	<td class="tg-0lax">Tibialis postérior (Jambier post.)</td>
																	<td class="tg-0lax"><input type="text" id="tibialise_davant" name="tibialise_davant"></td>
																	<td class="tg-0lax"><input type="text" id="tibialise_dapres" name="tibialise_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="extensord_gavant" name="extensord_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="extensord_gapres" name="extensord_gapres"></td>
																	<td class="tg-0lax">Extensor digitorum longus (E.C.O)</td>
																	<td class="tg-0lax"><input type="text" id="extensord_davant" name="extensord_davant"></td>
																	<td class="tg-0lax"><input type="text" id="extensord_dapres" name="extensord_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="flexord_gavant" name="flexord_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="flexord_gapres" name="flexord_gapres"></td>
																	<td class="tg-0lax">Flexor digitorum longus (F.C.O)</td>
																	<td class="tg-0lax"><input type="text" id="flexord_davant" name="flexord_davant"></td>
																	<td class="tg-0lax"><input type="text" id="flexord_dapres" name="flexord_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="extensorh_gavant" name="extensorh_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="extensorh_gapres" name="extensorh_gapres"></td>
																	<td class="tg-0lax">Extensor hallucis longus (EPGO)</td>
																	<td class="tg-0lax"><input type="text" id="extensorh_davant" name="extensorh_davant"></td>
																	<td class="tg-0lax"><input type="text" id="extensorh_dapres" name="extensorh_dapres"></td>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="flexorh_gavant" name="flexorh_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="flexorh_gapres" name="flexorh_gapres"></td>
																	<td class="tg-0lax">Flexor hallucis longus (FPGO)</td>
																	<td class="tg-0lax"><input type="text" id="flexorh_davant" name="flexorh_davant"></td>
																	<td class="tg-0lax"><input type="text" id="flexorh_dapres" name="flexorh_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="fibulaires_gavant" name="fibulaires_gavant"></td>
																	<td class="tg-0lax"><input type="text" id="fibulaires_gapres" name="fibulaires_gapres"></td>
																	<td class="tg-0lax">Fibulaires (Péronniers)</td>
																	<td class="tg-0lax"><input type="text" id="fibulaires_davant" name="fibulaires_davant"></td>
																	<td class="tg-0lax"><input type="text" id="fibulaires_dapres" name="fibulaires_dapres"></td>
																  </tr>
																</tbody>
																</table>

																<br>

																<div class="form-group">
																	<button type="button" class="btn btn-square btn-success" id="view_image_button_torision">
																		<i class="fas fa-image me-2"></i>Voir photo guide torision
																	</button>
																</div>

																<!-- Modal for Torision -->
																<a href="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/torision.png" target="_blank" id="image_link_partie1" style="display: none;">
																 <img id="myImg" src="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/torision.png" alt="photo partie1" style="width:100%;max-width:300px;">
																</a>

														
															</div>
														</div>


														<div class="tab-pane fade" id="profile3">
															<div class="pt-4">
																<table border="1">
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="5" style="font-weight: bold; color: #ffffff;">SPASTICITE (A.M)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="2" style="font-weight: bold; color: #ffffff;">Gauche</th>
                                                                            <th style="font-weight: bold; color: #ffffff;">Organe</th>
                                                                            <th colspan="2" style="font-weight: bold; color: #ffffff;">Droite</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @forelse($groupements as $parent)
                                                                            <tr>
                                                                                <!-- Colonne de gauche -->
                                                                                <td colspan="2" class="left"></td>
                                                                                <!-- Colonne du milieu -->
                                                                                <td class="middle" style="font-weight: bold; color: #000000;">{{ $parent->designation }}</td>

                                                                                <!-- Colonne de droite -->
                                                                                <td colspan="2" class="right"></td>
                                                                            </tr>
                                                                            @forelse($parent->children as $child)
                                                                                <tr>
                                                                                    <!-- Colonne de gauche -->
                                                                                    <td class="left-before">
                                                                                        <input type="text" name="{{ $child->designation }}_g_av" value="{{ $child->specificEvaluations->first()->g_av ?? '' }}">
                                                                                    </td>
                                                                                    <td class="left-after">
                                                                                        <input type="text" name="{{ $child->designation }}_g_ar" value="{{ $child->specificEvaluations->first()->g_ar ?? '' }}">
                                                                                    </td>
                                                                                    <!-- Colonne du milieu -->
                                                                                    <td class="middle">{{ $child->designation }}</td>
                                                                                    <!-- Colonne de droite -->
                                                                                    <td class="right-before">
                                                                                        <input type="text" name="{{ $child->designation }}_d_av" value="{{ $child->specificEvaluations->first()->d_av ?? '' }}">
                                                                                    </td>
                                                                                    <td class="right-after">
                                                                                        <input type="text" name="{{ $child->designation }}_d_ar" value="{{ $child->specificEvaluations->first()->d_ar ?? '' }}">
                                                                                    </td>
                                                                                </tr>
                                                                            @empty
                                                                                <!-- Si aucun enfant n'est trouvé pour ce parent -->
                                                                                <tr>
                                                                                    <td colspan="5">Aucun enfant trouvé pour ce parent.</td>
                                                                                </tr>
                                                                            @endforelse
                                                                        @empty
                                                                            <!-- Si aucun parent n'est trouvé -->
                                                                            <tr>
                                                                                <td colspan="5">Aucun parent trouvé.</td>
                                                                            </tr>
                                                                        @endforelse
                                                                    </tbody>
                                                                </table>
															</div>
														</div>
														<div class="tab-pane fade" id="contact3">
															<div class="pt-4">
																<table class="tg">
																	<thead>
																		<tr>
																		  <th class="tg-0lax" colspan="5" style="text-align: center;">
																			<span style="font-weight: bold; color: rgb(26, 118, 204);">BILAN ARTICULAIRE : Goniométrie</span>
																		  </th>
																		</tr>
																	  </thead>

																<tbody>
																  <tr>
																	<td class="tg-0lax"><span style="font-weight:bold">Gauche Avant </span></td>
																	<td class="tg-0pky"><span style="font-weight:bold">Gauche Apres</span></td>
																	<td class="tg-0pky"><span style="font-weight:bold">1ère tension / angle résiduel</span></td>
																	<td class="tg-lboi"><span style="font-weight:bold">DROITE avant</span></td>
																	<td class="tg-0lax"><span style="font-weight:bold">Droite Apres</span></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span  style="font-weight: bold; color: rgb(3, 3, 3);">EPAULE</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="epaule_flex_ext_gav" name="epaule_flex_ext_gav"></td>
																	<td class="tg-0pky"><input type="text" id="epaule_flex_ext__gap" name="epaule_flex_ext_gap"></td>
																	<td class="tg-0pky">Flex/Ext</td>
																	<td class="tg-lboi"><input type="text" id="epaule_flex_ext_dt_avant" name="epaule_flex_ext_dt_avant"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_flex_ext_dt_apres" name="epaule_flex_ext_dt_apres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_add_gavant" name="epaule_abd_add_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="epaule_abd_add_gapres" name="epaule_abd_add_gapres"></td>
																	<td class="tg-0pky">Abd/Add</td>
																	<td class="tg-lboi"><input type="text" id="epaule_abd_add_davant" name="epaule_abd_add_davant"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_abd_add_dapres" name="epaule_abd_add_apres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="epaule_re_ri_gavant" name="epaule_re_ri_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="epaule_re_ri_gapres" name="epaule_re_ri_gapres"></td>
																	<td class="tg-0pky">RE/RI</td>
																	<td class="tg-lboi"><input type="text" id="epaule_re_ri_davant" name="epaule_re_ri_davant"></td>
																	<td class="tg-0lax"><input type="text" id="epaule_re_ri_dapres" name="epaule_re_ri_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span style="font-weight: bold; color: rgb(3, 3, 3);"></span>>COUDE</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="flex_ext_gavant" name="flex_ext_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="flex_ext_gapres" name="flex_ext_gapres"></td>
																	<td class="tg-0pky">Flex/Ext</td>
																	<td class="tg-lboi"><input type="text" id="flex_ext_davant" name="flex_ext_davant"></td>
																	<td class="tg-0lax"><input type="text" id="flex_ext_dapres" name="flex_ext_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="pro_supi_gavant" name="pro_supi_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="pro_supi_gapres" name="pro_supi_apres"></td>
																	<td class="tg-0pky">Pro/supi</td>
																	<td class="tg-lboi"><input type="text" id="pro_supi_davant" name="pro_supi_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pro_supi_dapres" name="pro_supi_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span  style="font-weight: bold; color: rgb(3, 3, 3);">POIGNET</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="poignet_flex_ext_gavant" name="poignet_flex_ext_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="poignet_flex_ext_gapres" name="poignet_flex_ext_gapres"></td>
																	<td class="tg-0pky">Flex/ ext</td>
																	<td class="tg-lboi"><input type="text" id="poignet_flex_ext_davant" name="poignet_flex_ext_davant"></td>
																	<td class="tg-0lax"><input type="text" id="poignet_flex_ext_dapres" name="poignet_flex_ext_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="ir_ic_gavant" name="ir_ic_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="ir_ic_apres" name="ir_ic_gapres"></td>
																	<td class="tg-0pky">IR/IC</td>
																	<td class="tg-lboi"><input type="text" id="ir_ic_davant" name="ir_ic__davant"></td>
																	<td class="tg-0lax"><input type="text" id="ir_ic_dapres" name="ir_ic_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span style="font-weight: bold; color: rgb(3, 3, 3);">DOIGTS</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="doigts_mcp_gavant" name="doigts_mcp_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="doigts_mcp_gapres" name="doigts_mcp_apres"></td>
																	<td class="tg-0pky">MCP (Flex/ Ext)</td>
																	<td class="tg-lboi"><input type="text" id="doigts_mcp_davant" name="doigts_mcp_davant"></td>
																	<td class="tg-0lax"><input type="text" id="doigts_mcp_dapres" name="doigts_mcp_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="doigts_ipp_gavant" name="doigts_ipp_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="doigts_ipp_gapres" name="doigts_ipp_gapres"></td>
																	<td class="tg-0pky">IPP (Flex/ Ext)</td>
																	<td class="tg-lboi"><input type="text" id="doigts_ipp_davant" name="doigts_ipp_davant"></td>
																	<td class="tg-0lax"><input type="text" id="doigts_ipp_dapres" name="doigts_ipp_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="doigts_ipd_gavant" name="doigts_ipd_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="doigts_ipd_gapres" name="doigts_ipd_gapres"></td>
																	<td class="tg-0pky">IPD (Flex/ Ext)</td>
																	<td class="tg-lboi"><input type="text" id="doigts_ipd_davant" name="doigts_ipd_davant"></td>
																	<td class="tg-0lax"><input type="text" id="doigts_ipd_dapres" name="doigts_ipd_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="pouce_flex_ext_gavant" name="pouce_flex_ext_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="pouce_flex_ext_gapres" name="pouce_flex_ext_dapres"></td>
																	<td class="tg-0pky">POUCE (Flex/Ext)</td>
																	<td class="tg-lboi"><input type="text" id="pouce_flex_ext_davant" name="pouce_flex_ext_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pouce_flex_ext_dapres" name="pouce_flex_ext_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="pouce_abd_add_gavant" name="pouce_abd_add_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="pouce_abd_add_gapres" name="pouce_abd_add_gapres"></td>
																	<td class="tg-0pky">POUCE (Abd/Add)</td>
																	<td class="tg-lboi"><input type="text" id="pouce_abd_add_davant" name="pouce_abd_add_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pouce_abd_add_dapres" name="pouce_abd_add_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"><input type="text" id="pouce_opposition_gavant" name="pouce_opposition_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="pouce_opposition_gapres" name="pouce_opposition_gapres"></td>
																	<td class="tg-0pky">POUCE (opposition)</td>
																	<td class="tg-lboi"><input type="text" id="pouce_opposition_davant" name="pouce_opposition_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pouce_opposition_dapres" name="pouce_opposition_dapres"></td>
																  </tr>
																  <tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span  style="font-weight: bold; color: rgb(3, 3, 3);">HANCHES</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																  </tr>

																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_flex_ext_gavant" name="hanche_flex_ext_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_flex_ext_gapres" name="hanche_flex_ext_gapres"></td>
																	<td class="tg-0pky">Flexion</td>
																	<td class="tg-lboi"><input type="text" id="hanche_flex_ext_davant" name="hanche_flex_ext_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_flex_ext_dapres" name="hanche_flex_ext_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_ext_gt_gavant" name="hanche_ext_gt_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_ext_gt_gapres" name="hanche_ext_gt_gapres"></td>
																	<td class="tg-0pky">Ext.GT (Psoas)</td>
																	<td class="tg-lboi"><input type="text" id="hanche_ext_gt_davant" name="hanche_ext_gt_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_ext_gt_dapres" name="hanche_ext_gt_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_ext_gf_gavant" name="hanche_ext_gf_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_ext_gf_gapres" name="hanche_ext_gf_gapres"></td>
																	<td class="tg-0pky">Ext.GF =90° (DA)</td>
																	<td class="tg-lboi"><input type="text" id="hanche_ext_gf_davant" name="hanche_ext_gf_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_ext_gf_dapres" name="hanche_ext_gf_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_abd_hf_gf_gavant" name="hanche_abd_hf_gf_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_abd_hf_gf_gapres" name="hanche_abd_hf_gf_gapres"></td>
																	<td class="tg-0pky">Abd. HF et GF (Ct Add.)</td>
																	<td class="tg-lboi"><input type="text" id="hanche_abd_hf_gf_davant" name="hanche_abd_hf_gf_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_abd_hf_gf_dapres" name="hanche_abd_hf_gf_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_abd_ht_gt_gavant" name="hanche_abd_ht_gt_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_abd_ht_gt_gapres" name="hanche_abd_ht_gt_gapres"></td>
																	<td class="tg-0pky">Abd. HT et GT (Lg Add.)</td>
																	<td class="tg-lboi"><input type="text" id="hanche_abd_ht_gt_davant" name="hanche_abd_ht_gt_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_abd_ht_gt_dapres" name="hanche_abd_ht_gt_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_rot_int_gavant" name="hanche_rot_int_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_rot_int_gapres" name="hanche_rot_int_gapres"></td>
																	<td class="tg-0pky">Rot. Int. associée à l’abd. GT (oui/non)</td>
																	<td class="tg-lboi"><input type="text" id="hanche_rot_int_davant" name="hanche_rot_int_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_rot_int_dapres" name="hanche_rot_int_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="poignet_rot_int_gf_gavant" name="poignet_rot_int_gf_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="poignet_rot_int_gf_gapres" name="poignet_rot_int_gf_gapres"></td>
																	<td class="tg-0pky">Rot. Int. GF (assis bord de table)</td>
																	<td class="tg-lboi"><input type="text" id="poignet_rot_int_gf_davant" name="poignet_rot_int_gf_davant"></td>
																	<td class="tg-0lax"><input type="text" id="poignet_rot_int_gf_dapres" name="poignet_rot_int_gf_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="hanche_rot_ext_gf_gavant" name="hanche_rot_ext_gf_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="hanche_rot_ext_gf_gapres" name="hanche_rot_ext_gf_gapres"></td>
																	<td class="tg-0pky">Rot. ext. GF (assis bord de table)</td>
																	<td class="tg-lboi"><input type="text" id="hanche_rot_ext_gf_davant" name="hanche_rot_ext_gf_davant"></td>
																	<td class="tg-0lax"><input type="text" id="hanche_rot_ext_gf_dapres" name="hanche_rot_ext_gf_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span style="font-weight: bold; color: rgb(3, 3, 3);">GENOUX</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="genoux_flex_gavant" name="genoux_flex_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="genoux_flex_gapres" name="genoux_flex_gapres"></td>
																	<td class="tg-0pky">Flexion</td>
																	<td class="tg-lboi"><input type="text" id="genoux_flex_davant" name="genoux_flex_davant"></td>
																	<td class="tg-0lax"><input type="text" id="genoux_flex_dapres" name="genoux_flex_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="genoux_angle_p_v_gavant" name="genoux_angle_p_v_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="genoux_angle_p_v_gapres" name="genoux_angle_p_v_gapres"></td>
																	<td class="tg-0pky">Angle poplité/verticale</td>
																	<td class="tg-lboi"><input type="text" id="genoux_angle_p_v_davant" name="genoux_angle_p_v_davant"></td>
																	<td class="tg-0lax"><input type="text" id="genoux_angle_p_v_dapres" name="genoux_angle_p_v_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="genoux_ext_gavant" name="genoux_ext_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="genoux_ext_gapres" name="genoux_ext_gapres"></td>
																	<td class="tg-0pky">Extension</td>
																	<td class="tg-lboi"><input type="text" id="genoux_ext_davant" name="genoux_ext_davant"></td>
																	<td class="tg-0lax"><input type="text" id="genoux_ext_dapres" name="genoux_ext_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"></td>
																	<td class="tg-0pky"></td>
																	<td class="tg-0pky"><span style="font-weight: bold; color: rgb(3, 3, 3);">PIEDS</span></td>
																	<td class="tg-lboi"></td>
																	<td class="tg-0lax"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="pied_flex_dorsale_gf_gavant" name="pied_flex_dorsale_gf_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="pied_flex_dorsale_gf_gapres" name="pied_flex_dorsale_gf_gapres"></td>
																	<td class="tg-0pky">Flexion dorsale GF</td>
																	<td class="tg-lboi"><input type="text" id="pied_flex_dorsale_gf_davant" name="pied_flex_dorsale_gf_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pied_flex_dorsale_gf_dapres" name="pied_flex_dorsale_gf_dapres"></td>
																</tr>
																<tr>
																	<td class="tg-0lax"><input type="text" id="pied_flex_dorsale_gt_gavant" name="pied_flex_dorsale_gt_gavant"></td>
																	<td class="tg-0pky"><input type="text" id="pied_flex_dorsale_gt_gapres" name="pied_flex_dorsale_gt_gapres"></td>
																	<td class="tg-0pky">Flexion dorsale GT</td>
																	<td class="tg-lboi"><input type="text" id="pied_flex_dorsale_gt_davant" name="pied_flex_dorsale_gt_davant"></td>
																	<td class="tg-0lax"><input type="text" id="pied_flex_dorsale_gt_dapres" name="pied_flex_dorsale_gt_dapres"></td>
																</tr>

																</tbody>
																</table>
															</div>
														</div>
														<div class="tab-pane fade" id="message3">
															<div class="pt-4">

																<h5 style="text-align: center;">Paramètres osseux</h5>

																	<table class="tg">
																		<thead>
																			<tr>
																			  <th class="tg-0lax" colspan="5" style="text-align: center;">
																				<span style="font-weight: bold; color: rgb(26, 118, 204);">Paramètres osseux</span>
																			  </th>
																			</tr>
																		  </thead>

																	<tbody>
																		<tr>
																			<td class="tg-0lax"><span style="font-weight:bold">Gauche Avant </span></td>
																			<td class="tg-0pky"><span style="font-weight:bold">Gauche Apres</span></td>
																			<td class="tg-0pky"><span style="font-weight:bold"></span></td>
																			<td class="tg-lboi"><span style="font-weight:bold">Droite Avant</span></td>
																			<td class="tg-0lax"><span style="font-weight:bold">Droite Apres</span></td>
																		  </tr>
																	  <tr>
																		<td class="tg-0lax"><input type="text" id="longueur-eias-mal_gavant" name="longueur-eias-mal_gavant"></td>
																		<td class="tg-0lax"><input type="text" id="longueur-eias-mal_gapres" name="longueur-eias-mal_gapres"></td>
																		<td class="tg-0lax"><span  style="font-weight: small; color: rgb(3, 3, 3);">Longueur EIAS-Mal.Int</span></td>
																		<td class="tg-0lax"><input type="text" id="longueur-eias-mal_davant" name="longueur-eias-mal_gavant"></td>
																		<td class="tg-0lax"><input type="text" id="longueur-eias-mal_dapres" name="longueur-eias-mal_gapres"></td>
																	</tr>

																	  <tr>
																		<td class="tg-0lax"><input type="text" id="angle_torsion_tibiale_externe_gavant" name="angle_torsion_tibiale_externe_gavant"></td>
																		<td class="tg-0lax"><input type="text" id="angle_torsion_tibiale_externe_gapres" name="angle_torsion_tibiale_externe_gapres"></td>
																		<td class="tg-0lax"><span  style="font-weight: small; color: rgb(3, 3, 3);"><span>Angle torsion tibiale externe (DV , angle talon/axe cuisse)</span></td>
																		<td class="tg-0lax"><input type="text" id="angle_torsion_tibiale_externe_davant" name="angle_torsion_tibiale_externe_davant"></td>
																		<td class="tg-0lax"><input type="text" id="angle_torsion_tibiale_externe_dapres" name="angle_torsion_tibiale_externe_dapres"></td>
																	  </tr>

																	  <tr>
																		<td class="tg-0lax"><input type="text" id="angle_anteversion_femorale_gavant" name="angle_anteversion_femorale_gavant"></td>
																		<td class="tg-0lax"><input type="text" id="angle_anteversion_femorale_dapres" name="angle_anteversion_femorale_gapres"></td>
																		<td class="tg-0lax"><span  style="font-weight: small; color: rgb(3, 3, 3);">Angle antéversion fémorale(DV,angle axe jambe/verticale)</span></td>
																		<td class="tg-0lax"><input type="text" id="angle_anteversion_femorale_gavant" name="angle_anteversion_femorale_davant"></td>
																		<td class="tg-0lax"><input type="text" id="angle_anteversion_femorale_dapres" name="angle_anteversion_femorale_dapres"></td>
																	  </tr>

																	  <tr>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_gavant" name="ascension_rotule_gavant"></td>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_gapres" name="ascension_rotule_gapres"></td>
																		<td class="tg-0lax"><span  style="font-weight: small; color: rgb(3, 3, 3);">Ascension rotule (distance entre rotule-interligne articulaire)</span></td>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_davant" name="ascension_rotule_davant"></td>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_dapres" name="ascension_rotule_dapres"></td>
																	  </tr>

																	  <tr>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_indice_gavant" name="ascension_rotule_indice_gavant"></td>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_indice_gapres" name="ascension_rotule_indice_gapres"></td>
																		<td class="tg-0lax"><span  style="font-weight:small; color: rgb(3, 3, 3);">Ascension rotule(indice de caton)</span></td>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_indice_gavant" name="ascension_rotule_davant"></td>
																		<td class="tg-0lax"><input type="text" id="ascension_rotule_indice_apres" name="ascension_rotule_indice_dapres"></td>
																	  </tr>
																	  </tbody>
																	  </table>

																			<div class="col-lg-12 mb-2">
																				<div class="row">
																					<!-- Champs "fouchou" -->
																					<div class="col-lg-6 mb-2">
																						<label class="text-label">Déformation rachis :</label>
																		                <div class="row">
																							<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																			          <input class="form-check-input" type="checkbox" id="deformation_rachis_oui" name="deformation_rachis" value="oui" onchange="afficherCommentaireDeformationRachis()" {{ $evaluations_rachis && $evaluations_rachis->deformation_rachis == 'oui' ? 'checked' : '' }}>
																			          <label class="form-check-label mr-3" for="deformation_rachis_oui">Oui</label>
																		           </div>
																				   </div>
																		           <div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																			          <input class="form-check-input" type="checkbox" id="deformation_rachis_non" name="deformation_rachis" value="non" onchange="masquerCommentaireDeformationRachis()" {{ $evaluations_rachis && $evaluations_rachis->deformation_rachis == 'non' ? 'checked' : '' }}>
																			         <label class="form-check-label" for="deformation_rachis_non">Non</label>
																					 </div>
																					 </div>
																					 </div>





																						<div class="form-group" id="commentaire_deformation_rachis" style="display: none;">
																							<label class="text-label">Commentaire :</label>
																							<textarea class="form-control" id="commentaire_deformation_rachis_input" name="commentaire_deformation_rachis" rows="3">{{ $evaluations_rachis ? $evaluations_rachis->commentaire_deformation_rachis : '' }}</textarea>
																						</div>

																						  <div class="form-group">
																						<label class="text-label"><h4>Choisir une photo :</h4></label>
																						<input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon" name="photo">
																						<br>
																						@if(isset($evaluations_rachis) && $evaluations_rachis->photo)
																						<label class="text-label">Image existante :</label>
																						<a href="{{ asset('imageb/' . $evaluations_rachis->photo) }}" target="_blank">Voir image Existant </a>
																						@endif
																					</div>


																						 <label class="text-label"><h4>Examen podoscopique:</h4></label>
																						 <br>
																						<!-- Pied creux -->

																							<label class="text-label">Pied creux:</label>

																							<div class="row">
																							<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="pied_creux_oui" name="pied_creux" value="oui" onchange="afficherZoneTexte('pied_creux')" {{ $examenpodoscopiques && $examenpodoscopiques->pied_creux == 'oui' ? 'checked' : '' }}>
																								<label class="form-check-label" for="pied_creux_oui">Oui</label>
																							</div>
																							</div>
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="pied_creux_non" name="pied_creux" value="non" onchange="afficherZoneTexte('pied_creux')" {{ $examenpodoscopiques && $examenpodoscopiques->pied_creux == 'non' ? 'checked' : '' }}>
																								<label class="form-check-label" for="pied_creux_non">Non</label>
																							</div>
																							</div>
																							</div>
																							<div class="form-group">
																								<div id="zone_texte_pied_creux" style="display: none;">
																									<label class="text-label">Droit:</label>
																									<input type="text" class="form-control" id="pied_creux_droit" name="pied_creux_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->pied_creux_droit : '' }}">
																									<label class="text-label">Gauche:</label>
																									<input type="text" class="form-control" id="pied_creux_gauche" name="pied_creux_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->pied_creux_gauche : '' }}">
																								</div>
																							</div>
																							<label class="text-label">Pied plat:</label>
																							<div class="row">
																								<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">

																								<input class="form-check-input" type="checkbox" id="pied_plat_oui" name="pied_plat" value="oui" onchange="afficherZoneTexte('pied_plat')" {{ $examenpodoscopiques && $examenpodoscopiques->pied_plat == 'oui' ? 'checked' : '' }}>
																								<label class="form-check-label" for="pied_plat_oui">Oui</label>
																							</div>
																							</div>
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="pied_plat_non" name="pied_plat" value="non" onchange="afficherZoneTexte('pied_plat')" {{ $examenpodoscopiques && $examenpodoscopiques->pied_plat == 'non' ? 'checked' : '' }}>
																								<label class="form-check-label" for="pied_plat_non">Non</label>
																							</div>
																							</div></div>
																							<div id="zone_texte_pied_plat" style="display: none;">
																								<label class="text-label">Droit:</label>
																								<input type="text" class="form-control" id="pied_plat_droit" name="pied_plat_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->pied_plat_droit : '' }}">
																								<label class="text-label">Gauche:</label>
																								<input type="text" class="form-control" id="pied_plat_gauche" name="pied_plat_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->pied_plat_gauche : '' }}">
																							</div>
																							<label class="text-label">Varus arrière pied:</label>
																							<div class="row">
																								<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="varus_arriere_pied_oui" name="varus_arriere_pied" value="oui" onchange="afficherZoneTexte('varus_arriere_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->varus_arriere_pied == 'oui' ? 'checked' : '' }}>
																								<label class="form-check-label" for="varus_arriere_pied_oui">Oui</label>
																							</div>
																							</div>
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="varus_arriere_pied_non" name="varus_arriere_pied" value="non" onchange="afficherZoneTexte('varus_arriere_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->varus_arriere_pied == 'non' ? 'checked' : '' }}>
																								<label class="form-check-label" for="varus_arriere_pied_non">Non</label>
																							</div>
																							</div>
																							</div>

																							<div id="zone_texte_varus_arriere_pied" style="display: none;">
																								<label class="text-label">Droit:</label>
																								<input type="text" class="form-control" id="varus_arriere_pied_droit" name="varus_arriere_pied_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->varus_arriere_pied_droit : '' }}">
																								<label class="text-label">Gauche:</label>
																								<input type="text" class="form-control" id="varus_arriere_pied_gauche" name="varus_arriere_pied_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->varus_arriere_pied_gauche : '' }}">
																							</div>
																						</div>
																					       <!-- Champs "louta" -->
																					       <div class="col-lg-6 mb-2">

																							<label class="text-label">Varus avant pied:</label>
																							<div class="row">
																								<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="varus_avant_pied_oui" name="varus_avant_pied" value="oui" onchange="afficherZoneTexte('varus_avant_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->varus_avant_pied == 'oui' ? 'checked' : '' }}>
																								<label class="form-check-label" for="varus_arriere_pied_oui">Oui</label>
																							</div>
																							</div>
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																								<input class="form-check-input" type="checkbox" id="varus_avant_pied_non" name="varus_avant_pied" value="non" onchange="afficherZoneTexte('varus_avant_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->varus_avant_pied == 'non' ? 'checked' : '' }}>
																								<label class="form-check-label" for="varus_arriere_pied_non">Non</label>
																							</div>
																							</div>
																							</div>

																							<div id="zone_texte_varus_avant_pied" style="display: none;">
																								<label class="text-label">Droit:</label>
																								<input type="text" class="form-control" id="varus_avant_pied_droit" name="varus_avant_pied_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->varus_avant_pied_droit : '' }}">
																								<label class="text-label">Gauche:</label>
																								<input type="text" class="form-control" id="varus_avant_pied_gauche" name="varus_avant_pied_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->varus_avant_pied_gauche : '' }}">
																							</div>


																								<label class="text-label">Valgus arrière pied:</label>
																								<div class="row">
																									<div class="col-lg-6">
																									<div class="form-check custom-checkbox mb-3">
																									<input class="form-check-input" type="checkbox" id="valgus_arriere_pied_oui" name="valgus_arriere_pied" value="oui" onchange="afficherZoneTexte('valgus_arriere_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->valgus_arriere_pied == 'oui' ? 'checked' : '' }}>
																									<label class="form-check-label" for="valgus_arriere_pied_oui">Oui</label>
																								</div>
																								</div>

																								<div class="col-lg-6">
																									<div class="form-check custom-checkbox mb-3">
																									<input class="form-check-input" type="checkbox" id="valgus_arriere_pied_non" name="valgus_arriere_pied" value="non" onchange="afficherZoneTexte('valgus_arriere_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->valgus_arriere_pied == 'non' ? 'checked' : '' }}>
																									<label class="form-check-label" for="valgus_arriere_pied_non">Non</label>
																								</div>
																								</div>
																								</div>

																								<div id="zone_texte_valgus_arriere_pied" style="display: none;">
																									<label class="text-label">Droit:</label>
																									<input type="text" class="form-control" id="valgus_arriere_pied_droit" name="valgus_arriere_pied_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->valgus_arriere_pied_droit : '' }}">
																									<label class="text-label">Gauche:</label>
																									<input type="text" class="form-control" id="valgus_arriere_pied_gauche" name="valgus_arriere_pied_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->valgus_arriere_pied_gauche: '' }}">
																								</div>
																								<label class="text-label">Valgus avant pied:</label>

																								<div class="row">
																									<div class="col-lg-6">
																									<div class="form-check custom-checkbox mb-3">
																									<input class="form-check-input" type="checkbox" id="valgus_avant_pied_oui" name="valgus_avant_pied" value="oui" onchange="afficherZoneTexte('valgus_avant_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->valgus_avant_pied == 'oui' ? 'checked' : '' }}>
																									<label class="form-check-label" for="valgus_avant_pied_oui">Oui</label>
																								</div>
																								</div>
																								<div class="col-lg-6">
																									<div class="form-check custom-checkbox mb-3">
																									<input class="form-check-input" type="checkbox" id="valgus_avant_pied_non" name="valgus_avant_pied" value="non" onchange="afficherZoneTexte('valgus_avant_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->valgus_avant_pied == 'non' ? 'checked' : '' }}>
																									<label class="form-check-label" for="valgus_avant_pied_non">Non</label>
																								</div>
																								</div>
																								</div>

																								<div id="zone_texte_valgus_avant_pied" style="display: none;">
																									<label class="text-label">Droit:</label>
																									<input type="text" class="form-control" id="valgus_avant_pied_droit" name="valgus_avant_pied_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->valgus_avant_pied_droit : '' }}">
																									<label class="text-label">Gauche:</label>
																									<input type="text" class="form-control" id="valgus_avant_pied_gauche" name="valgus_avant_pied_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->valgus_avant_pied_gauche : '' }}">
																								</div>
																								<label class="text-label">Cassure médio-pied:</label>
																								<div class="row">
																									<div class="col-lg-6">
																									<div class="form-check custom-checkbox mb-3">
																									<input class="form-check-input" type="checkbox" id="cassure_medio_pied_oui" name="cassure_medio_pied" value="oui" onchange="afficherZoneTexte('cassure_medio_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->cassure_medio_pied == 'oui' ? 'checked' : '' }}>
																									<label class="form-check-label" for="cassure_medio_pied_oui">Oui</label>
																								</div>
																								</div>
																								<div class="col-lg-6">
																									<div class="form-check custom-checkbox mb-3">
																									<input class="form-check-input" type="checkbox" id="cassure_medio_pied_non" name="cassure_medio_pied" value="non" onchange="afficherZoneTexte('cassure_medio_pied')" {{ $examenpodoscopiques && $examenpodoscopiques->cassure_medio_pied == 'non' ? 'checked' : '' }}>
																									<label class="form-check-label" for="cassure_medio_pied_non">Non</label>
																								</div>
																								</div>
																								</div>

																								<div id="zone_texte_cassure_medio_pied" style="display: none;">
																									<label class="text-label">Droit:</label>
																									<input type="text" class="form-control" id="cassure_medio_pied_droit" name="cassure_medio_pied_droit" placeholder="Droit" value="{{ $examenpodoscopiques ? $examenpodoscopiques->cassure_medio_pied_droit : '' }}">
																									<label class="text-label">Gauche:</label>
																									<input type="text" class="form-control" id="cassure_medio_pied_gauche" name="cassure_medio_pied_gauche" placeholder="Gauche" value="{{ $examenpodoscopiques ? $examenpodoscopiques->cassure_medio_pied_gauche : '' }}">
																								</div>
																								<div class="form-group">
																									<label class="text-label">Photos (bilan podoscopique):</label>
																									<input type="file" class="form-control" id="photos_podoscopique" name="photos_podoscopique" value="{{ $examenpodoscopiques? $examenpodoscopiques->photos_podoscopique : '' }}">
																									<br>
																									<label class="text-label">Image existante :</label>
																										@if(isset($examenpodoscopiques) && !empty($examenpodoscopiques->photos_podoscopique))
																											<a href="{{ asset('imageb/' . $examenpodoscopiques->photos_podoscopique) }}" target="_blank">Voir image Existant</a>
																											@endif
																								
																								
																							
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																		     </div>
																		</div>
																	</div>
																</div>
															</div>




																			<div class="tab-pane fade " id="DefaultTab1-html" role="tabpanel" aria-labelledby="home-tab">
																				<div class="card-body p-0 code-area">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																	<script>
																    	document.addEventListener('DOMContentLoaded', function () {
																		var deformationRachisOuiCheckbox = document.getElementById('deformation_rachis_oui');
																		var commentaireDeformationRachis = document.getElementById('commentaire_deformation_rachis');

																		function toggleCommentaireDeformationRachis() {
																			if (deformationRachisOuiCheckbox.checked) {
																				commentaireDeformationRachis.style.display = 'block'; // Afficher le commentaire
																			} else {
																				commentaireDeformationRachis.style.display = 'none'; // Masquer le commentaire
																			}
																		}

																		// Appel initial pour définir l'état d'affichage correct lors du chargement de la page
																		toggleCommentaireDeformationRachis();

																		// Ajout des écouteurs d'événements pour les changements
																		deformationRachisOuiCheckbox.addEventListener('change', toggleCommentaireDeformationRachis);
																		document.getElementById('deformation_rachis_non').addEventListener('change', toggleCommentaireDeformationRachis);
																	});

																		function updateImagePreview() {
																			var input = document.getElementById('inputGroupFile');
																			if (input.files && input.files[0]) {
																				var reader = new FileReader();
																				reader.onload = function(e) {
																					var imagePreview = document.getElementById('imagePreview');
																					imagePreview.innerHTML = '<img src="' + e.target.result + '" class="img-fluid" alt="Aperçu de l\'image">';
																				}
																				reader.readAsDataURL(input.files[0]); // Convertit le fichier en URL de données
																			}
																		}

																	
																

																	/********************/
                                              document.addEventListener('DOMContentLoaded', function() {
    function toggleZoneTexte(idCheckbox) {
        var checkboxOui = document.getElementById(idCheckbox + "_oui");
        var zoneTexte = document.getElementById("zone_texte_" + idCheckbox);

        if (checkboxOui.checked) {
            zoneTexte.style.display = "block";
        } else {
            zoneTexte.style.display = "none";
        }
    }

    function addEventListeners(idCheckbox) {
        var checkboxOui = document.getElementById(idCheckbox + "_oui");
        var checkboxNon = document.getElementById(idCheckbox + "_non");

        checkboxOui.addEventListener('change', function() {
            toggleZoneTexte(idCheckbox);
        });
        checkboxNon.addEventListener('change', function() {
            toggleZoneTexte(idCheckbox);
        });

        // Appel initial pour définir l'état d'affichage correct lors du chargement de la page
        toggleZoneTexte(idCheckbox);
    }

    // Liste des ID de checkbox
    var checkboxIds = [

	    'pied_creux',
		'pied_plat',
		'varus_arriere_pied',
        'varus_avant_pied',
        'valgus_arriere_pied',
        'valgus_avant_pied',
        'cassure_medio_pied'
    ];

    checkboxIds.forEach(function(id) {
        addEventListeners(id);
    });
});

                                            </script>


							<!-- /Column  bilan a tout age -->
							<div class="col-xl-12">
								<div class="card dz-card">
									<div class="card-header flex-wrap border-0 pb-0" id="default-tab3">
										<h4 class="card-title mb-0">Bilans à tout âge </h4>

									</div>
									<div class="tab-content" id="myTabContent-3">
										<div class="tab-pane fade show active" id="DefaultTab3" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<!-- Nav tabs -->
												<div class="default-tab">
													<ul class="nav nav-tabs">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#home4"><i class="las la-diagnoses me-2"></i> Etude des facteurs</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#profile4"><i class="las la-blind"></i> Eval fonct & marche</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#contact4"><i class="lar la-id-badge me-2"></i> Evaluation générale</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#message4"><i class="las la-brain"></i> Evaluation sensorielle</a>
														</li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane fade " id="home4" role="tabpanel">
															<div class="pt-4">

															<div class="col-lg-12 mb-2">
																<div class="row">
																	<!-- Champs "fouchou" -->
																	<div class="col-lg-6 mb-2">
																		<label class="text-label"><h5>Facteur B (état basal):</h5></label>

																		<label class="text-label">Anomalies observées au repos</label>
																		<div class="row">
																			<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																		  <input class="form-check-input" type="checkbox" id="anomalies_oui" name="anomalies" value="oui" {{ $etudes_facteurs && $etudes_facteurs->anomalies == 'oui' ? 'checked' : '' }}>
																		  <label class="form-check-label" for="anomalies_oui">Oui</label>
																		</div>
																		</div>

																		<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																		  <input class="form-check-input" type="checkbox" id="anomalies_non" name="anomalies" value="non" {{ $etudes_facteurs && $etudes_facteurs->anomalies == 'non' ? 'checked' : '' }}>
																		  <label class="form-check-label" for="anomalies_non">Non</label>
																		</div>
																	  </div>
																	  </div>

																	</div>
																	<!-- Champs "louta" -->
																	<div class="col-lg-6 mb-2">
																		<label class="text-label"><h5>Facteur E:</h5></label>
																		<div class="form-group"><label class="text-label"><h6>Réactions à des stimuli Internes:</h6></label></div>


																		  <label class="text-label">Parole:</label>
																		  <div class="row">
																			<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="parole_oui" name="parole" value="oui" {{  $etudes_facteurs && $etudes_facteurs->parole == 'oui' ? 'checked' : '' }}>
																			<label class="form-check-label" for="parole_oui">Oui</label>
																		  </div>
																		  </div>
																		  <div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="parole_non" name="parole" value="non" {{ $etudes_facteurs && $etudes_facteurs->parole == 'non' ? 'checked' : '' }}>
																			<label class="form-check-label" for="parole_non">Non</label>
																		  </div>
																		</div>
																		</div>
																		<label class="text-label">concentration /stimuli:</label>
																		<div class="row">
																			<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="parole_oui" name="concentration" value="oui" {{$etudes_facteurs && $etudes_facteurs->concentration == 'oui' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="concentration_oui">Oui</label>
																			</div>
																			</div>

																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="concentration_non" name="concentration" value="non" {{ $etudes_facteurs && $etudes_facteurs->concentration == 'non' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="concentration_non">Non</label>
																			</div>
																		  </div>
																		  </div>
																		  <label class="text-label"><h6>Réactions à des stimuli  Externe:</h6></label>
																		<br>
																			<label class="text-label">Bruit:</label>
																			<div class="row">
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="bruit_oui" name="bruit" value="oui" {{ $etudes_facteurs && $etudes_facteurs->bruit== 'oui' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="bruit_oui">Oui</label>
																			</div>
																			</div>

																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="bruit_non" name="bruit" value="non" {{ $etudes_facteurs && $etudes_facteurs->bruit == 'non' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="bruit_non">Non</label>
																			</div>
																		  </div>
																		  </div>

																			<label class="text-label">Toucher:</label>
																			<div class="row">
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="toucher_oui" name="toucher" value="oui" {{ $etudes_facteurs && $etudes_facteurs->toucher == 'oui' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="toucher_oui">Oui</label>
																			</div>
																			</div>

																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="toucher_non" name="toucher" value="non" {{ $etudes_facteurs && $etudes_facteurs->toucher == 'non' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="toucher_non">Non</label>
																			</div>
																		  </div>
																		</div>

																			<label class="text-label">effort contrarié</label>
																			<div class="row">
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="effort _oui" name="effort" value="oui" {{ $etudes_facteurs && $etudes_facteurs->effort == 'oui' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="effort _oui">Oui</label>
																			</div>
																			</div>
																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="effort _non" name="effort" value="non" {{ $etudes_facteurs && $etudes_facteurs->effort == 'non' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="effort _non">Non</label>
																			</div>
																		  </div>
																		  </div>


																	</div>
																</div>
															</div>
														</div>
													</div>



													<div class="tab-pane fade" id="profile4">
														<div class="pt-4">
															<div class="col-lg-12 mb-2">
																<div class="row">
																	<!-- Champs "fouchou" -->
																	<div class="col-lg-6 mb-2">
																		<label class="text-label"><h3>Evaluation fonctionnelle</h3></label>

																		  <label class="text-label">Equilibre assis bord de table, jambes pendantes sans appui des membres supérieurs:</label>
																		  <div class="row">
																			<div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="equilibre_assis_bord_table_oui" name="equilibre_assis_bord_table" value="oui" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_assis_bord_table == 'oui' ? 'checked' : '' }}>
																			<label class="form-check-label mr-3" for="equilibre_assis_bord_table_oui">Oui</label>
																		  </div>
																		  </div>

																		  <div class="col-lg-6">
																			<div class="form-check custom-checkbox mb-3">
																			<input class="form-check-input" type="checkbox" id="equilibre_assis_bord_table_non" name="equilibre_assis_bord_table" value="non" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_assis_bord_table == 'non' ? 'checked' : '' }}>
																			<label class="form-check-label" for="equilibre_assis_bord_table_non">Non</label>
																		  </div>
																		</div>
																	</div>


																	<label class="text-label">Equilibre assis au sol sans appui des membres supérieurs:</label>
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="form-check custom-checkbox mb-3">
																	  <input class="form-check-input" type="checkbox" id="equilibre_assis_sol_oui" name="equilibre_assis_sol" value="oui" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_assis_sol== 'oui' ? 'checked' : '' }}>
																	  <label class="form-check-label mr-3" for="equilibre_assis_sol_oui">Oui</label>
																	</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-check custom-checkbox mb-3">
																	  <input class="form-check-input" type="checkbox" id="equilibre_assis_sol_non" name="equilibre_assis_sol" value="non" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_assis_sol == 'non' ? 'checked' : '' }}>
																	  <label class="form-check-label" for="equilibre_assis_sol_non">Non</label>
																	</div>
																  </div>
																  </div>

																	<label class="text-label">Equilibre debout sans appui des mains et bipodal:</label>
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="form-check custom-checkbox mb-3">
																	  <input class="form-check-input" type="checkbox" id="equilibre_debout_bipodal_oui" name="equilibre_debout_bipodal" value="oui" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_debout_bipodal == 'oui' ? 'checked' : '' }}>
																	  <label class="form-check-label mr-3" for="equilibre_debout_bipodal_oui">Oui</label>
																	</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-check custom-checkbox mb-3">
																	  <input class="form-check-input" type="checkbox" id="equilibre_debout_bipodal_non" name="equilibre_debout_bipodal" value="non" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_debout_bipodal == 'non' ? 'checked' : '' }}>
																	  <label class="form-check-label" for="equilibre_debout_bipodal_non">Non</label>
																	</div>
																  </div>
																  </div>

																		<label class="text-label">Equilibre sans appui des mains et unipodal:</label>
																			<div class="row">
																				<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="equilibre_unipodal_oui" name="equilibre_unipodal" value="oui" onchange="afficherTemps()" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_unipodal == 'oui' ? 'checked' : '' }}>
																			  <label class="form-check-label mr-3" for="equilibre_unipodal_oui">Oui</label>
																			</div>
																			</div>

																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																			  <input class="form-check-input" type="checkbox" id="equilibre_unipodal_non" name="equilibre_unipodal" value="non" onchange="masquerTemps()" {{ $evaluations_fonctionnelles && $evaluations_fonctionnelles->equilibre_unipodal == 'non' ? 'checked' : '' }}>
																			  <label class="form-check-label" for="equilibre_unipodal_non">Non</label>
																			</div>
																		  </div>
																		  </div>
																		  <div id="temps" style="display: none;">
																		  <label class="text-label">Temps:</label>
																			<div class="form-group row">
																			  <div class="col-sm-6">
																				<input type="text" class="form-control" id="temps_droite" name="temps_droite" placeholder="Droite" value="{{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->temps_droite : '' }}">
																			  </div>
																			  <div class="col-sm-6">
																				<input type="text" class="form-control" id="temps_gauche" name="temps_gauche" placeholder="Gauche" value="{{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->temps_droite : '' }}">
																			  </div>
																			  </div>
																			  </div>

											
																			<div class="form-group">
																					<button type="button" class="btn btn-square btn-success" id="view_image_button_cms">
																						<i class="fas fa-image me-2"></i>Voir Photo (GMS)
																					</button>
																				</div>

																				<a href="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/cms.PNG" target="_blank" id="image_link_partie2" style="display: none;">
																					<img id="myImg2" src="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/cms.PNG" alt="photo partie2" style="width:100%;max-width:300px;">
																				</a>

																			  <div class="form-group">
																				<label for="image_description" class="text-label">Description:</label>
																				<textarea class="form-control" id="cms_image_description" name="cms_image_description" rows="3"> {{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->cms_image_description : '' }}</textarea>
																			  </div>

																			  <div class="form-group">
																					<button type="button" class="btn btn-square btn-success" id="view_image_button_gmfcs">
																						<i class="fas fa-image me-2"></i>Voir Photo (GMFCS)
																					</button>
																				</div>

																				<a href="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/gmfcs.PNG" target="_blank" id="image_link_gmfcs" style="display: none;">
																					<img id="myImg2" src="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/gmfcs.PNG" alt="photo GMFCS" style="width:100%;max-width:300px;">
																				</a>

																	</div>
																	<style>  /* Modal container */
																		.modal {
																			display: none; /* Hidden by default */
																			position: fixed; /* Stay in place */
																			z-index: 1; /* Sit on top */
																			padding-top: 100px; /* Location of the box */
																			left: 0;
																			top: 0;
																			width: 100%; /* Full width */
																			height: 100%; /* Full height */
																			overflow: auto; /* Enable scroll if needed */
																			background-color: rgba(0, 0, 0, 0); /* Fallback color */
																			background-color: rgba(0, 0, 0, 0.271); /* Black w/ opacity */
																		}

																		/* Modal Content (image) */
																		.modal-content {
																			margin: auto;
																			display: block;
																			width: 80%;
																			max-width: 700px;
																		}

																		/* The Close Button */
																		.close {
																			position: absolute;
																			top: 15px;
																			right: 35px;
																			color: #f1f1f1;
																			font-size: 40px;
																			font-weight: bold;
																			transition: 0.3s;
																		}

																		.close:hover,
																		.close:focus {
																			color: #bbb;
																			text-decoration: none;
																			cursor: pointer;
																		}
																	</style>
																	<!-- Champs "louta" -->
																	<div class="col-lg-6 mb-2">


																			  <div class="form-group">
																				<label for="gmfcs_image" class="text-label">Description</label>
																				<textarea class="form-control" id="gmfcs_image" name="gmfcs_image_description" rows="3">{{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->gmfcs_image_description : '' }}</textarea>
																			  </div>
                                                                              <div class="form-group">
																			 <button type="button" class="btn btn-square btn-success" id="view_image_button_gillet">
																						<i class="fas fa-image me-2"></i>Voir photo (GILLET)
																					</button>
																			</div>

																				<a href="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/gillet.png" target="_blank" id="image_link_partie1" style="display: none;">
																					<img id="myImg" src="http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/gillet.png" alt="photo gillet" style="width:100%;max-width:300px;">
																				</a>


																		  <div class="form-group">
																			<label for="gillette_image_description" class="text-label">Description</label>
																			<textarea class="form-control" id="gillette_image_description" name="gillette_image_description" rows="3">{{ $evaluations_fonctionnelles ? $evaluations_fonctionnelles->gillette_image_description : '' }}</textarea>
																		  </div>
																		  <div class="form-group">
																			<label for="evaluation_marche" class="text-label"><h3>Evaluation de la marche :</h3></label>
																			<textarea class="form-control" id="evaluation_marche" name="evaluation_marche" rows="3">{{ $evaluations_marches ? $evaluations_marches->evaluation_marche : '' }}</textarea>
																		  </div>

																		  <div class="form-group">
																			<label for="description_marche" class="text-label">Description du schéma de la marche :</label>
																			<textarea class="form-control" id="description_marche" name="description_marche" rows="3">{{ $evaluations_marches ? $evaluations_marches->description_marche : '' }}</textarea>
																		  </div>
																		  <div class="form-group">
																			<label for="vitesse_marche" class="text-label">VITESSE DE MARCHE SUR 10 m :</label>
																			<input type="text" class="form-control" id="vitesse_marche" name="vitesse_marche" value="{{ $evaluations_marches ? $evaluations_marches->vitesse_marche : '' }}">
																		  </div>

																			<div class="form-group">
																			<input type="file" class="form-control" id="video_marche" name="video_marche">	
																			<br>																
																			
																			@if($evaluations_marches && $evaluations_marches->video_marche)
																			<a href="{{ asset('videos/' . $evaluations_marches->video_marche) }}" target="_blank"> Vidéo existante : Voir vidéo Existant</a>
																			@endif
																		</div>



																	</div>
																</div>
															</div>
														</div>
													    </div>




																		  <script>
	 
																					document.getElementById('view_image_button_partie1').onclick = function() {
																						window.open('http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/partie1.png', '_blank');
																					}
																					document.getElementById('view_image_button_partie2').onclick = function() {
																						window.open('http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/partie2.png', '_blank');
																					}
																					document.getElementById('view_image_button_torision').onclick = function() {
																				    window.open('http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/torision.PNG', '_blank');
																			       }
																				   document.getElementById('view_image_button_cms').onclick = function() {
																				    window.open('http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/cms.PNG', '_blank');
																			       }
																				   document.getElementById('view_image_button_gmfcs').onclick = function() {
																				    window.open('http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/gmfcs.PNG', '_blank');
																			       }
																				    document.getElementById('view_image_button_gillet').onclick = function() {
																				    window.open('http://localhost/PFEProjetHopital-18-05-2/PFEProjetHopital/public/image/imageBilan/gillet.PNG', '_blank');
																			       }


																				


																		 
																		 /*************************/

																	
																			function afficherTemps() {
																				var checkBox = document.getElementById("equilibre_unipodal_oui");
																				var tempsDiv = document.getElementById("temps");
																				if (checkBox.checked == true) {
																					tempsDiv.style.display = "block";
																				} else {
																					tempsDiv.style.display = "none";
																				}
																			}

																			function masquerTemps() {
																				var checkBox = document.getElementById("equilibre_unipodal_non");
																				var tempsDiv = document.getElementById("temps");
																				if (checkBox.checked == true) {
																					tempsDiv.style.display = "none";
																				} else {
																					tempsDiv.style.display = "block";
																				}
																			}

																  </script>

														<div class="tab-pane fade" id="contact4">
															<div class="pt-4">
																<div class="form-group">
																	<label for="poids" class="text-label">Poids :</label>
																	<input type="text" class="form-control" id="poids" name="poids" value="{{ $evaluations_generales ? $evaluations_generales->poids : '' }}">
																  </div>

																  <div class="form-group">
																	<label for="taille" class="text-label">Taille :</label>
																	<input type="text" class="form-control" id="taille" name="taille" value="{{ $evaluations_generales ? $evaluations_generales->taille : '' }}">
																  </div>

																  <div class="form-group">
																	<label for="perimetre_cranien" class="text-label">Périmètre Crânien :</label>
																	<input type="text" class="form-control" id="perimetre_cranien" name="perimetre_cranien" value="{{ $evaluations_generales ? $evaluations_generales->perimetre_cranien : '' }}">
																  </div>

																  <div class="form-group">
																	<label class="text-label">Insuffisance respiratoire :</label>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input" type="checkbox" id="insuffisance_respiratoire_oui" name="insuffisance_respiratoire" value="oui" {{ $evaluations_generales && $evaluations_generales->insuffisance_respiratoire == 'oui' ? 'checked' : '' }}>
																		<label class="form-check-label mr-3" for="insuffisance_respiratoire_oui">Oui</label>
																	  </div>
																	  <div class="form-check form-check-inline">
																		<input class="form-check-input" type="checkbox" id="insuffisance_respiratoire_non" name="insuffisance_respiratoire" value="non" {{ $evaluations_generales && $evaluations_generales->insuffisance_respiratoire == 'non' ? 'checked' : '' }}>
																		<label class="form-check-label" for="insuffisance_respiratoire_non">Non</label>
																	  </div>
																  </div>
															</div>
														</div>
														<div class="tab-pane fade" id="message4">
															<div class="pt-4">

																		<div class="col-lg-12 mb-2">
																			<div class="row">
																				<!-- Champs "fouchou" -->
																				<div class="col-lg-6 mb-2">
																				<div class="form-group">
																					<label for="evaluation_sensorielle" class="text-label">Évaluation sensorielle :</label>
																					<select class="form-control" id="evaluation_sensorielle" name="evaluation_sensorielle">
																						<option value="strabisme" {{ $evaluations_sensorielles && $evaluations_sensorielles->evaluation_sensorielle == 'strabisme' ? 'selected' : '' }}>Strabisme</option>
																						<option value="troubles_poursuite_oculaires" {{ $evaluations_sensorielles && $evaluations_sensorielles->evaluation_sensorielle == 'troubles_poursuite_oculaires' ? 'selected' : '' }}>Troubles de la poursuite oculaires</option>
																						<option value="cecite_corticale" {{ $evaluations_sensorielles && $evaluations_sensorielles->evaluation_sensorielle == 'cecite_corticale' ? 'selected' : '' }}>Cécité corticale</option>
																						<option value="nystagmus" {{ $evaluations_sensorielles && $evaluations_sensorielles->evaluation_sensorielle == 'nystagmus' ? 'selected' : '' }}>Nystagmus</option>
																						<option value="autres" {{ $evaluations_sensorielles && $evaluations_sensorielles->evaluation_sensorielle == 'autres' ? 'selected' : '' }}>Autres</option>
																					</select>
																				</div>

																					<div class="form-group" id="autres_description" style="display: none;">
																						<label for="autres_description_text" class="text-label">Autres descriptions :</label>
																						<textarea class="form-control" id="autres_description_text" name="autres_description_text" rows="3">{{ $evaluations_sensorielles ? $evaluations_sensorielles->autres_description_text : '' }}</textarea>
																					  </div>
																					  <div class="form-group">
																						<label for="troubles_audition" class="text-label">Troubles de l'audition :</label>
																						<input type="text" class="form-control" id="troubles_audition" name="troubles_audition" placeholder="Entrez les détails des troubles de l'audition" value="{{ $evaluations_sensorielles ? $evaluations_sensorielles->troubles_audition : '' }}">
																					  </div>
																					<div class="form-group">
																					<label for="dyspraxie_buccofaciale" class="text-label">Dyspraxie buccofaciale :</label>
																					<select class="form-control" id="dyspraxie_buccofaciale" name="dyspraxie_buccofaciale" onchange="afficherAutreDyspraxie()">
																						<option value="bavage" {{ $evaluations_sensorielles && $evaluations_sensorielles->dyspraxie_buccofaciale == 'bavage' ? 'selected' : '' }}>Bavage</option>
																						<option value="protrusion_langue" {{ $evaluations_sensorielles && $evaluations_sensorielles->dyspraxie_buccofaciale == 'protrusion_langue' ? 'selected' : '' }}>Protrusion de la langue</option>
																						<option value="autre" {{ $evaluations_sensorielles && $evaluations_sensorielles->dyspraxie_buccofaciale == 'autre' ? 'selected' : '' }}>Autre</option>
																					</select>
																				</div>

																				

																					  <div class="form-group" id="autre_troubles_deglutition_group" style="display: none;">
																						<label for="autre_troubles_deglutition" class="text-label">Autre (précisez) :</label>
																						<input type="text" class="form-control" id="autre_troubles_deglutition" name="autre_troubles_deglutition" placeholder="Précisez..." value="{{ $evaluations_sensorielles ? $evaluations_sensorielles->autre_troubles_deglutition : '' }}">
																					  </div>
																					  <label class="text-label">Trouble du langage :</label>
																						<div class="row">
																							<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																						  <input class="form-check-input" type="checkbox" id="trouble_langage_oui" name="trouble_langage" value="oui" onchange="afficherDescriptionLangage()" {{ $evaluations_sensorielles && $evaluations_sensorielles->trouble_langage == 'oui' ? 'checked' : '' }}>
																						  <label class="form-check-label" for="trouble_langage_oui">Oui</label>
																						</div>
																						</div>
																						<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																						 <input class="form-check-input" type="checkbox" id="trouble_langage_non" name="trouble_langage" value="non" onchange="cacherDescriptionLangage()"  {{ $evaluations_sensorielles && $evaluations_sensorielles->trouble_langage == 'non' ? 'checked' : '' }}>

																						  <label class="form-check-label" for="trouble_langage_non">Non</label>
																						</div>
																						</div>
																						</div>
																						<div  class="form-group" id="description_langage" style="display: none;">
																							<label class="text-label">Description :</label>
																							<textarea class="form-control" id="description_langage_text" name="description_langage" rows="3">{{ $evaluations_sensorielles ? $evaluations_sensorielles->description_langage : '' }}</textarea>
																						  </div>

																						  <label class="text-label">Troubles des fonctions supérieures :</label>
																						  <div class="row">
																							<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="troubles_fonctions_oui" name="troubles_fonctions" value="oui" onchange="afficherTypeFonctions()" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_fonctions == 'oui' ? 'checked' : '' }}>
																							<label class="form-check-label" for="troubles_fonctions_oui">Oui</label>
																						  </div>
																						  </div>
																						  <div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="troubles_fonctions_non" name="troubles_fonctions" value="non" onchange="cacherTypeFonctions()" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_fonctions == 'non' ? 'checked' : '' }}>
																							<label class="form-check-label" for="troubles_fonctions_non">Non</label>
																						  </div>
																						  </div>
																						  </div>
																						  <div class="form-group" id="type_fonctions" style="display: none;">
																							<label class="text-label">Quel type :</label>
																							<input type="text" class="form-control" id="type_fonctions_text" name="type_fonctions" value="{{ $evaluations_sensorielles ? $evaluations_sensorielles->type_fonctions: '' }}">
																						  </div>
																				</div>
																				<!-- Champs "louta" -->
																				<div class="col-lg-6 mb-2">

																						  <label class="text-label">Bilan neuro-psychologique :</label>
																						  <div class="row">
																							<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="bilan_neuro_oui" name="bilan_neuro" value="oui" onchange="afficherCRBilan()" {{ $evaluations_sensorielles && $evaluations_sensorielles->bilan_neuro == 'oui' ? 'checked' : '' }}>
																							<label class="form-check-label" for="bilan_neuro_oui">Oui</label>
																						  </div>
																						  </div>
																						  <div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="bilan_neuro_non" name="bilan_neuro" value="non" onchange="cacherCRBilan()" {{ $evaluations_sensorielles && $evaluations_sensorielles->bilan_neuro == 'non' ? 'checked' : '' }}>
																							<label class="form-check-label" for="bilan_neuro_non">Non</label>
																						  </div>
																						  </div>
																						  </div>
																						  <div  class="form-group" id="cr_bilan" style="display: none;">
																							<label class="text-label">CR du bilan :</label>
																							<textarea class="form-control" id="cr_bilan_text" name="cr_bilan" rows="3">{{ $evaluations_sensorielles ? $evaluations_sensorielles->cr_bilan : '' }}</textarea>
																						  </div>
																						  <label class="text-label">Syncinésies :</label>
																						  <div class="row">
																							<div class="col-lg-6">
																							<div class="form-check custom-checkbox mb-3">
                                                                                           <input class="form-check-input" type="checkbox" id="syncinesies_oui" name="syncinesies" value="oui" {{ $evaluations_sensorielles && $evaluations_sensorielles->syncinesies == 'oui' ? 'checked' : '' }}>
                                                                                          <label class="form-check-label" for="syncinesies_oui">Oui</label>
                                                                                         </div>
																						 </div>
																	                     <div class="col-lg-6">
																		                 <div class="form-check custom-checkbox mb-3">
                                                                                         <input class="form-check-input" type="checkbox" id="syncinesies_non" name="syncinesies" value="non" {{ $evaluations_sensorielles && $evaluations_sensorielles->syncinesies == 'non' ? 'checked' : '' }}>
                                                                                         <label class="form-check-label" for="syncinesies_non">Non</label>
                                                                                    </div>
                                                                                   </div>
																			     </div>
																				 <div class="form-group">
																					<label class="text-label">Troubles vésico sphinctériens :</label>
																					<select class="form-control" id="troubles_vesico_sphincteriens" name="troubles_vesico_sphincteriens">
																						<option value="pollakiurie" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_vesico_sphincteriens == 'pollakiurie' ? 'selected' : '' }}>Pollakiurie</option>
																						<option value="fuites" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_vesico_sphincteriens == 'fuites' ? 'selected' : '' }}>Fuites</option>
																						<option value="dysurie" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_vesico_sphincteriens == 'dysurie' ? 'selected' : '' }}>Dysurie</option>
																						<option value="énurésie" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_vesico_sphincteriens == 'énurésie' ? 'selected' : '' }}>Énurésie</option>
																					</select>
																				</div>


																				  <div class="form-group">
																					<label class="text-label">Troubles anorectaux:</label>
																					<textarea class="form-control" id="troubles_anorectaux" name="troubles_anorectaux" rows="3">{{ $evaluations_sensorielles ? $evaluations_sensorielles->troubles_anorectaux : '' }}</textarea>
																				  </div>
																					<label class="text-label">Acquisition de la propreté anale:</label>
																					<div class="row">
																						<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="acquisition_proprete_anale_oui" name="acquisition_proprete_anale" value="oui" {{ $evaluations_sensorielles && $evaluations_sensorielles->acquisition_proprete_anale== 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="acquisition_proprete_anale_oui">Oui</label>
																					</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																					  <input class="form-check-input" type="checkbox" id="acquisition_proprete_anale_non" name="acquisition_proprete_anale" value="non" {{ $evaluations_sensorielles && $evaluations_sensorielles->acquisition_proprete_anale == 'non' ? 'checked' : '' }}>
																					  <label class="form-check-label" for="acquisition_proprete_anale_non">Non</label>
																					</div>
																					</div>
																				  </div>

																					<label class="text-label">Troubles urinaires:</label>
																					<div class="row">
																						<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																					  <input class="form-check-input" type="checkbox" id="troubles_urinaires_oui" name="troubles_urinaires" value="oui" {{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_urinaires == 'oui' ? 'checked' : '' }}>
																					  <label class="form-check-label" for="troubles_urinaires_oui">Oui</label>
																					</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																					  <input class="form-check-input" type="checkbox" id="troubles_urinaires_non" name="troubles_urinaires" value="non"{{ $evaluations_sensorielles && $evaluations_sensorielles->troubles_urinaires == 'non' ? 'checked' : '' }}>
																					  <label class="form-check-label" for="troubles_urinaires_non">Non</label>
																					</div>
																					</div>
																				  </div>

																				</div>
																			</div>
																		</div>
																	</div>
																</div>


															</div>
														</div>
														</div>
														</div>

														<div class="tab-pane fade " id="DefaultTab1-html" role="tabpanel" aria-labelledby="home-tab">
															<div class="card-body p-0 code-area">

															</div>
														</div>
													</div>
												</div>
											</div>







																  <script>
																		document.addEventListener("DOMContentLoaded", function() {
																			// Sélection de la liste déroulante
																			var selectBox = document.getElementById("evaluation_sensorielle");
																			
																			// Sélection du champ de texte
																			var autresDescription = document.getElementById("autres_description");

																			// Écouteur d'événement sur le changement de sélection
																			selectBox.addEventListener("change", function() {
																				// Si l'option "Autres" est sélectionnée, afficher le champ de texte, sinon le cacher
																				if (this.value === "autres") {
																					autresDescription.style.display = "block";
																				} else {
																					autresDescription.style.display = "none";
																				}
																			});

																			// Vérifier l'état initial au chargement de la page
																			if (selectBox.value === "autres") {
																				autresDescription.style.display = "block";
																			} else {
																				autresDescription.style.display = "none";
																			}
																		});


																  /********************/

																	   function afficherDescriptionLangage() {
																		var troubleLangageOuiCheckbox = document.getElementById('trouble_langage_oui');
																		var descriptionLangageDiv = document.getElementById('description_langage');

																		if (troubleLangageOuiCheckbox.checked) {
																			descriptionLangageDiv.style.display = 'block';
																		} else {
																			descriptionLangageDiv.style.display = 'none';
																		}
																	}

																	function cacherDescriptionLangage() {
																		var troubleLangageNonCheckbox = document.getElementById('trouble_langage_non');
																		var descriptionLangageDiv = document.getElementById('description_langage');

																		if (troubleLangageNonCheckbox.checked) {
																			descriptionLangageDiv.style.display = 'none';
																		} else {
																			descriptionLangageDiv.style.display = 'block';
																		}
																	}

																		// Appel initial pour définir l'état d'affichage correct au chargement de la page
																		afficherDescriptionLangage();

																		// Ajouter des écouteurs d'événements pour les changements
																		document.getElementById('trouble_langage_oui').addEventListener('change', afficherDescriptionLangage);
																		document.getElementById('trouble_langage_non').addEventListener('change', cacherDescriptionLangage);




																	document.addEventListener('DOMContentLoaded', function () {
																	var troublesFonctionsOuiCheckbox = document.getElementById('troubles_fonctions_oui');
																	var typeFonctionsDiv = document.getElementById('type_fonctions');

																	function afficherTypeFonctions() {
																		if (troublesFonctionsOuiCheckbox.checked) {
																			typeFonctionsDiv.style.display = 'block';
																		} else {
																			typeFonctionsDiv.style.display = 'none';
																		}
																	}

																	function cacherTypeFonctions() {
																		if (!troublesFonctionsOuiCheckbox.checked) {
																			typeFonctionsDiv.style.display = 'none';
																		}
																	}

																	// Appel initial pour définir l'état d'affichage correct au chargement de la page
																	afficherTypeFonctions();

																	// Ajouter des écouteurs d'événements pour les changements
																	troublesFonctionsOuiCheckbox.addEventListener('change', afficherTypeFonctions);
																	document.getElementById('troubles_fonctions_non').addEventListener('change', cacherTypeFonctions);
																});






																/***********************/
																																		function afficherCRBilan() {
																		var bilanNeuroOuiCheckbox = document.getElementById('bilan_neuro_oui');
																		var crBilanDiv = document.getElementById('cr_bilan');

																		if (bilanNeuroOuiCheckbox.checked) {
																			crBilanDiv.style.display = 'block';
																		} else {
																			crBilanDiv.style.display = 'none';
																		}
																	}

																	function cacherCRBilan() {
																		var bilanNeuroNonCheckbox = document.getElementById('bilan_neuro_non');
																		var crBilanDiv = document.getElementById('cr_bilan');

																		if (bilanNeuroNonCheckbox.checked) {
																			crBilanDiv.style.display = 'none';
																		} else {
																			crBilanDiv.style.display = 'block';
																		}
																	}

																	// Appel initial pour définir l'état d'affichage correct au chargement de la page
																	afficherCRBilan();

																	// Ajouter des écouteurs d'événements pour les changements
																	document.getElementById('bilan_neuro_oui').addEventListener('change', afficherCRBilan);
																	document.getElementById('bilan_neuro_non').addEventListener('change', cacherCRBilan);

														
                                                                    </script>

							<!-- Column  -->

							<div class="col-xl-12">
								<div class="card dz-card">
									<div class="card-header flex-wrap border-0 pb-0" id="default-tab4">
										<h4 class="card-title mb-0">Prise en charge</h4>

									</div>
									<div class="tab-content" id="myTabContent-4">
										<div class="tab-pane fade show active" id="DefaultTab3" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<!-- Nav tabs -->
												<div class="default-tab">
													<ul class="nav nav-tabs">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#home5"><i class="las la-hand-holding-heart me-2"></i> Kinésithérapie</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#profile5"><i class="la la-syringe me-2"></i> Injection toxine</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#contact5"><i class="la la-tools me-2"></i> Appareillage</a>

														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#message5"><i class="lab la-accessible-icon me-2"></i>Prescriptions</a>
														</li>
													</ul>

													<div class="tab-content">
														<div class="tab-pane fade show " id="home5" role="tabpanel">
															<div class="pt-4">
															<div class="col-lg-12 mb-2">
																<div class="row">
																	<!-- Champs "fouchou" -->
																	<div class="col-lg-6 mb-2">
																	 <label class="text-label">Kinésithérapie :</label>
																		<div class="row">
																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="kinesitherapie_oui" name="kinesitherapie" value="oui" {{ $kinesitherapies && $kinesitherapies->kinesitherapie == 'oui' ? 'checked' : '' }}>
																					<label class="form-check-label" for="kinesitherapie_oui">Oui</label>
																				</div>
																			</div>
																			<div class="col-lg-6">
																				<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="kinesitherapie_non" name="kinesitherapie" value="non" {{ $kinesitherapies && $kinesitherapies->kinesitherapie == 'non' ? 'checked' : '' }}>
																					<label class="form-check-label" for="kinesitherapie_non">Non</label>
																				</div>
																			</div>
																		</div>

																		<div class="form-group" id="nombre_seance_par_semaine_input" style="display: none;">
																			<label class="text-label">Nombre de séances par semaine :</label>
																			<textarea class="form-control" id="seances_par_semaine" name="seances_par_semaine">{{ $kinesitherapies ? $kinesitherapies->seances_par_semaine : '' }}</textarea>
																		</div>


																	</div>

																	<!-- Champs "louta" -->
																	<div class="col-lg-6 mb-2">
																		<label class="text-label">Autorééducation à domicile :</label>
                                                                   <div class="row">
                                                                  <div class="col-lg-6">
                                                                  <div class="form-check custom-checkbox mb-3">
                                                                 <input class="form-check-input" type="checkbox" id="autoreeducation_oui" name="autoreeducation" value="oui" {{ $kinesitherapies && $kinesitherapies->autoreeducation == 'oui' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="autoreeducation_oui">Oui</label>
                                                                 </div>
                                                                 </div>
                                                                 <div class="col-lg-6">
                                                                 <div class="form-check custom-checkbox mb-3">
                                                                 <input class="form-check-input" type="checkbox" id="autoreeducation_non" name="autoreeducation" value="non" {{ $kinesitherapies && $kinesitherapies->autoreeducation == 'non' ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="autoreeducation_non">Non</label>
                                                                                </div>
                                                                           </div>
                                                                      </div>
	                                                              <div id="apprentissage_fait_input" style="display: none;">

                                                                 <label class="text-label">Apprentissage fait :</label>
                                                                 <div class="row">
                                                                  <div class="col-lg-6">
                                                                 <div class="form-check custom-checkbox mb-3">
                                                                <input class="form-check-input" type="checkbox" id="apprentissage_fait_oui" name="apprentissage" value="oui" {{ $kinesitherapies && $kinesitherapies->apprentissage == 'oui' ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="apprentissage_fait_oui">Oui</label>
                                                                </div>
                                                                  </div>
                                                               <div class="col-lg-6">
                                                               <div class="form-check custom-checkbox mb-3">
                                                               <input class="form-check-input" type="checkbox" id="apprentissage_fait_non" name="apprentissage" value="non" {{ $kinesitherapies && $kinesitherapies->apprentissage == 'non' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="apprentissage_fait_non">Non</label>
                                                                </div>
                                                                 </div>
                                                             </div>

                                                            </div>

														 </div>
														</div>
														</div>


																<script>
																	document.addEventListener('DOMContentLoaded', function () {
																	var kinesitherapieOuiCheckbox = document.getElementById('kinesitherapie_oui');
																	var nombreSeanceParSemaineInput = document.getElementById('nombre_seance_par_semaine_input');
																	var autoreeducationOuiCheckbox = document.getElementById('autoreeducation_oui');
																	var apprentissageFaitInput = document.getElementById('apprentissage_fait_input');

																	function toggleNombreSeanceParSemaine() {
																		if (kinesitherapieOuiCheckbox.checked) {
																			nombreSeanceParSemaineInput.style.display = 'block';
																		} else {
																			nombreSeanceParSemaineInput.style.display = 'none';
																		}
																	}

																	function toggleApprentissageFaitInput() {
																		if (autoreeducationOuiCheckbox.checked) {
																			apprentissageFaitInput.style.display = 'block';
																		} else {
																			apprentissageFaitInput.style.display = 'none';
																		}
																	}

																	// Appel initial pour définir l'état d'affichage correct au chargement de la page
																	toggleNombreSeanceParSemaine();
																	toggleApprentissageFaitInput();

																	// Ajouter des écouteurs d'événements pour les changements
																	kinesitherapieOuiCheckbox.addEventListener('change', toggleNombreSeanceParSemaine);
																	autoreeducationOuiCheckbox.addEventListener('change', toggleApprentissageFaitInput);
																});

																</script>
																</div>
																</div>

													<div class="tab-pane fade" id="profile5">
    <div class="pt-4">
        <div class="col-lg-12 mb-2">
            <div class="row">
                <!-- Champs "fouchou" -->
                <div class="col-lg-6 mb-2">
                    <label class="text-label">Injection toxine :</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-check custom-checkbox mb-3">
                                <input class="form-check-input" type="checkbox" id="injection_toxine_oui" name="injection_toxine" value="oui"  {{ $injections_toxines && $injections_toxines->injection_toxine == 'oui' ? 'checked' : '' }}>
                                <label class="form-check-label" for="injection_toxine_oui">Oui</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check custom-checkbox mb-3">
                                <input class="form-check-input" type="checkbox" id="injection_toxine_non" name="injection_toxine" value="non"  {{ $injections_toxines && $injections_toxines->injection_toxine == 'non' ? 'checked' : '' }}>
                                <label class="form-check-label" for="injection_toxine_non">Non</label>
                            </div>
                        </div>
                    </div>
                    <div id="injection_toxine_Date" style="display: none;">
                        <div class="form-group">
                            <label class="text-label">Date :</label>
                            <input type="date" class="form-control" id="date_injection" name="date_injection" value="{{ $injections_toxines ? $injections_toxines->date_injection : '' }}">
                        </div>
                    </div>
                    <div id="injection_toxine_type" style="display: none;">
					<div class="form-group">
						<label class="text-label">Type :</label>
						<!-- Ajout de l'attribut name pour identifier le champ lors de la soumission du formulaire -->
						<select class="form-control" name="type_toxine">
							<option value="dysport_500ui" {{ $injections_toxines && $injections_toxines->type_toxine == 'dysport_500ui' ? 'selected' : '' }}>Dysport 500UI</option>
							<option value="botox_100ui" {{ $injections_toxines && $injections_toxines->type_toxine == 'botox_100ui' ? 'selected' : '' }}>Botox 100UI</option>
						</select>
					</div>
				</div>

                </div>
                <!-- Champs "louta" -->
                <div class="col-lg-6 mb-2">
                    <div id="injection_toxine_Dose" style="display: none;">
                        <div class="form-group">
                            <label class="text-label">Dose totale injectée :</label>
                            <input type="text" class="form-control" id="dose_totale_injectee" name="dose_totale_injectee" value="{{ $injections_toxines ? $injections_toxines->dose_totale_injectee : '' }}">
                        </div>
                    </div>
                    <div id="injection_toxine_Muscle" style="display: none;">
                        <div class="form-group">
                            <label class="text-label">Dose par Muscle injecté :</label>
                            <input type="text" class="form-control" id="dose_par_muscle" name="dose_par_muscle" value="{{ $injections_toxines ? $injections_toxines->dose_par_muscle : '' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




															<script>
																document.addEventListener('DOMContentLoaded', function() {
																var injectionToxineOuiCheckbox = document.getElementById('injection_toxine_oui');
																var injectionToxineDateDiv = document.getElementById('injection_toxine_Date');
																var injectionToxineTypeDiv = document.getElementById('injection_toxine_type');
																var injectionToxineDoseDiv = document.getElementById('injection_toxine_Dose');
																var injectionToxineMuscleDiv = document.getElementById('injection_toxine_Muscle');

																function toggleInjectionDetails() {
																	if (injectionToxineOuiCheckbox.checked) {
																		injectionToxineDateDiv.style.display = 'block';
																		injectionToxineTypeDiv.style.display = 'block';
																		injectionToxineDoseDiv.style.display = 'block';
																		injectionToxineMuscleDiv.style.display = 'block';
																	} else {
																		injectionToxineDateDiv.style.display = 'none';
																		injectionToxineTypeDiv.style.display = 'none';
																		injectionToxineDoseDiv.style.display = 'none';
																		injectionToxineMuscleDiv.style.display = 'none';
																	}
																}

																// Appel initial pour définir l'état d'affichage correct au chargement de la page
																toggleInjectionDetails();

																// Ajouter un écouteur d'événement pour le changement de la case à cocher "Oui"
																injectionToxineOuiCheckbox.addEventListener('change', toggleInjectionDetails);
															});


															</script>
															<div class="tab-pane fade" id="contact5">
																<div class="pt-4">
																	<div class="col-lg-12 mb-2">
																		<div class="row">
																			<!-- Champs "fouchou" -->
																			<div class="col-lg-6 mb-2">
																				<label class="text-label">Corset siège</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="corset_siege_oui" name="corset_siege" value="oui" {{ $appareillages && $appareillages->corset_siege == 'oui' ? 'checked' : '' }}>
																							<label class="form-check-label" for="corset_siege_oui">Oui</label>
																						</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="corset_siege_non" name="corset_siege" value="non" {{ $appareillages && $appareillages->corset_siege == 'non' ? 'checked' : '' }}>
																							<label class="form-check-label" for="corset_siege_non">Non</label>
																						</div>
																					</div>
																				</div>
																				<label class="text-label">Verticalisateur :</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="consanguinite_oui" name="verticalisateur" value="oui" {{ $appareillages && $appareillages->verticalisateur == 'oui' ? 'checked' : '' }}>
																							<label class="form-check-label" for="verticalisateur_oui">Oui</label>
																						</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="verticalisateur_oui_non" name="verticalisateur" value="non" {{ $appareillages && $appareillages->verticalisateur == 'non' ? 'checked' : '' }}>
																							<label class="form-check-label" for="verticalisateur_non">Non</label>
																						</div>
																					</div>
																				</div>
																				<label class="text-label">ACP:</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="acp_oui" name="acp" value="oui" {{ $appareillages && $appareillages->acp == 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="acp_oui">Oui</label>
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="acp_non" name="acp" value="non" {{ $appareillages && $appareillages->acp == 'non' ? 'checked' : '' }}>
																						<label class="form-check-label" for="acp_non">Non</label>
																					</div>
																				</div>
																			</div>
																			<label class="text-label">FR :</label>
																			<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="fr_oui" name="fr" value="oui" {{ $appareillages && $appareillages->fr == 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="fr_oui">Oui</label>
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="fr_non" name="fr" value="non" {{ $appareillages && $appareillages->fr == 'non' ? 'checked' : '' }}>
																						<label class="form-check-label" for="fr_non">Non</label>
																					</div>
																				</div>
																			</div>
																				<label class="text-label">Déambulateur</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="deambulateur_oui" name="deambulateur" value="oui" {{ $appareillages && $appareillages->deambulateur == 'oui' ? 'checked' : '' }}>
																							<label class="form-check-label" for="deambulateur_oui">Oui</label>
																						</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="deambulateur_non" name="deambulateur" value="non" {{ $appareillages && $appareillages->deambulateur == 'non' ? 'checked' : '' }}>
																							<label class="form-check-label" for="deambulateur_non">Non</label>
																						</div>
																					</div>
																				</div>
																				<label class="text-label">Attelle Tamarak de marche :</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="attelle_tamarak_marche_oui" name="attelle_tamarak_marche" value="oui" {{ $appareillages && $appareillages->attelle_tamarak_marche == 'oui' ? 'checked' : '' }}>
																							<label class="form-check-label" for="attelle_tamarak_marche_oui">Oui</label>
																						</div>
																					</div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																							<input class="form-check-input" type="checkbox" id="attelle_tamarak_marche_non" name="attelle_tamarak_marche" value="non" {{ $appareillages && $appareillages->attelle_tamarak_marche == 'non' ? 'checked' : '' }}>
																							<label class="form-check-label" for="attelle_tamarak_marche_non">Non</label>
																						</div>
																					</div>
																				</div>
																			</div>
																		
																			<!-- Champs "louta" -->
																			<div class="col-lg-6 mb-2">
																				
																				<label class="text-label">Attelle anti talus :</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="attelle_anti_talus_oui" name="attelle_anti_talus" value="oui" {{ $appareillages && $appareillages->attelle_anti_talus == 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="attelle_anti_talus_oui">Oui</label>
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="attelle_anti_talus_non" name="attelle_anti_talus" value="non" {{ $appareillages && $appareillages->attelle_anti_talus == 'non' ? 'checked' : '' }}>
																						<label class="form-check-label" for="attelle_anti_talus_non">Non</label>
																					</div>
																				</div>
																			</div>
																			<label class="text-label">Corset garchoix :</label>
																			<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="corset_garchoix_oui" name="corset_garchoix" value="oui" {{ $appareillages && $appareillages->corset_garchoix == 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="corset_garchoix_oui">Oui</label>
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="corset_garchoix_non" name="corset_garchoix" value="non" {{ $appareillages && $appareillages->corset_garchoix == 'non' ? 'checked' : '' }}>
																						<label class="form-check-label" for="corset_garchoix_non">Non</label>
																					</div>
																				</div>
																			</div>
																			<label class="text-label">Orthèse de la main:</label>
																			<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
                                                                                            <input class="form-check-input" type="checkbox" id="orthese_main_oui" name="orthese_main" value="oui" {{ $appareillages && $appareillages->orthese_main == 'oui' ? 'checked' : '' }}>
                                                                                            <label class="form-check-label" for="orthese_main_oui">Oui</label>
                                                                                        </div>
                                                                                    </div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
                                                                                            <input class="form-check-input" type="checkbox" id="orthese_main_non" name="orthese_main" value="non" {{ $appareillages && $appareillages->orthese_main == 'non' ? 'checked' : '' }}>
                                                                                            <label class="form-check-label" for="orthese_main_non">Non</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

																			<label class="text-label">Orthèse plantaire :</label>
																			<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
                                                                                            <input class="form-check-input" type="checkbox" id="orthese_plantaire_oui" name="orthese_plantaire" value="oui" {{ $appareillages && $appareillages->orthese_plantaire == 'oui' ? 'checked' : '' }}>
                                                                                            <label class="form-check-label" for="orthese_plantaire_oui">Oui</label>
                                                                                        </div>
                                                                                    </div>
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
                                                                                            <input class="form-check-input" type="checkbox" id="orthese_plantaire_non" name="orthese_plantaire" value="non" {{ $appareillages && $appareillages->orthese_plantaire == 'non' ? 'checked' : '' }}>
                                                                                            <label class="form-check-label" for="orthese_plantaire_non">Non</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
																				<div class="row" id="type_orthese_plantaire_input" style="display: none;">
																						<div class="form-group">
																							<label class="text-label">Type :</label>
																							<textarea class="form-control" id="type_orthese_plantaire" name="type_orthese_plantaire">{{ $appareillages ? $appareillages->type_orthese_plantaire : '' }}</textarea>
																			
																					</div>
																				</div>
																				<label class="text-label">Chaussures :</label>
																			  <div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="chaussures_oui" name="chaussures" value="oui" {{ $appareillages && $appareillages->chaussures == 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="chaussures_oui">Oui</label>
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="chaussures_non" name="chaussures" value="non" {{ $appareillages && $appareillages->chaussures == 'non' ? 'checked' : '' }}>
																						<label class="form-check-label" for="chaussures_non">Non</label>
																					</div>
																					
																				</div>
																			</div>
																			<div class="row">
																				<label class="text-label">Remarques :</label>
																				<textarea name="remarque" class="form-control" rows="3" placeholder="remarque">{{ $appareillages ? $appareillages->remarque : '' }}</textarea>
																			</div>



																			</div>
																		</div>
																	</div>
																</div>
															</div>

                                                                        <script>
                                                                       document.addEventListener('DOMContentLoaded', function() {
																		var orthesePlantaireOuiCheckbox = document.getElementById('orthese_plantaire_oui');
																		var typeOrthesePlantaireInput = document.getElementById('type_orthese_plantaire_input');

																		orthesePlantaireOuiCheckbox.addEventListener('change', function() {
																			if (this.checked) {
																				typeOrthesePlantaireInput.style.display = 'block';
																			} else {
																				typeOrthesePlantaireInput.style.display = 'none';
																			}
																		});

																		// Au chargement de la page, vérifie l'état initial de la case à cocher
																		if (orthesePlantaireOuiCheckbox.checked) {
																			typeOrthesePlantaireInput.style.display = 'block';
																		} else {
																			typeOrthesePlantaireInput.style.display = 'none';
																		}
																	});

                                                                        </script>
                                                             <div class="tab-pane fade" id="message5">
																	<div class="pt-4">
																		<div class="col-lg-12 mb-2">
																				<div class="row">
																					<!-- Champs "fouchou" -->
																					<div class="col-lg-6 mb-2">
																						<label class="text-label">Plâtre :</label>
																						<div class="row">
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
																				                <input class="form-check-input" type="checkbox" id="platre" name="platre" value="oui" onchange="toggleTypePlatre()" {{ $prescriptions && $prescriptions->platre == 'oui' ? 'checked' : '' }}>
																				                <label class="form-check-label" for="platre_oui">Oui</label>
																			                    </div>
																		                      </div>
																			             <div class="col-lg-6">
																				               <div class="form-check custom-checkbox mb-3">
																				                  <input class="form-check-input" type="checkbox" id="platre" name="platre" value="non" onchange="toggleTypePlatre()" {{ $prescriptions && $prescriptions->platre == 'non' ? 'checked' : '' }}>
																				                  <label class="form-check-label" for="platre_non">Non</label>
																			                </div>
																		                </div>
																		           </div>
																				   <div id="type_platre_input" style="display:none;">
																					<div class="form-group">
																						<label class="text-label">Si oui : type</label>
																						<textarea class="form-control" id="type_platre" name="type_platre">{{ $prescriptions ? $prescriptions->type_platre : '' }}</textarea>
																					</div>
																				</div>
																				<script defer>  
																																							
																				document.addEventListener('DOMContentLoaded', function() {
																					var platreOuiCheckbox = document.getElementById('platre_oui'); // Utilisez le bon identifiant
																					var typePlatreInput = document.getElementById('type_platre_input');

																					platreOuiCheckbox.addEventListener('change', function() {
																						if (this.checked) {
																							typePlatreInput.style.display = 'block';
																						} else {
																							typePlatreInput.style.display = 'none';
																						}
																					});

																					// Au chargement de la page, vérifie l'état initial de la case à cocher
																					if (platreOuiCheckbox.checked) {
																						typePlatreInput.style.display = 'block';
																					} else {
																						typePlatreInput.style.display = 'none';
																					}
																				});
																			</script>

																			<label class="text-label">Ergothérapie :</label>
																			<div class="row">
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="ergotherapie_oui" name="ergotherapie" value="oui" {{ $prescriptions && $prescriptions->ergotherapie == 'oui' ? 'checked' : '' }}>
																						<label class="form-check-label" for="ergotherapie_oui">Oui</label>
																					</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																						<input class="form-check-input" type="checkbox" id="ergotherapie_non" name="ergotherapie" value="non" {{ $prescriptions && $prescriptions->ergotherapie == 'non' ? 'checked' : '' }}>
																						<label class="form-check-label" for="ergotherapie_non">Non</label>
																					</div>
																				</div>
																			</div>

																			
																				<div class="form-group" "id="depuis" style="display:none;">
																					<label for="depuis_quand">Depuis quand :</label>
																					<input type="date" class="form-control" id="depuis_quand" name="depuis_quand" value="{{ $prescriptions? $prescriptions->depuis_quand : '' }}">
																				</div>
																				<script  defer> 
																						document.addEventListener('DOMContentLoaded', function() {
																							var ergotherapieOuiCheckbox = document.getElementById('ergotherapie_oui');
																							var formulaireErgotherapie = document.getElementById('depuis');

																							ergotherapieOuiCheckbox.addEventListener('change', function() {
																								if (this.checked) {
																									formulaireErgotherapie.style.display = 'block';
																								} else {
																									formulaireErgotherapie.style.display = 'none';
																								}
																							});

																							// Au chargement de la page, vérifie l'état initial de la case à cocher
																							if (ergotherapieOuiCheckbox.checked) {
																								formulaireErgotherapie.style.display = 'block';
																							} else {
																								formulaireErgotherapie.style.display = 'none';
																							}
																						});

                                                                                             </script>

																			



																				<label class="text-label">Orthophonie :</label>
																				<div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="orthophonie_oui" name="orthophonie" value="oui" {{ $prescriptions && $prescriptions->orthophonie == 'oui' ? 'checked' : '' }}>
																					<label class="form-check-label" for="orthophonie_oui">Oui</label>
																				</div>
																				</div>
																				<div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																					<input class="form-check-input" type="checkbox" id="orthophonie_non" name="orthophonie" value="non" {{ $prescriptions && $prescriptions->orthophonie == 'non' ? 'checked' : '' }}>
																					<label class="form-check-label" for="orthophonie_non">Non</label>
																				</div>
																			</div>
																			</div>

																					</div>
																					<!-- Champs "louta" -->
																					<div class="col-lg-6 mb-2">
																						<label class="text-label">Neuropsychologique :</label>
																						<div class="row">
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
								                                                           <input class="form-check-input" type="checkbox" id="neuropsychologique_oui" name="neuropsychologique" value="oui" {{ $prescriptions && $prescriptions->neuropsychologique == 'oui' ? 'checked' : '' }}>
								                                                            <label class="form-check-label" for="neuropsychologique_oui">Oui</label>
						                                                                	</div>
																							</div>
																							<div class="col-lg-6">
																								<div class="form-check custom-checkbox mb-3">
								                                                           <input class="form-check-input" type="checkbox" id="neuropsychologique_non" name="neuropsychologique" value="non" {{ $prescriptions && $prescriptions->neuropsychologique == 'non' ? 'checked' : '' }}>
								                                                           <label class="form-check-label" for="neuropsychologique_non">Non</label>
							                                                            </div>
						                                                             </div>
					                                                              </div>
																				  <label class="text-label">Chirurgie :</label>
																				  <div class="row">
																					<div class="col-lg-6">
																						<div class="form-check custom-checkbox mb-3">
																					  <input class="form-check-input" type="checkbox" id="chirurgie_oui" name="chirurgie" value="oui" onchange="toggleDecisionChirurgie()" {{ $prescriptions && $prescriptions->chirurgie == 'oui' ? 'checked' : '' }}>
																					  <label class="form-check-label" for="chirurgie_oui">Oui</label>
																				  </div>
																				  </div>
																				  <div class="col-lg-6">
																					<div class="form-check custom-checkbox mb-3">
																					  <input class="form-check-input" type="checkbox" id="chirurgie_non" name="chirurgie" value="non" onchange="toggleDecisionChirurgie()" {{ $prescriptions && $prescriptions->chirurgie == 'non' ? 'checked' : '' }}>
																					  <label class="form-check-label" for="chirurgie_non">Non</label>
																				  </div>
																			  </div>
																		  </div>

																			<div class="form-group" id="decision_chirurgie_input" style="display: none;">
																				<label class="text-label">Décision chirurgicale :</label>
																				<textarea class="form-control" id="decision_chirurgie" name="decision_chirurgie">{{ $prescriptions? $prescriptions->decision_chirurgie : '' }}</textarea>
																			</div>

															          </div>
																	  <script>
   



 


       document.addEventListener('DOMContentLoaded', function() {
        var chirurgieOuiCheckbox = document.getElementById('chirurgie_oui');
        var decisionChirurgieInput = document.getElementById('decision_chirurgie_input');

        chirurgieOuiCheckbox.addEventListener('change', function() {
            if (this.checked) {
                decisionChirurgieInput.style.display = 'block';
            } else {
                decisionChirurgieInput.style.display = 'none';
            }
        });

        // Au chargement de la page, vérifie l'état initial de la case à cocher
        if (chirurgieOuiCheckbox.checked) {
            decisionChirurgieInput.style.display = 'block';
        } else {
            decisionChirurgieInput.style.display = 'none';
        }
    });


</script>

																</div>
															</div>
														</div>
													</div>
													</div>
													</div>
													</div>
													</div>








			                                       <div class="tab-pane fade " id="DefaultTab1-html" role="tabpanel" aria-labelledby="home-tab">
				                                 <div class="card-body p-0 code-area">

                                             </div>
                                          </div>
										</div>

									</div>
								</div>
							</div>

						</div>


					<div class="element-menu menu-sticky sticky-header">
						<div class="element-menu-inner" id="element-sidebar">
                            <h4 class="title mb-3">Bilan</h4>
                            <ul class="navbar-nav element-nav" id="menu-bar" style="color: #2BC155;">
								<li><a href="#default-tab" class="scroll">Interogatoire</a></li>
								<li><a href="#default-tab1" class="scroll">Enfant inférieur 2 ans</a></li>
								<li><a href="#default-tab2" class="scroll">Enfant supérieur 2 ans</a></li>
								<li><a href="#default-tab3" class="scroll">Bilan a tout Age</a></li>
								<li><a href="#default-tab4" class="scroll">Prise en charge</a></li>
							</ul>

                        </div>
                    </div>
				</div>
				<!--/element-area-->
            </div>
        </div>



           <div class="d-flex justify-content-center">

            <button type="submit" id="submitButton" class="btn btn-success mx-2">
                Sauvegarder
                <span class="btn-icon-end"><i class="fa fa-check"></i></span>
            </button>
					
					<a type="button" class="btn btn-secondary mx-2" href="{{ route('medecinImprimerBilan', $visite_id) }}">Imprimer <span class="btn-icon-end"><i class="fas fa-print"></i></span></a>


				</div>
	</form>
        <!--*********** Content body end*********!>
            Footer start
        ***********************************-->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#submitButton').click(function() {
                    // Soumettre le formulaire
                    $('#myForm').submit();
                });
            });
        </script>

	<script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>

	<!-- code-highlight -->
	<script src="./js/highlight.min.js"></script>
	<script>
		hljs.highlightAll();
		hljs.configure({ ignoreUnescapedHTML: true })

		document.addEventListener('DOMContentLoaded', (event) => {
			document.querySelectorAll('pre code').forEach((el) => {
				hljs.highlightElement(el);
			});
		});
	</script>


@include('footer')
