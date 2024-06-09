@include('header')
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="me-auto d-none d-lg-block">
						<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-rounded">+ Ajouter un Rendez vous</a>
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
												<th>Patient</th>
												<th>Date rendez-vous</th> 
                                                <th>Status</th>
												<th>Date d'affectation rendez vous</th>
 

												<th></th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($rdvs as $rdv)

											<tr>
												<td>
													<div class="checkbox text-end align-self-center">
														<div class="form-check custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
															<label class="form-check-label" for="customCheckBox1"></label>
														</div>
													</div>
												</td>
												<td>{{ $rdv->recepteur->username}}</td>
												<td>{{ $rdv->date }}</td>
                                                <td>@if($rdv->status == 'Validé')
                                                    <button type="button" class="btn btn-rounded btn-outline-success" >{{ $rdv->status }}</button>
													@elseif($rdv->status == 'Pas encore')
														<button type="button" class="btn btn-rounded btn-outline-warning">{{ $rdv->status }}</button>
													@elseif($rdv->status == 'Annulé')
														<button type="button" class="btn btn-rounded btn-outline-danger">{{ $rdv->status }}</button>
													@endif
                                                </td>
												<td>{{ $rdv->created_at}} </td>
                                                <td>
                                                    
													<span class="me-3">
													<a href="javascript:void(0);"

													data-id="{{ $rdv->id }}"
													data-date="{{ $rdv->date }}"
													data-patient-prenom="{{$rdv->dossier->patient->prenom}}"
													data-parent="{{ $rdv->recepteur->username }}"
													data-status="{{ $rdv->status }}"
													data-note="{{ $rdv->note }}"
													class="detail-button"
													data-bs-toggle="modal" 
													data-bs-target="#exampleModal5"   
													data-bs-toggle="modal" data-bs-target="#exampleModal5" >
													<i class="fa fa-eye fs-18 " aria-hidden="true">
                                                    </i></a>
													</span>	

													<span class="me-3">
													<a href="javascript:void(0);"
													class="edit-button"
													data-id="{{ $rdv->id }}"
													data-date="{{ $rdv->date }}"
													data-parent="{{ $rdv->recepteur->username }}"
													data-status="{{ $rdv->status }}"
													data-note="{{ $rdv->note }}"
  
													data-bs-toggle="modal" data-bs-target="#exampleModal2" >
													<i class="fa fa-pencil fs-18 " aria-hidden="true">
                                                    </i></a>
													</span>	

                                                    @if($rdv->status == "Pas encore")
                                                    <span class="me-3">
													<a href="javascript:void(0);" 
													data-id="{{ $rdv->id }}"
													data-date="{{ $rdv->date }}"
													data-parent="{{ $rdv->recepteur->username }}"
													data-patient-prenom="{{$rdv->dossier->patient->prenom}}"
													data-status="{{ $rdv->status }}"
													data-note="{{ $rdv->note }}"
													class="valid-button"
													data-bs-toggle="modal" 
													data-bs-target="#exampleModal3" >
													<i class="fa fa-plus fs-18 text-warning"  aria-hidden="true">
                                                    </i></a>
													</span>	
                                                    @endif
													@if($rdv->status == "Annulé")
                                                    <span class="me-3">
													<a  >
													<i class="fa fa-window-close fs-18 text-danger"  aria-hidden="true">
                                                    </i></a>
													</span>	
                                                    @endif

													@if($rdv->status == "Validé")
                                                    <span class="me-3">
													<a >
													<i class="fa fa-check fs-18 text-success"  aria-hidden="true">
                                                    </i></a>
													</span>	
                                                    @endif


													<span class="me-3">
													<a href="javascript:void(0);"  data-bs-toggle="modal"
													data-id="{{ $rdv->id }}"
													data-date="{{ $rdv->date }}"
													class="delete-button"
													data-bs-target="#exampleModal4" ><i class="fa fa-trash fs-18 text-danger"  
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


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" action="{{ route('secretaireADDrdvPost') }}" >
                @csrf
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ajouter un rendez-vous</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
					</button>
				  </div>
				  <div class="modal-body">
					<div class="row">

					<div class="col-xl-12">
                    		<div class="form-group">
                                <label for="prenom" class="col-form-label">prenom patient</label>
                                    <select name="dossier_id" class="form-control" required>
											<option value="">Sélectionner patient</option>
											@foreach ($dossiers as $dossier)
												<option value="{{ $dossier->id }}" {{ old('dossier_id') == $dossier->id ? 'selected' : '' }}>
												{{ $dossier->patient->prenom }}
											</option>
											@endforeach
										</select>

                                </select>
							</div>
						</div>
					
						<div class="col-xl-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" id="date"  required name="date" >
						</div>
                        <div class="col-xl-12">
                            <label for="status" class="form-label">Status</label>
                                <div class="mb-3">
                                    <label class="form-check-label" for="pas_encore">
                                        <input class="form-check-input" type="radio" id="pas_encore" name="status" value="Pas encore" required>
                                        Pas encore
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-check-label" for="fixe">
                                        <input class="form-check-input" type="radio" id="validé" name="status" value="Validé" required>
                                        Validé
                                    </label> 
                                </div>						
                        </div>

                        <div class="col-xl-12">
                    		<div class="form-group">
                                <label for="recepteur_id" class="col-form-label">Nom Parent</label>
                                    <select name="recepteur_id" class="form-control" required>
                                        <option >Sélécetionner le parent du patient </option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}" >
                                                {{$user->username}}
                                            </option>
                                        @endforeach
                                    </select>
                                </select>
							</div>
						</div>
                        <div class="col-xl-12">
                            <label class="form-label">Note</label>
                            <input type="text" class="form-control" id="note"  name="note" >
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


          
			<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" id="editrdvForm"  action="{{route('secretaireEDITrdvPost')}}" >
                @csrf
                <input type="hidden" name="id" value="{{$rdv->id ?? '' }}" />

				<div class="modal-content">
				  <div class="modal-header">
				  <h5 class="modal-title" id="exampleModal2Label">Modifier un rendez-vous</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
					</button>
				  </div>
				  <div class="modal-body">
				  	<div class="row">
				  		<div class="col-xl-12">  
						  <div class="form-group">
                                <label for="prenom" class="col-form-label">prenom patient</label>
                                    <select name="dossier_id" class="form-control" >
											<option value="">Sélectionner patient</option>
											@foreach ($dossiers as $dossier)
												<option value="{{ $dossier->id }}" {{ old('dossier_id') == $dossier->id ? 'selected' : '' }}>
												{{ $dossier->patient->prenom }}
											</option>
											@endforeach
										</select>

                                </select>
							</div>
						</div>
                        <div class="col-xl-12">
                        
                            <p>Nom de parent:</p>
							<input type="text" class="form-control" disabled id="username" value="{{$rdv->recepteur->username ?? ''}}" required name="username" >

						</div>
						<div class="col-xl-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" value="{{$rdv->date ?? ''}}" id="date"  required name="date" >
						</div>
						<div  class="col-xl-12" >
                            <label class="form-label">Status :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="Pas encore" >
                                <label class="form-check-label" for="status">
                                Pas encore
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="Validé" >
                                <label class="form-check-label" for="status">
								Validé
	                        </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="Annulé" >
                                <label class="form-check-label" for="status">
                                Annulé
                                </label>
                            </div>
                        </div>
                
                        <div class="col-xl-12">
                            <label class="form-label">Note</label>
                            <input type="text" class="form-control" id="note" value="{{$rdv->note ?? ''}}" required name="note" >
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


            <!--- valider -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" id="validrdvForm" action="{{route('secretaireVALIDrdvPost')}}" >
                @csrf
                <input type="hidden" name="id" value="{{$rdv->id ?? '' }}" />

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal3Label">Valider un rendez-vous</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
					</button>
				  </div>
				  <div class="modal-body">
				  <div class="row">
				  <div class="col-xl-12">
                            
                            <p>Nom de patient:</p>
							<input type="text" class="form-control" disabled id="prenom" value="{{$rdv->dossier->patient->prenom ?? ''}}" required name="prenom" >

						</div>
                        <div class="col-xl-12">
                        
                            <p>Nom de parent:</p>
							<input type="text" class="form-control" disabled id="username" value="{{$rdv->recepteur->username ?? ''}}" required name="username" >

						</div>
						<div class="col-xl-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" value="{{$rdv->date ?? ''}}" id="date"  required name="date" >
						</div>
						<div  class="col-xl-12" >
                            <label class="form-label">Status :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="Pas encore" >
                                <label class="form-check-label" for="status">
                                Pas encore
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="Validé" >
                                <label class="form-check-label" for="status">
								Validé
	                        </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="Annulé" >
                                <label class="form-check-label" for="status">
                                Annulé
                                </label>
                            </div>
                        </div>
                
                        <div class="col-xl-12">
                            <label class="form-label">Note</label>
                            <input type="text" class="form-control" id="note" value="{{$rdv->note ?? ''}}" required name="note" >
						</div>
                        
					</div>
          		  </div>
				  <div class="modal-footer">
					<button type="button"   class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button  type="submit" class="btn btn-primary">Valider</button>
				  </div>
				</div>
                </form>
			  </div>
			</div>



            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" id="deleterdvForm" action="{{route('secretaireDELETErdvPost')}}" > 
                @csrf
                <div class="modal-content"> 
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal4Label">Supprimer un rendez vous</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
					</button>
				  </div>
				  <div class="modal-body">
                  <input type="hidden" name="id" value="" />

					<div class="row">
						<div class="col-xl-12">
                        <h4 class="text-danger text-center">Vous êtes sur de vouloir supprimer cet rendez-vous :</h4>
						<input type="text" class="form-control" disabled id="date" value="{{ $dossier->date ?? '' }}" name="date" required>                             

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


               <!-- Détail -->       
			   <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" id="detailrdvForm"  >
                <input type="hidden" name="id" value="{{$rdv->id  ?? '' }}" />

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal5Label">Détail un rendez-vous</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
					</button>
				  </div>
				  <div class="modal-body">
				  <div class="row">
				  <div class="col-xl-12">
                        
                            <p>prénom de patient:</p>
							<input type="text" class="form-control" disabled id="prenom" value="{{$rdv->dossier->patient->prenom ?? ''}}" required name="prenom" >

						</div>
                        <div class="col-xl-12">
                        
                            <p>Nom de parent:</p>
							<input type="text" class="form-control" disabled id="username" value="{{$rdv->recepteur->username ?? ''}}" required name="username" >

						</div>
						<div class="col-xl-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" disabled value="{{$rdv->date ?? ''}}" id="date"  required name="date" >
						</div>
						<div  class="col-xl-12" >
                            <label class="form-label">Status : </label>
							<input  class="form-control" disabled value="{{$rdv->status ?? ''}}" id="status"  required name="status" >
                        </div>
                
                        <div class="col-xl-12">
                            <label class="form-label">Note</label>
                            <input type="text" class="form-control" disabled id="note" value="{{$rdv->note ?? ''}}" required name="note" >
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
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('editrdvForm');
            const dataAttributes = {
                id: this.getAttribute('data-id'), 
                date: this.getAttribute('data-date'),
                parent: this.getAttribute('data-parent'),
				status: this.getAttribute('data-status'),
				note: this.getAttribute('data-note'),
                                
            };

            form.querySelector('input[name="id"]').value = dataAttributes.id;

            form.querySelector('input[name="date"]').value = dataAttributes.date;
            form.querySelector('input[name="username"]').value = dataAttributes.parent;

			form.querySelector('input[name="status"][value="Pas encore"]').checked = dataAttributes.status === 'Pas encore';
            form.querySelector('input[name="status"][value="Validé"]').checked = dataAttributes.status === 'Validé';
            form.querySelector('input[name="status"][value="Annulé"]').checked = dataAttributes.status === 'Annulé';

            form.querySelector('input[name="note"]').value = dataAttributes.note;


        });
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.detail-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('detailrdvForm');
            const dataAttributes = {
                id: this.getAttribute('data-id'), 
                date: this.getAttribute('data-date'),
                parent: this.getAttribute('data-parent'),
				status: this.getAttribute('data-status'),
				prenom: this.getAttribute('data-patient-prenom'),
				note: this.getAttribute('data-note'),
                                
            };

            form.querySelector('input[name="id"]').value = dataAttributes.id;
            form.querySelector('input[name="date"]').value = dataAttributes.date;
            form.querySelector('input[name="username"]').value = dataAttributes.parent;
            form.querySelector('input[name="status"]').value = dataAttributes.status;
            form.querySelector('input[name="note"]').value = dataAttributes.note;
            form.querySelector('input[name="prenom"]').value = dataAttributes.prenom;


        });
    });
});

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.valid-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('validrdvForm');
            const dataAttributes = {
                id: this.getAttribute('data-id'), 
				parent: this.getAttribute('data-parent'),
                date: this.getAttribute('data-date'),
				status: this.getAttribute('data-status'),
				note: this.getAttribute('data-note'),
				prenom: this.getAttribute('data-patient-prenom'),

                                
            };

            form.querySelector('input[name="id"]').value = dataAttributes.id;

            form.querySelector('input[name="date"]').value = dataAttributes.date;
            form.querySelector('input[name="username"]').value = dataAttributes.parent;

			form.querySelector('input[name="status"][value="Pas encore"]').checked = dataAttributes.status === 'Pas encore';
            form.querySelector('input[name="status"][value="Validé"]').checked = dataAttributes.status === 'Validé';
            form.querySelector('input[name="status"][value="Annulé"]').checked = dataAttributes.status === 'Annulé';

            form.querySelector('input[name="note"]').value = dataAttributes.note;
			form.querySelector('input[name="prenom"]').value = dataAttributes.prenom;


        });
    });
});


</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.delete-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('deleterdvForm');
            const dataAttributes = {
                id: this.getAttribute('data-id'), 
                date: this.getAttribute('data-date'),
                                
            };

            form.querySelector('input[name="id"]').value = dataAttributes.id;
            form.querySelector('input[name="date"]').value = dataAttributes.date;


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