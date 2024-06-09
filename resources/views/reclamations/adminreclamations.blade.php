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
												<th>Emetteur</th>
												<th>Feedback</th>
												<th>Date</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($reclamations as $reclamation)

											<tr>
												<td> 
													<div class="checkbox text-end align-self-center">
														<div class="form-check custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
															<label class="form-check-label" for="customCheckBox1"></label>
														</div>
													</div>
												</td>
												<td>{{ $reclamation->user->nom}}</td>
												<td>{{ $reclamation->feedback}}</td>
												<td>{{ $reclamation->date}}</td>
                                                <td>
                                                    <span class="me-3">
                                                    <a href="javascript:void(0);" data-id="{{ $reclamation->id }}"
													data-feedback="{{ $reclamation->feedback }}"
													data-date="{{ $reclamation->date }}"
													data-user-nom="{{ $reclamation->user->nom }}"
													class="detail-button" 
													data-bs-toggle="modal" 
													data-bs-target="#editModal2" 
													class="me-3">
													<i class="fa fa-eye fs-18"></i></a>
                                                    </i></a>
													</span>	

													<span class="me-3">
													<a href="javascript:void(0);"  data-bs-toggle="modal"
													data-id="{{$reclamation->id}}"
                                                    data-feedback="{{$reclamation->feedback}}"
													class="delete-button"
													data-bs-target="#exampleModal3" ><i class="fa fa-trash fs-18 text-danger"  
													aria-hidden="true">
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
                            <h5 class="modal-title" id="editModal2Label">Détail d'une réclamation</h5>
                			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
                        <div class="col-xl-12">
                            <label class="form-label">Reclamation de</label>
							<input type="text" class="form-control" disabled id="nom" value="{{ $reclamation->user->nom ?? '' }}" name="nom" required>

						</div>  
						<div class="col-xl-12">
                            <label class="form-label">Reclamation </label>
                            <input type="text" class="form-control" disabled id="feedback" value="{{ $reclamation->feedback ?? '' }}" name="feedback" required>
						</div>
						<div class="col-xl-12">
                            <label class="form-label">Date </label>
                            <input type="datetime-local" class="form-control" disabled id="date" value="{{ $reclamation->date ?? '' }}" name="date" required>
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


			<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post"  id="deleteVisiteForm" action="{{route('userDeletereclamationPost')}}" >
                @csrf
                <div class="modal-content"> 
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal3Label">Supprimer une réclamation</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
				  <input type="hidden" name="id" value=""  >

					<div class="row">
						<div class="col-xl-12">
                        <h4 class="text-danger text-center">Vous êtes sur de vouloir supprimer cette reclamation:  </h4> 
                            <input type="text" class="form-control" disabled id="feedback" value="{{ $reclamation->feedback ?? '' }}" name="feedback" required>
						</div>	
					</div>
			
				  </div>
				  <div class="modal-footer">
					<button type="button"   class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Supprimer</button>
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
            const reclamationId = this.getAttribute('data-id');
            const feedback = this.getAttribute('data-feedback');
            const user_nom = this.getAttribute('data-user-nom');
            const date = this.getAttribute('data-date');
            

            const form = document.getElementById('detailVisiteForm');
            form.querySelector('input[name="id"]').value = reclamationId;
            form.querySelector('input[name="feedback"]').value = feedback;
            form.querySelector('input[name="nom"]').value = user_nom;
            form.querySelector('input[name="date"]').value = date;
            
        });
    });
});


</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.delete-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {


			const id = this.getAttribute('data-id');
            const feedback = this.getAttribute('data-feedback');

            const form = document.getElementById('deleteVisiteForm');
            
            form.querySelector('input[name="id"]').value = id;
            form.querySelector('input[name="feedback"]').value = feedback;


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