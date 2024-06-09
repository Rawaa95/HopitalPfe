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
                        <a href="{{route('adminverification')}}" class="btn btn-primary btn-rounded add-appointment" >Liste des utilisateurs</a>

                    </div>
				</div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Données perseonnelles</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form method="post"  action="{{route('adminverificationpost')}}" >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}" />
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Nom
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
														<input type="text" class="form-control" disabled id="nom" value="{{$user->nom ?? '' }}" required name="nom" >
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Prénom <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" disabled id="prenom" value="{{$user->prenom ?? '' }}" required name="prenom"  >
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Nom d'utilisateur
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" disabled id="username" value="{{$user->username ?? '' }}" required name="username"  >
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom04">Adresse E-mail <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" disabled id="email" value="{{$user->email ?? '' }}" required name="email"  >
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom04">Image <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <img src="{{ asset('image/' . $user->image) }}" alt="Image actuelle" class="img-thumbnail" style="max-width: 200px; height: 200px;">
														
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="col-lg-4 col-form-label" for="verifie">Vous voulez verifier cet utilisateur
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="default-select wide form-control" id="verifie" name="verifie" required>
                                                            <option value="{{$user->verifie}}">{{$user->verifie}}</option>
                                                            <option value="oui" style="color:red;">Oui</option>
                                                            <option value="non" style="color:yellew;">Non</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Sexe
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" {{ $user->sexe == 'homme' ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="homme">Homme</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sexe" id="femme" value="femme" {{ $user->sexe == 'femme' ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="femme">Femme</label>
                                                        </div>														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Numéro de téléphone
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" disabled id="num" value="{{$user->num ?? '' }}" required name="num"  >
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom07">Nom Hopital
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" disabled id="nomhopital" value="{{$user->hopital->nom ?? '' }}" required name="nomhopital">
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Specialite
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" disabled id="specialite" value="{{$user->specialite ?? '' }}" required name="specialire">
														
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom04">Carte professionnelle <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <img src="{{ asset('cart/' . $user->carte_professionnelle) }}"  alt="Image actuelle" class="img-thumbnail" style="max-width: 200px; height: 185px;">
														
                                                    </div>
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