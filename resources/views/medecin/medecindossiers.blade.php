@include('header')
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row --> 
			<div class="container-fluid">
				
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="me-auto d-none d-lg-block">
					</div>
					
					<div class="input-group search-area ms-auto d-inline-flex me-3">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive">
                                @if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
								@endif
									<table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
										<thead>
											<tr>
												<th>
													<div class="checkbox text-end align-self-center">
														<div class="form-check custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="checkAll" required="">
															<label class="form-check-label" for="checkAll"></label>
														</div>
													</div>
												</th>
												<th>Num Dossieer</th>
                                                <th>Secretaire</th>
                                                <th>Nom et Prénom</th>
												<th>Date de création</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($dossiers as $dossier)

											<tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox text-end align-self-center">
                                                            <div class="form-check custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                                <label class="form-check-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </div>
                                                        <img alt="" src="{{asset('/image/'.$dossier->patient->photo)}}" height="43" width="43" class="rounded-circle ms-4">
                                                    </div>
                                                </td>
												<td>{{$dossier->num_dossier}} </td>
                                                <td>{{$dossier->secretaire->nom}} </td>
												<td>{{$dossier->patient->nom}} {{$dossier->patient->prenom}} </td>
												<td>{{$dossier->date_creation}}</td>
                                                <td>
                                                    <span class="me-3">
                                                    <a  href="javascript:void(0);"
                                                        class="detail-button"
                                                        data-id="{{ $dossier->id }}"
                                                        data-medecin-id="{{ $dossier->medecin_id }}"
                                                        data-medecin-nom="{{ $dossier->medecin->username }}"

                                                        data-patientID="{{ $dossier->patient_id }}"

                                                        data-patient-nom="{{ $dossier->patient->nom }}"
                                                        data-patient-sexe="{{ $dossier->patient->sexe }}"
                                                        data-patient-prenom="{{ $dossier->patient->prenom }}"
                                                        data-patient-date="{{ $dossier->patient->date_naissance }}"

                                                        data-patient-telephone="{{ $dossier->patient->num_telephone }}"
                                                        data-patient-adresse="{{ $dossier->patient->adresse }}"


                                                        data-num-dossier="{{ $dossier->num_dossier }}"
                                                        data-num-facultatif="{{ $dossier->num_facultatif }}"
                                                        data-couverture-sociale="{{ $dossier->couverture_sociale }}"
                                                        data-creation="{{ $dossier->date_creation }}"

                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal2"
                                                    >
                                                        <i class="fa fa-eye fs-18" aria-hidden="true"></i>
                                                    </a>
                                                    </span>

                                                    <span class="me-3">
                                                    <a  href="javascript:void(0);"
                                                        class="edit-button"
                                                        data-id="{{ $dossier->id }}"
                                                        data-medecin-id="{{ $dossier->medecin_id }}"
                                                        data-medecin-nom="{{ $dossier->medecin->username }}"

                                                        data-patientID="{{ $dossier->patient_id }}"
                                                        data-patient-sexe="{{ $dossier->patient->sexe }}"

                                                        data-patient-nom="{{ $dossier->patient->nom }}"
                                                        data-patient-prenom="{{ $dossier->patient->prenom }}"
                                                        data-patient-date="{{ $dossier->patient->date_naissance }}"

                                                        data-patient-telephone="{{ $dossier->patient->num_telephone }}"
                                                        data-patient-adresse="{{ $dossier->patient->adresse }}"


                                                        data-num-dossier="{{ $dossier->num_dossier }}"
                                                        data-num-facultatif="{{ $dossier->num_facultatif }}"
                                                        data-couverture-sociale="{{ $dossier->couverture_sociale }}"
                                                        data-description="{{ $dossier->description }}"

                                                        
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal"
                                                    >
                                                        <i class="fa fa-pencil fs-18" aria-hidden="true"></i>
                                                    </a>
                                                    </span>
                                                    

                                                    <span class="me-3">
													<a href="{{ route('medecinVisites', $dossier->id) }}" ><i class="fa fa-file-text fs-18 text-success"  aria-hidden="true">
                                                    </i></a>
													</span>	
													
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

            <div class="modal fade" id="editModal2" tabindex="-1" aria-labelledby="editModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="detailDossierForm" method="post" >
                @csrf
                <input type="hidden" name="id" value=""  >
				<input type="hidden" name="patient_id" value="{{ $dossier->patient_id ?? ''  }}">

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="editModal2Label">Détail d'un dossier</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-6">
                            <label class="form-label">Numero de dossier :</label>
                            <input type="text" class="form-control" disabled disabled id="num_dossier" value="{{ $dossier->num_dossier ?? '' }}" name="num_dossier" required>                            
						</div>
                        <div class="col-xl-6">
                            <label class="form-label">Numero de facultatif : </label>
                            <input type="text" class="form-control" disabled id="num_facultatif" value="{{ $dossier->num_facultatif ?? '' }}" name="num_facultatif" required>                            
						</div>

                        <div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Nom Patient : </label>
                            <input type="text" class="form-control" disabled id="nom" value="{{ $dossier->patient->nom ?? '' }}" name="nom" required>                            
						</div>
						<div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Prenom Patient : </label>
                            <input type="text" class="form-control" disabled id="prenom" value="{{ $dossier->patient->prenom ?? '' }}" name="prenom" required>                            
						</div>
						<div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Date de naissance : </label>
                            <input type="date" class="form-control"  disabled id="date_naissance" value="{{ $dossier->patient->date_naissance ?? '' }}" name="date_naissance" required>                            
						</div>
                        <div class="col-xl-6">
                            <label class="form-label">Numero de telephone</label>
                            <input type="integer" class="form-control" disabled id="num_telephone" value="{{ $dossier->patient->num_telephone ?? '' }}"  required name="num_telephone" >
						</div>
                        <div  class="col-xl-6" >
                            <label class="form-label">Sexe :</label>
                            <input type="integer" class="form-control" disabled id="sexe" value="{{ $dossier->patient->sexe ?? '' }}"  required name="sexe" >

                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-control" disabled id="adresse" value="{{ $dossier->patient->adresse ?? '' }}"  required name="adresse" placeholder="adresse">
						</div>
						<div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Nom Medecin : </label>
                            <input type="text" class="form-control" disabled id="username" disabled value="{{ $dossier->medecin->username ?? '' }}" name="username" required>                            
						</div>
                        <div  class="col-xl-6" >
                            <label class="form-label">Type de couverture :</label>
                            <input type="text" class="form-control" disabled id="couverture_sociale" value="{{ $dossier->couverture_sociale ?? '' }}" name="couverture_sociale" required>                            
                        </div>
                        <div  class="col-xl-6" >
                            <label class="form-label">Date de création :</label>
                            <input type="text" class="form-control" disabled id="date_creation" value="{{ $dossier->date_creation ?? '' }}" name="date_creation" required>                            
                        </div>

					</div>
          		  </div>
				  <div class="modal-footer">
					<button type="button"   class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				  </div>
				</div>
                </form>
			  </div>
			</div>
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="editDossierForm" method="post" action="{{ route('medecinEDITdossierPost') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value=""  >
				<input type="hidden" name="patient_id" value="{{ $dossier->patient_id ?? ''  }}">

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="editModalLabel">Modifier un dossier</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-6">
                            <label class="form-label">Numero de dossier :</label>
                            <input type="text" class="form-control" disabled id="num_dossier" value="{{ $dossier->num_dossier ?? '' }}" name="num_dossier" required>                            
						</div>
                        <div class="col-xl-6">
                            <label class="form-label">Numero de facultatif : </label>
                            <input type="text" class="form-control"  id="num_facultatif" value="{{ $dossier->num_facultatif ?? '' }}" name="num_facultatif" required>                            
						</div>

                        <div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Nom Patient : </label>
                            <input type="text" class="form-control"  id="nom" value="{{ $dossier->patient->nom ?? '' }}" name="nom" required>                            
						</div>
						<div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Prenom Patient : </label>
                            <input type="text" class="form-control"  id="prenom" value="{{ $dossier->patient->prenom ?? '' }}" name="prenom" required>                            
						</div>
						<div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Date de naissance : </label>
                            <input type="date" class="form-control"  id="date_naissance" value="{{ $dossier->patient->date_naissance ?? '' }}" name="date_naissance" required>                            
						</div>
                        <div class="col-xl-6">
                            <label class="form-label">Numero de telephone</label>
                            <input type="integer" class="form-control" id="num_telephone" value="{{ $dossier->patient->num_telephone ?? '' }}"  required name="num_telephone" >
						</div>
                        <div  class="col-xl-6" >
                            <label class="form-label">Sexe :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="sexe" name="sexe" value="femme" >
                                <label class="form-check-label" for="sexe">
                                Femme
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="sexe" name="sexe" value="homme" >
                                <label class="form-check-label" for="sexe">
                                Homme
                                </label>
                            </div>
                            
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="adresse" value="{{ $dossier->patient->adresse ?? '' }}"  required name="adresse" placeholder="adresse">
						</div>
						<div class="col-xl-6">
                            <label for="patient_id" class="col-form-label">Nom Medecin : </label>
                            <input type="text" class="form-control" disabled id="username" disabled value="{{ $dossier->medecin->username ?? '' }}" name="username" required>                            
						</div>
                        <div  class="col-xl-6" >
                            <label class="form-label">Type de couverture :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="couverture_sociale" name="couverture_sociale" value="CNAM" >
                                <label class="form-check-label" for="couverture_sociale">
                                CNAM
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="couverture_sociale" name="couverture_sociale" value="Indigent" >
                                <label class="form-check-label" for="couverture_sociale">
                                Indigent
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="couverture_sociale" name="couverture_sociale" value="Payant" >
                                <label class="form-check-label" for="couverture_sociale">
                                Payant
                                </label>
                            </div>
                        </div>
                    
                       

					</div>
          		  </div>
				  <div class="modal-footer">
					<button type="button"   class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button  type="submit" class="btn btn-primary">Modifier</button>
				  </div>
				</div>
                </form>
			  </div>
			</div>


        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@include('footer')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('editDossierForm');
            const dataAttributes = {
                id: this.getAttribute('data-id'),
                num_dossier: this.getAttribute('data-num-dossier'),
                medecin_nom: this.getAttribute('data-medecin-nom'),

                patient_nom: this.getAttribute('data-patient-nom'),
                patient_id: this.getAttribute('data-patientID'),
                patient_prenom: this.getAttribute('data-patient-prenom'),
                patient_date: this.getAttribute('data-patient-date'),
                num_facultatif: this.getAttribute('data-num-facultatif'),
                couverture_sociale: this.getAttribute('data-couverture-sociale'),
                patient_telephone: this.getAttribute('data-patient-telephone'),
                patient_adresse: this.getAttribute('data-patient-adresse'),
                patient_sexe: this.getAttribute('data-patient-sexe'),


            };

            form.querySelector('input[name="id"]').value = dataAttributes.id;

            form.querySelector('input[name="num_dossier"]').value = dataAttributes.num_dossier;
            form.querySelector('input[name="username"]').value = dataAttributes.medecin_nom; 

            form.querySelector('input[name="nom"]').value = dataAttributes.patient_nom; 
            form.querySelector('input[name="patient_id"]').value = dataAttributes.patient_id; 

            form.querySelector('input[name="prenom"]').value = dataAttributes.patient_prenom; 
            form.querySelector('input[name="date_naissance"]').value = dataAttributes.patient_date; 

            form.querySelector('input[name="num_facultatif"]').value = dataAttributes.num_facultatif;


            form.querySelector('input[name="sexe"][value="femme"]').checked = dataAttributes.patient_sexe === 'femme';
            form.querySelector('input[name="sexe"][value="homme"]').checked = dataAttributes.patient_sexe === 'homme';

            form.querySelector('input[name="couverture_sociale"][value="CNAM"]').checked = dataAttributes.couverture_sociale === 'CNAM';
            form.querySelector('input[name="couverture_sociale"][value="Indigent"]').checked = dataAttributes.couverture_sociale === 'Indigent';
            form.querySelector('input[name="couverture_sociale"][value="Payant"]').checked = dataAttributes.couverture_sociale === 'Payant';
            form.querySelector('input[name="num_telephone"]').value = dataAttributes.patient_telephone;
            form.querySelector('input[name="adresse"]').value = dataAttributes.patient_adresse;


        });
    });
});


</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.detail-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('detailDossierForm');
            const dataAttributes = {
                id: this.getAttribute('data-id'),
                num_dossier: this.getAttribute('data-num-dossier'),
                medecin_nom: this.getAttribute('data-medecin-nom'),

                patient_nom: this.getAttribute('data-patient-nom'),
                patient_id: this.getAttribute('data-patientID'),
                patient_prenom: this.getAttribute('data-patient-prenom'),
                patient_date: this.getAttribute('data-patient-date'),
                num_facultatif: this.getAttribute('data-num-facultatif'),
                couverture_sociale: this.getAttribute('data-couverture-sociale'),
                patient_telephone: this.getAttribute('data-patient-telephone'),
                patient_adresse: this.getAttribute('data-patient-adresse'),

                dossier_date_creation: this.getAttribute('data-creation'),

                patient_sexe: this.getAttribute('data-patient-sexe'),

            };

            form.querySelector('input[name="id"]').value = dataAttributes.id;
            form.querySelector('input[name="sexe"]').value = dataAttributes.patient_sexe;

            form.querySelector('input[name="num_dossier"]').value = dataAttributes.num_dossier;
            form.querySelector('input[name="username"]').value = dataAttributes.medecin_nom; 

            form.querySelector('input[name="nom"]').value = dataAttributes.patient_nom; 
            form.querySelector('input[name="patient_id"]').value = dataAttributes.patient_id; 

            form.querySelector('input[name="prenom"]').value = dataAttributes.patient_prenom; 
            form.querySelector('input[name="date_naissance"]').value = dataAttributes.patient_date; 

            form.querySelector('input[name="num_facultatif"]').value = dataAttributes.num_facultatif;

            form.querySelector('input[name="couverture_sociale"]').value = dataAttributes.couverture_sociale;

            form.querySelector('input[name="num_telephone"]').value = dataAttributes.patient_telephone;
            form.querySelector('input[name="adresse"]').value = dataAttributes.patient_adresse;

            form.querySelector('input[name="date_creation"]').value = dataAttributes.dossier_date_creation;



        });
    });
});


</script>



<!-- Datatable -->
<script src="/assets/css2/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/css2/js/custom.min.js"></script>
<script src="/assets/css2/js/deznav-init.js"></script>
<script src="/assets/css2/js/demo.js"></script>
<script src="/assets/css2/js/styleSwitcher.js"></script>

<script>
    (function($) {
        
        var table = $('#example5').DataTable({
            searching: false,
            paging:true,
            select: false,
            //info: false,         
            lengthChange:false 
            
        });
        $('#example tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();
            
        });
        
    })(jQuery);
</script>