@include('header')
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="me-auto d-none d-lg-block">
						<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-primary btn-rounded">+ Ajouter un article</a>
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
												<th >Nom</th>
												<th>Adresse E-mail</th>
												<th>Commentaire</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($commentaires as $commentaire)

											<tr> 
												<td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox text-end align-self-center">
                                                            <div class="form-check custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                                <label class="form-check-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
												<td >{{ $commentaire->name}}</td>
												<td>{{ $commentaire->email }}</td>
												<td>{{ $commentaire->commentaire }}</td>
                                                <td>
                                                    
													
                                                    <span class="me-3">
													<a href="javascript:void(0);"  data-bs-toggle="modal"
													data-id="{{ $commentaire->id }}"
													data-contenu="{{ $commentaire->commentaire }}"
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
 


		




			<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post"  id="deleteVisiteForm" action="{{route('adminDELETEcommentaires')}}" >
                @csrf
                <div class="modal-content"> 
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal3Label">Supprimer un commentaire</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
				  <input type="hidden" name="id" value=""  >

					<div class="row">
						<div class="col-xl-12">
                        <h4 class="text-danger text-center">Vous êtes sur de vouloir supprimer cette commentaire:  </h4> 
						<input type="text" class="form-control" disabled id="commentaire" value="{{ $commentaire->commentaire ?? '' }}" name="commentaire" required>                             

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
    const editButtons = document.querySelectorAll('.delete-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const postId = this.getAttribute('data-id');
            const commentaire = this.getAttribute('data-contenu');

            const form = document.getElementById('deleteVisiteForm');
            form.querySelector('input[name="id"]').value = postId;
            form.querySelector('input[name="commentaire"]').value = commentaire;
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