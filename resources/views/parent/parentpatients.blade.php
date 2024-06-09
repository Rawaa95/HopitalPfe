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
												<th>Nom</th>
												<th>Prénom</th>
												<th>Date de naissance</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($patients as $patient)

											<tr>
                                            <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox text-end align-self-center">
                                                            <div class="form-check custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                                <label class="form-check-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </div>
                                                        <img alt="" src="{{asset('/image/'.$patient->photo)}}" height="43" width="43" class="rounded-circle ms-4">
                                                    </div>
                                                </td>
												<td>{{$patient->nom}}</td>
												<td>{{$patient->prenom}}</td>
												<td>{{$patient->date_naissance}}</td>
                                                <td>
                                                    <span class="me-3">
                                                    <a href="javascript:void(0);" data-id="{{ $patient->id }}"
													data-nom="{{ $patient->nom }}"
													data-prenom="{{ $patient->prenom }}"
													data-patient-telephone="{{ $patient->num_telephone }}"
                                                    data-patient-adresse="{{ $patient->adresse }}"
													data-date="{{ $patient->date_naissance }}"
													class="detail-button" 
													data-bs-toggle="modal" 
													data-bs-target="#editModal2" 
													class="me-3">
													<i class="fa fa-eye fs-18"></i></a>
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
                <form id="detailPatientForm" method="post" >
                    @csrf
                    <input type="hidden" name="id" value="" /> <!-- Cette valeur sera remplie par JavaScript -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModal2Label">Détail d'un patient</h5>
                			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-6">
                            <label class="form-label">Nom du patient</label>
                            <input type="text" class="form-control" disabled id="nom" value="{{ $patient->nom ?? '' }}" name="nom" required>
						</div>
                                           
                        <div class="col-xl-6">
                            <label class="form-label">Prénom de patient</label>
                            <input type="text" class="form-control" disabled id="prenom" value="{{ $patient->prenom ?? '' }}" name="prenom" required>
						</div>
                        

                        <div class="col-xl-6">
                            <label class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" disabled id="date_naissance" value="{{ $patient->date_naissance ?? '' }}" required name="date_naissance">
						</div>
						<div class="col-xl-6">
                            <label class="form-label">Numero de telephone</label>
                            <input type="integer" class="form-control" disabled id="num_telephone" value="{{ $patient->num_telephone ?? '' }}"  required name="num_telephone" >
						</div>
                        <div class="col-xl-6">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-control" disabled id="adresse" value="{{ $patient->adresse ?? '' }}"  required name="adresse" placeholder="adresse">
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

        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@include('footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.detail-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const Id = this.getAttribute('data-id');
            const nom = this.getAttribute('data-nom');
            const prenom = this.getAttribute('data-prenom');
            const date = this.getAttribute('data-date'); 
			const patient_telephone = this.getAttribute('data-patient-telephone');
            const patient_adresse= this.getAttribute('data-patient-adresse');

            const form = document.getElementById('detailPatientForm');
            form.querySelector('input[name="id"]').value = Id;
            form.querySelector('input[name="nom"]').value = nom;
            form.querySelector('input[name="prenom"]').value = prenom;
            form.querySelector('input[name="date_naissance"]').value = date;
			form.querySelector('input[name="num_telephone"]').value = patient_telephone;
            form.querySelector('input[name="adresse"]').value = patient_adresse;
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