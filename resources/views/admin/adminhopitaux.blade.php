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
						<a href="javascript:void(0);" class="btn btn-primary btn-rounded add-appointment" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un hopital</a>
                        <a href="{{ route('adminvilles') }}" class="btn btn-primary btn-rounded add-appointment" >Liste des villes</a>

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
												<th>Ville</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
                                        @foreach($hopitaux as $hopital)
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
													<span class="text-nowrap ms-2">{{ $hopital->nom }}</span>
												</td>
												<td class="text-primary">{{ $hopital->ville->nom}}</td>
												
												<td>
													<span class="me-3">
													<a href="javascript:void(0);"  
													class="detail-button"
													data-id="{{ $hopital->id }}"
													data-nom="{{ $hopital->nom }}"
													data-ville-id="{{ $hopital->ville->nom }}"
													data-bs-toggle="modal" 
													data-bs-target="#exampleModal4">
													<i class="fa fa-eye fs-18" aria-hidden="true"></i>
													</a>
													</span>	

													<span class="me-3">
													<a href="javascript:void(0);"  
													class="edit-button"
													data-bs-toggle="modal" 
													data-id="{{ $hopital->id }}"
													data-nom="{{ $hopital->nom }}"
													data-ville-id="{{ $hopital->ville->nom }}"
													data-bs-target="#exampleModal2" >
													<i class="fa fa-pencil fs-18 " aria-hidden="true">
                                                    </i></a>
													</span>	

                                                    <span class="me-3">
													<a href="javascript:void(0);"  data-bs-toggle="modal" 
													data-id="{{ $hopital->id }}"
													data-nom="{{ $hopital->nom }}"
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

			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
                <form method="post"  action="{{route('adminADDhopitalPost')}}" >
                @csrf
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ajouter un hopital</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
                            <label class="form-label">Nom hopital</label>
                            <input type="text" class="form-control" id="nom"  required name="nom" placeholder="nom hopital">
						</div>

                        <div class="col-xl-12">
                    		<div class="form-group">
                                <label for="ville_id" class="col-form-label">Ville</label>
								<select class="form-control" id="ville_id" required name="ville_id">
                                    <option >Sélécetionner une ville </option>
                                    @foreach ($villes as $ville)
                                        <option value="{{$ville->id}}" >
                                            {{$ville->nom}}
                                        </option>
                                    @endforeach
                                </select>
							</div>
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

			<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form id="detailHopitalForm" method="post"  >
                @csrf
                <input type="hidden" name="id" value="{{$hopital->id ?? '' }}" />

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal4Label">Détail un hopital</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
                            <label class="form-label">Nom hopital </label>
                            <input type="text" class="form-control" disabled id="nom" value="{{$hopital->nom ?? '' }}" required name="nom" placeholder="nom hopital">
						</div>

                        <div class="col-xl-12">
                    		<div class="form-group">
                                <label for="ville_id" class="col-form-label">Ville </label>
								<input type="text" class="form-control" disabled id="ville_id" value="{{$hopital->ville->nom ?? '' }}" required name="ville_id" placeholder="nom hopital">
							</div>
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

            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form id="editHopitalForm" method="post"  action="{{route('adminEDIThopitalPost')}}" >
                @csrf
                <input type="hidden" name="id" value="" />

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal2Label">Editer un hopital</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
                            <label class="form-label">Nom hopital</label>
                            <input type="text" class="form-control" id="nom" value="{{$hopital->nom ?? '' }}" required name="nom" placeholder="nom hopital">
						</div>

                        <div class="col-xl-12">
                    		<div class="form-group">
                                <label for="ville_id" class="col-form-label">Ville Actuelle</label>
								<input type="text" class="form-control" disabled id="ville_id" value="{{$hopital->ville->nom ?? '' }}" required name="ville_id" placeholder="nom hopital">
                                <label for="ville_id" class="col-form-label">Choisir nouvelle ville</label>
								<select class="form-control" id="ville_id" required name="ville_id">
                                    <option >Sélécetionner une ville </option>
                                    @foreach ($villes as $ville)
                                    <option value="{{$ville->id }}">
                                        {{$ville->nom}}
                                    </option>
                                    @endforeach
                            	</select>
							 </div>
						</div>						
					</div>					
				  </div>
				  <div class="modal-footer">
					<button type="button"   class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Modifier</button>
				  </div>
				</div>
                </form>
			  </div>
			</div>



            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" id="deleteHopitalForm" action="{{route('adminDELETEhopitalPost')}}" >
                    @csrf
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal3Label">Supprimer un hopital</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
                    <input type="hidden" name="id" value="" />

					<div class="row">
						<div class="col-xl-12">
                            <h4 class="text-danger text-center">Vous êtes sur de vouloir supprimer cet hopital :</h4>
							<input type="text" class="form-control" disabled id="nom" value="{{$hopital->nom ?? '' }}" required name="nom" placeholder="nom hopital">
 
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
    const editButtons = document.querySelectorAll('.detail-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const hopitalId = this.getAttribute('data-id');
            const nom = this.getAttribute('data-nom');
            const villeId = this.getAttribute('data-ville-id'); 

            const form = document.getElementById('detailHopitalForm');
            form.querySelector('input[name="id"]').value = hopitalId;
            form.querySelector('input[name="nom"]').value = nom;
            form.querySelector('input[name="ville_id"]').value = villeId;
        });
    });
});


</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const hopitalId = this.getAttribute('data-id');
            const nom = this.getAttribute('data-nom');
            const villeId = this.getAttribute('data-ville-id'); 

            const form = document.getElementById('editHopitalForm');
            form.querySelector('input[name="id"]').value = hopitalId;
            form.querySelector('input[name="nom"]').value = nom;
            form.querySelector('input[name="ville_id"]').value = villeId;
        });
    });
});


</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.delete-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const hopitalId = this.getAttribute('data-id');
            const nom = this.getAttribute('data-nom');

            const form = document.getElementById('deleteHopitalForm');
            form.querySelector('input[name="id"]').value = hopitalId;
            form.querySelector('input[name="nom"]').value = nom;
        });
    });
});


</script>