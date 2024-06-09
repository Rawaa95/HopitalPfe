<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	
	<!-- Title -->
	<title>Création du compte</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">

	<meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
	<meta name="description" content="Our HTML Admin Dashboard is built with a responsive design, ensuring seamless compatibility across different devices and screen sizes. The user-friendly interface makes navigation intuitive and straightforward for administrators.">

	<meta property="og:title" content="ERES - Hospital Admin Dashboard Bootstrap HTML Template">
	<meta property="og:description" content="Our HTML Admin Dashboard is built with a responsive design, ensuring seamless compatibility across different devices and screen sizes. The user-friendly interface makes navigation intuitive and straightforward for administrators.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="shortcut icon" type="/assets/css2/image/x-icon" href="images/favicon.png">
	
	<link href="/assets/css2/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/assets/css2/css/style.css" rel="stylesheet">

</head>
<body class="vh-100">
    
	<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-10">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                  <div class="text-center mb-3">
                                  <a href="index.html"><img src="/assets/css2/images/logo-full.png" width="130px" alt=""></a>
                                  </div>
                                    <h4 class="text-center mb-4">Créer votre compte</h4>
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                                    @csrf
                                      <div class="row">
                                        <!-- Champs de gauche -->
                                        <div class="col-md-6">
                                          <div class="mb-3">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" required autocomplete="nom" autofocus>
                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                          <div class="mb-3">
                                            <label for="prenom" class="form-label">Prénom</label>
                                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom" required autocomplete="prenom" autofocus>
                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                          <div class="mb-3">
                                            <label for="username" class="form-label">Nom d'utilisateur</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Votre username" required autocomplete="username" autofocus>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                          <div class="mb-3">
                                            <label for="email" class="form-label">Adresse E-mail</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                          <div class="mb-3">
                                            <label for="role"  class="form-label">Role</label>
                                            <div class="col-md-10">
                                                <select class="form-control"  name="role" id="roleSelect">
                                                    <option>Selectionner</option>
                                                    <option value="2">Médecin</option>
                                                    <option value="3">Secrétaire</option>
                                                    <option value="4">Parent</option>
                                                </select>
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                          </div>
                                          <div class="mb-3" id="specialiteField" style="display:none;">
                                            <label for="specialite" class="form-label">Spécialité</label>
                                            <input type="specialite" class="form-control" name="specialite" id="specialite" placeholder="Specialité pour medecin" autocomplete="specialite">
                                            @error('specialite')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3" id="carteProfessionnelleField" style="display:none;">
                                            <label for="carte_professionnelle" class="form-label">Carte professionnelle</label>
                                            <input type="file" class="form-control" name="carte_professionnelle" id="carte_professionnelle">
                                            @error('carte_professionnelle')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        </div>
                    
                                        <!-- Champs de droite -->
                                        <div class="col-md-6">
                                          <div class="mb-3">
                                            <label class="form-label">Sexe</label>
                                            <div class="d-flex justify-content-start">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" required>
                                                    <label class="form-check-label" for="homme">
                                                        Homme
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sexe" id="femme" value="femme" required>
                                                    <label class="form-check-label" for="femme">
                                                        Femme
                                                    </label>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="image" id="image" >
                                          </div>
                                          <div class="mb-3">
                                            <label for="num" class="form-label">Numéro de telepone</label>
                                            <input type="text" class="form-control" name="num" id="num" placeholder="50000000" required>
                                            @error('num')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        <div class="mb-3">
                                          <label for="date_naissance" class="form-label">Date de naissance</label>
                                          <input type="date" class="form-control" name="date_naissance" id="date_naissance" required >
                                          @error('date_naissance')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                        </div>
                                      
                                      <div class="mb-3">
                                      <label for="password" class="form-label">Mot de passe</label>
                                          <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Votre mot de passe" required autocomplete="new-password">
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>

                                        <div class="mb-3">
                                            <label for="password-confirm"  class="form-label">Confirmer le mot de passe</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" >
                                        </div>
                                      </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Créer votre compte</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="mb-0">J'ai déjà un compte ! <a class="text-primary" href="{{ route('login') }}">Se connecter</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="/assets/css2/vendor/global/global.min.js"></script>
	<script src="/assets/css2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/assets/css2/js/custom.min.js"></script>
	<script src="/assets/css2/js/deznav-init.js"></script>
	<script src="/assets/css2/js/demo.js"></script>
	<script src="/assets/css2/js/styleSwitcher.js"></script>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
        const roleSelect = document.getElementById('roleSelect');
        const specialiteField = document.getElementById('specialiteField');
        const carteProfessionnelleField = document.getElementById('carteProfessionnelleField'); // Ajouté

        roleSelect.addEventListener('change', function() {
            if (roleSelect.value === '2' || roleSelect.value === '3') { // Médecin ou Secrétaire
                specialiteField.style.display = 'block';
                carteProfessionnelleField.style.display = 'block'; // Afficher le champ
            } else {
                specialiteField.style.display = 'none';
                carteProfessionnelleField.style.display = 'none'; // Cacher le champ
            }
        });
    });
  </script>
</body>

</html>