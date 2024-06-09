<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<!-- Title -->
	<title>Se connecter</title>

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
	<link  href="/assets/css2/css/style.css" rel="stylesheet">

</head>
<body class="vh-100">
    
	<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                  <div class="text-center mb-3">
                                    <a href="index.html"><img src="/assets/css2/images/logo-full.png" width="200px" alt=""></a>
                                  </div> 
                                    <h4 class="text-center mb-4">Se connecter</h4>
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form a method="POST" action="{{ route('login') }}" >
                                      @csrf
                                        <div class="form-group">
                                            <label for="email" class="form-label">Adresse E-mail</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre adresse e-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror  
                                        </div>
                                          <label class="form-label">Mot de passe</label>
                                         <div class="mb-3 position-relative">
                                         <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Votre mot de passe" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between flex-wrap mt-4 mb-2">
                  
                                            <div class="form-group">
                                              @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Mot de passe oublié
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="mb-0">Nouveau? <a class="text-primary" href="{{ route('register') }}">Créer un compte</a></p>
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
    
</body>

</html>