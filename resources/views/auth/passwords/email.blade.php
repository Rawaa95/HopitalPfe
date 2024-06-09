<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<!-- Title -->
	<title>Mot de passe oublié</title>

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
                                  <a href="index.html"><img src="/assets/css2/images/logo-full.png" width="230px" alt=""></a>
                                  </div>
                                    <h4 class="text-center mb-4">Mot de passe oublié</h4>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                        <div class="form-group">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">Adresse E-mail</label>

                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                    
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Envoyer la demande </button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="mb-0"><a class="text-primary" href="{{ route('login') }}">Retour</a></p>
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