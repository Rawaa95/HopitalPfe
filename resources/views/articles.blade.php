<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/img/favicon.png" rel="icon">
    <link href="/assets/css1/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/css1/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between"></div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center"  style="height:50px;">
            <a href="/" ><img src="/assets/css1/assets/img/logo.png"  width="80px"  alt=""></a>
            <!-- Navigation -->
            <nav id="navbar" class="navbar order-last order-lg-0">
            <ul style="display: flex; justify-content: center; margin: 0; padding: 0;margin-left:330px;">
                    <li ><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li ><a class="nav-link scrollto" href="#about">À Propos</a></li>
                    <li><a class="nav-link scrollto" href="#services">Fonctionnalités</a></li>
                    <li ><a class="nav-link scrollto" href="#departments">Article</a></li>
                    <li style="margin-right:99px;"><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <!-- Boutons de connexion/inscription -->
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="appointment-btn scrollto" ><span class="d-none d-md-inline">Tableau de bord</span></a>
                    @else
                        <a href="{{ route('login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Connexion</span></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="appointment-btn scrollto" ><span class="d-none d-md-inline">Inscription</span></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>

    <main id="main">
      <!-- Contenu principal de la page -->
      <div class="col-md-8 col-xl-6 middle-wrapper" style="margin: 0 auto; position: relative; bottom: -150px;">
          <div class="row">
              <div class="col-md-12 grid-margin">
              @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                  <!-- Contenu de la carte -->
                  <div class="card rounded">
                      <div class="card-header">
                          <div class="d-flex align-items-center justify-content-between">
                                
                              <div class="d-flex align-items-center">
                                
                                    <img class="comment-avatar avatar-small" src="/image/1717139231.jpg" alt="Avatar">
                                
                                
                                  <div class="ml-2">
                                      <p>{{ $post->user->nom }}</p>
                                      <p class="tx-11 text-muted">Il y a {{ $post->datePost->diffForHumans() }}</p>
                                  </div>
                              </div>
                              <div class="dropdown">
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <p class="mb-3 tx-14">{{ $post->contenu}}</p>
                          <img class="img-fluid" src="{{asset('/legendsposts/'.$post->legende)}}" alt="">
                      </div>
                      <div class="card-footer">
                          <div class="d-flex post-actions">
                              <a href="javascript:;" class="d-flex align-items-center text-muted mr-4 comment-btn">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                      <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                  </svg>
                                  <p class="d-none d-md-block ml-2">Comment</p>
                                  <div class="ml-2">
                                    <p  class="d-none d-md-block ml-2">Il y a {{ $post->comments->count() }} commentaire{{ $post->comments->count() !== 1 ? 's' : '' }}</p>
                                  </div>
                              </a>
                          </div>
                      </div>
                        <!-- Affichage des commentaires -->
                    <!-- Affichage des commentaires -->
                    <div id="commentContainer">
                        @if($post->comments->isNotEmpty())
                            @foreach($post->comments as $comment)
                                <div class="card-body comment">
                                    <div class="d-flex align-items-center">
                                        <div class="comment-content">
                                            <p class="comment-text">{{ $comment->commentaire }}</p>
                                            <p class="comment-metadata">Posté par {{ $comment->name }} - Il y a {{ $comment->date->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                            
                        @else
                            <p>Aucun commentaire disponible pour cet article.</p>
                        @endif
                    </div>
                    <!-- Bouton pour ajouter un commentaire -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <button type="button" class="comment-submit-btn " data-toggle="modal" data-target="#commentModal">
                                Commenter
                            </button>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('articlescommentpost')}}" method="post" role="form" class="php-email-form">
                    @csrf
                    <input type="hidden" name="post_id" value="{{$id}}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="commentModalLabel">Ajouter un commentaire</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nom utilisateur :</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nom utilisateur" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre Email :</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Commentaire :</label>
                            <textarea class="form-control" name="commentaire" rows="2" placeholder="Commentaire" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primaryy">Envoyer</button>
                        <button type="button" class="btn btn-secondaryy" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
  </main>
  
    <!-- Footer -->
    <footer id="footer" style="margin: 0 auto; position: relative; bottom: -200px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                          <h3>Medicio</h3>
                          <p>
                            Adresse : Hopital Sahloul Sousse , route Ceinture Cité Sahloul 4054 Sousse  4054 , Tunisie<br><br>
                            <strong>Tel:</strong>73 369 330<br>
                            <strong>Email:</strong> info@example.com<br>
                          </p>
                          <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
            
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#"> À Propos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Fonctionnalités</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Article</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Ordonnance</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Prise en charge</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion des dossiers médicale</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Consultation médicale</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">gestion des rendez-vous</a></li>
                        </ul>
                      </div>
                      
            




                    
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scripts JavaScript -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
