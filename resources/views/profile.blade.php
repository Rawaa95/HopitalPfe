@include('header')

<div class="content-body">
            <div class="container-fluid">
								
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{$user->nom}}</h4>
											<p>{{$user->specialite}}</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{$user->email}}</h4>
											<p>Email</p>
										</div>
										<div class="dropdown ms-auto">
											<a href="javascript:void(0);" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-end">
												<li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-user-circle text-primary me-2"></i>View profile</a></li>
												<li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-users text-primary me-2"></i>Add to close friends</a> </li>
												<li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-plus text-primary me-2"></i>Add to group</a> </li>
												<li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-ban text-primary me-2"></i> Block</a></li>
											</ul>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show">Profile</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                            <div class="post-input">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Données Personelles</h4>
                                                        <form method="post" action="{{ route('profilePost') }}" enctype="multipart/form-data" id="profileForm">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="nom" class="form-label">Nom</label>
                                                                    <input type="text" class="form-control" id="nom" value="{{$user->nom}}" required name="nom" placeholder="Votre nom">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">Adresse email</label>
                                                                    <input type="email" class="form-control" id="email" value="{{$user->email}}" required name="email" placeholder="Votre adresse email">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <div><label class="form-label">Sexe</label></div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" {{ $user->sexe == 'homme' ? 'checked' : '' }} required>
                                                                        <label class="form-check-label" for="homme">Homme</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="sexe" id="femme" value="femme" {{ $user->sexe == 'femme' ? 'checked' : '' }} required>
                                                                        <label class="form-check-label" for="femme">Femme</label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="password" class="form-label">Mot de passe</label>
                                                                    <input type="password" class="form-control" id="password"  name="password" placeholder="Votre mot de passe">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="date_naissance" class="form-label">Date de naissance</label>
                                                                    <input type="date" class="form-control" id="date_naissance" value="{{$user->date_naissance}}" required name="date_naissance">
                                                                </div>
                                                                
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label"></label>
                                                                    <img src="{{ asset('image/' . $user->image) }}" alt="Image actuelle" class="img-thumbnail" style="max-width: 200px; height: 185px;">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Nouvelle photo</label>
                                                                    <input type="file" name="image" id="image">
                                                                    @error('image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                    @if(auth()->user()->role == 2 || auth()->user()->role== 3 || auth()->user()->role == 1) <!-- Médecin ou Secrétaire -->
                                                                    <div class="mb-3">
                                                                        <label for="specialite" class="form-label">Spécialité</label>
                                                                        <input type="text" class="form-control" name="specialite" value="{{$user->specialite}}" id="specialite" placeholder="Spécialité pour médecin" autocomplete="specialite">
                                                                        @error('specialite')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="prenom" class="form-label">Prénom</label>
                                                                        <input type="text" class="form-control" id="prenom" value="{{$user->prenom}}" required name="prenom" placeholder="Votre prénom">
                                                                    </div>
                                                                    
                                                                    <div class="mb-3">
                                                                        <label for="username" class="form-label">Nom d'utilisateur</label>
                                                                        <input type="text" class="form-control" id="username" value="{{ $user->username }}" required name="username" placeholder="Votre nom d'utilisateur">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="num" class="form-label">Numéro de téléphone</label>
                                                                        <input type="tel" class="form-control" id="num" value="{{$user->num}}" name="num" placeholder="Votre numéro de téléphone">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
                                                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmer votre mot de passe">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="ville_id" class="form-label">Ville</label>
                                                                    <div class="mb-3">
                                                                    <select class="form-control" id="ville_id" name="ville_id" placeholder="Selectionner une ville">
                                                                            @foreach ($villes as $ville)
                                                                                <option value="{{$ville->id}}" @if (Auth::user()->hopital && Auth::user()->hopital->ville && $ville->id == Auth::user()->hopital->ville->id) selected @endif>{{$ville->nom}}</option>
                                                                            @endforeach
                                                                    </select>
                                                                    </div>

                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="hopital_id" class="form-label">Hôpital où vous travaillez</label>
                                                                        <select name="hopital_id" class="form-control" id="hopital_id">
                                                                            @foreach ($hopitaux as $hopital )
                                                                                <option value="{{$hopital->id}}"  @if ($hopital->id == $user->hopital_id) selected @endif>{{$hopital->nom}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    @if(auth()->user()->role == 2 || auth()->user()->role== 3 || auth()->user()->role == 1) <!-- Médecin ou Secrétaire -->
                                                                
                                                                    <div class="mb-3">
                                                                        <label for="cart_professionnelle" class="form-label"></label>
                                                                        <img src="{{ asset('cart/' . $user->carte_professionnelle) }}" alt="Image actuelle" class="img-thumbnail" style="max-width: 200px; height: 185px;">
                                                                    </div>
                                                                        <div class="mb-3">
                                                                        <label for="carte_professionnelle" class="form-label">Carte professionnelle</label>
                                                                        <input type="file" name="carte_professionnelle" id="carte_professionnelle">
                                                                        @error('carte_professionnelle')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Modifier</button>
                                                            <a class="btn btn-danger" href="{{route('home')}}">Annuler</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                            
                                        </div>
                                    </div>
									<!-- Modal -->
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        
@include('footer')

<script>
  $(document).ready(function () {
    $('#ville_id').change(function () {
        var selectedCity = $(this).val();
        $.ajax({
            url: '{{ route("getHopitauxVilleprofil") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                ville: selectedCity
            },
            success: function (response) {
                $('#hopital_id').empty();
                $.each(response, function (key, value) {
                    $('#hopital_id').append('<option value="' + value.id + '">' + value.nom + '</option>');
                });
            }
        });
    });
});


</script>

