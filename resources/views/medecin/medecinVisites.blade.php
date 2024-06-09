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
												<th>Titre de visite</th>
												<th>Type de visite</th>
												<th>Date</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($visites as $visite)

											<tr>
												<td>
													<div class="checkbox text-end align-self-center">
														<div class="form-check custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
															<label class="form-check-label" for="customCheckBox1"></label>
														</div>
													</div>
												</td>
												<td>{{ $visite->titre}}</td>
												<td>{{ $visite->type}}</td>
												<td>{{ $visite->date }}</td>
                                                <td>
                                                    <span class="me-3">
                                                    <a href="javascript:void(0);" data-id="{{ $visite->id }}"
													data-titre="{{ $visite->titre }}"
													data-type="{{ $visite->type }}"
													data-date="{{ $visite->date }}"
													class="detail-button" 
													data-bs-toggle="modal" 
													data-bs-target="#editModal2" 
													class="me-3">
													<i class="fa fa-eye fs-18"></i></a>
                                                    </i></a>
													</span>	
 
													

                                                    <span class="me-3">
													<a href="{{ route('medecinBilans', $visite->id) }}" ><i class="fa fa-stethoscope fs-18 text-success"  aria-hidden="true">
                                                    </i></a>
													</span>	

													<span class="me-3">
													<a href="{{ route('medecinOrdonnances', $dossier->id) }}" ><i class="fa fa-pencil-square fs-18 text-success" aria-hidden="true">
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
                <form id="detailVisiteForm" method="post" >
                    @csrf
                    <input type="hidden" name="id" value="" /> <!-- Cette valeur sera remplie par JavaScript -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModal2Label">Détail d'une visite</h5>
                			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-6">
                            <label class="form-label">Titre de la visite</label>
                            <input type="text" class="form-control" id="titre" value="{{ $visite->titre ?? '' }}" name="titre" required>
						</div>
                                           
                        <div class="col-xl-6">
                            <label class="form-label">Type de visite</label>
                            <input type="text" class="form-control" id="type" value="{{ $visite->type ?? '' }}" name="type" required>
						</div>

                        <div class="col-xl-6">
                            <label class="form-label">Date de visite</label>
                            <input type="datetime-local" class="form-control" id="date" value="{{ $visite->date ?? '' }}" required name="date">
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
            const visiteId = this.getAttribute('data-id');
            const titre = this.getAttribute('data-titre');
            const type = this.getAttribute('data-type');
            const date = this.getAttribute('data-date');

            const form = document.getElementById('detailVisiteForm');
            form.querySelector('input[name="id"]').value = visiteId;
            form.querySelector('input[name="titre"]').value = titre;
            form.querySelector('input[name="type"]').value = type;
            form.querySelector('input[name="date"]').value = date;
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