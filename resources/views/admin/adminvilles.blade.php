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
						<a href="javascript:void(0);" class="btn btn-primary btn-rounded add-appointment" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter une ville</a>
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
												<th>Id</th>
												<th>Nom Ville</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($villes as $ville)
											<tr>
												<td>
													<div class="checkbox text-end align-self-center">
														<div class="form-check custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
															<label class="form-check-label" for="customCheckBox1"></label>
														</div>
													</div>
												</td>
												<td class="patient-info ps-0">
													<!-- <span>
														<img src="images/avatar/1.jpg" alt="">
													</span> -->
													<span class="text-nowrap ms-2">{{ $ville->id }}</span>
												</td>
												<td class="text-primary">{{ $ville->nom}}</td>
												
											
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

			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post"  action="{{route('adminADDvillePost')}}" >
                @csrf
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ajouter une ville</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
                            <label class="form-label">Nom ville</label>
                            <input type="text" class="form-control" id="nom"  required name="nom" placeholder="nom ville">
						</div>
					</div>
          		  </div>
				  <div class="modal-footer">
					<button type="button"   class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button  type="submit" class="btn btn-primary">Ajouter</button>
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