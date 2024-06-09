@include('header')
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
					</ol>
				</div>
				<div class="form-head d-flex mb-3 mb-md-4 align-items-center">
					<div class="input-group search-area d-inline-flex me-2">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div> 
					</div>
					<div class="ms-auto">
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
                                                <th>Prenom</th>
												<th>Adresse E-mail</th>
												<th>Verifie</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
                                        @foreach($users as $user)
											<tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox text-end align-self-center">
                                                            <div class="form-check custom-checkbox ">
                                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                                <label class="form-check-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </div>
                                                        <img alt="" src="{{asset('/image/'.$user->image)}}" height="43" width="43" class="rounded-circle ms-4">
                                                    </div>
                                                </td>
												<td class="patient-info ps-0">
													<!-- <span>
														<img src="images/avatar/1.jpg" alt="">
													</span> -->
													<span class="text-nowrap ms-2">{{ $user->nom }}</span>
												</td>
												<td class="text-primary">{{ $user->prenom}}</td>
												<td class="text-primary">{{ $user->email}}</td>
												<td class="text-primary">
                                                    @if($user->verifie == 'oui')
                                                    <button type="button" class="btn btn-rounded btn-outline-success" >{{ $user->verifie }}</button>
													@elseif($user->verifie == 'non')
														<button type="button" class="btn btn-rounded btn-outline-warning">{{ $user->verifie }}</button>
													@endif
                                                </td>
												
												<td> 
													

													<span class="me-3">
													<a href="{{route('adminverificationuser', $user->id)}}"  >
													<i class="fa fa-eye fs-18 " aria-hidden="true">
                                                    </i></a>
													</span>	

                                                    <!-- delete -->
                                                    <span class="me-3">
													<a href="javascript:void(0);"  
													data-bs-toggle="modal" 
													data-id="{{ $user->id }}"
													data-nom="{{ $user->nom }}"
													class="delete-button"
													data-bs-target="#exampleModal3" >
													<i class="fa fa-trash fs-18 text-danger"  aria-hidden="true">
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
              <form method="post" id="deleteUserForm" action="{{route('admindeleteuser')}}" >
                    @csrf
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal3Label">Supprimer un utilisateur</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
                    <input type="hidden" name="id" value="" />

					<div class="row">
						<div class="col-xl-12">
                            <h4 class="text-danger text-center">Vous êtes sur de vouloir supprimer cet utilisateur :</h4>
							<input type="text" class="form-control" disabled id="nom" value="{{$user->nom ?? '' }}" required name="nom" >
 
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

        <!--**********************************
            Footer start    
        -->

@include('footer')


<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.delete-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.getAttribute('data-id');
            const nom = this.getAttribute('data-nom');

            const form = document.getElementById('deleteUserForm');
            form.querySelector('input[name="id"]').value = userId;
            form.querySelector('input[name="nom"]').value = nom;
        });
    });
});


</script>