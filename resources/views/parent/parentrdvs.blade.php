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
												<th>Secretaire</th>
												<th>Date</th> 
                                                <th>Status</th> 
												<th>Note</th>

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
												<td>{{ $rdv->emetteur->username}} </td>
												<td>{{ $rdv->date }}</td>
                                                <td>@if($rdv->status == 'Validé')
                                                    <button type="button" class="btn btn-rounded btn-outline-success" >{{ $rdv->status }}</button>
                                                        @elseif($rdv->status == 'Pas encore')
                                                            <button type="button" class="btn btn-rounded btn-outline-warning">{{ $rdv->status }}</button>
                                                        @elseif($rdv->status == 'Annulé')
                                                            <button type="button" class="btn btn-rounded btn-outline-danger">{{ $rdv->status }}</button>
                                                        @endif
                                                </td>
												<td>{{ $rdv->note}}</td>
                                                <td>
                                                    
													<span class="me-3">
													<a href="javascript:void(0);"

													data-id="{{ $rdv->id }}"
													data-date="{{ $rdv->date }}"
													data-parent="{{ $rdv->emetteur->username }}"
													data-status="{{ $rdv->status }}"
													data-note="{{ $rdv->note }}"
													class="detail-button"
													data-bs-toggle="modal" 
													data-bs-target="#exampleModal5"   
													data-bs-toggle="modal" data-bs-target="#exampleModal5" >
													<i class="fa fa-eye fs-18 " aria-hidden="true">
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


               <!-- Détail -->       
			   <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
              <form method="post" id="detailrdvForm"  >
                <input type="hidden" name="id" value="{{$rdv->id}}" />

				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModal5Label">Détail un rendez-vous</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>
				  </div>
				  <div class="modal-body">
				  <div class="row">
                        <div class="col-xl-6">
                        
                            <p><b><h6>Nom de secretaire:</h6></b></p>
							<input type="text" class="form-control" disabled id="username" value="{{$rdv->emetteur->username ?? ''}}" required name="username" >

						</div>
						<div class="col-xl-6">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" disabled value="{{$rdv->date ?? ''}}" id="date"  required name="date" >
						</div>
						<div  class="col-xl-6" >
                            <label class="form-label">Status : </label>
							<input  class="form-control" disabled value="{{$rdv->status ?? ''}}" id="status"  required name="status" >
                        </div>
                
                        <div class="col-xl-6">
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
    const editButtons = document.querySelectorAll('.detail-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('detailrdvForm');
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
            form.querySelector('input[name="status"]').value = dataAttributes.status;
            form.querySelector('input[name="note"]').value = dataAttributes.note;


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