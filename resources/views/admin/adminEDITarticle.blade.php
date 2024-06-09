@include('header')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                </div>
                <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
					<div class="input-group search-area d-inline-flex me-2">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div> 
					</div>
					<div class="ms-auto">
                        <a href="{{route('adminarticles')}}" class="btn btn-primary btn-rounded add-appointment" >Liste des articles</a>

                    </div>
				</div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Modifier un article</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form method="post"  action="{{route('adminEDITarticlePost')}}" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$post->id}}" />
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Contenu
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
														<textarea type="text" class="form-control" id="contenu"  required name="contenu" >{{$post->contenu }} </textarea>
														
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom04">Légende <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <img src="{{ asset('legendsposts/' . $post->legende) }}" alt="légende actuelle" class="img-thumbnail" style="max-width: 200px; height: 200px;">	
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="legende" class="form-label">Nouvelle légende</label>
                                                    <input type="file" class="form-control" id="legende" name="legende" >
                                                    @error('legende')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="mb-6 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Valider</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@include('footer')