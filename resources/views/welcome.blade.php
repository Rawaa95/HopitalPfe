<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hopital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/css1/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/css1/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css1/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
     
    </div>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(./assets/css1/assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Paralysie cérébrale : qu‘est-ce que c’est ?</h2>
            <p>La paralysie cérébrale est le premier handicap moteur de l’enfant.
              Celle-ci touche 17 personnes millions à travers le monde. 1 naissance sur 550.
              </p>
            <a href="#about" class="btn-get-started scrollto">En Savoir Plus</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(./assets/css1/assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>La paralysie cérébrale (PC)</h2>
            <p>La paralysie cérébrale (PC) est la principale cause de handicap moteur chez l’enfant.</p>
            <a href="#about" class="btn-get-started scrollto">En Savoir Plus</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(./assets/css1/assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Paralysie cérébrale</h2>
            <p> Apporter plus de mobilité dans la vie quotidienne.</p>
            <a href="#about" class="btn-get-started scrollto">En Savoir Plus</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa-solid fa-brain"></i></div>
              <h4 class="title"><a href="">Causes</a></h4>
              <p class="description">
                La paralysie cérébrale découle souvent de lésions cérébrales survenues pendant la grossesse, à la naissance ou dans les premières années de vie. Ces lésions peuvent être causées par divers facteurs tels que des infections maternelles, des complications pendant la grossesse ou l'accouchement, des blessures à la tête, des infections infantiles, des accidents vasculaires cérébraux précoces ou des anomalies génétiques.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa-solid fa-user-doctor"></i></div>
              <h4 class="title"><a href="">Diagnostic</a></h4>
              <p class="description">
                Le diagnostic de la paralysie cérébrale est généralement basé sur l'observation des symptômes et des antécédents médicaux de l'enfant. Des tests tels que l'imagerie par résonance magnétique (IRM) ou la tomodensitométrie (TDM) peuvent être utilisés pour évaluer les lésions cérébrales.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa-solid fa-bed-pulse"></i></div>
              <h4 class="title"><a href="">traitement</a></h4>
              <p class="description">Le traitement de la paralysie cérébrale vise à améliorer la qualité de vie de l'enfant malgré l'absence de remède. Les approches incluent la thérapie physique, occupationnelle, par le jeu et de la parole, l'usage de médicaments pour contrôler les symptômes, des dispositifs d'assistance comme les orthèses et les fauteuils roulants, et parfois des interventions chirurgicales.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fa-solid fa-hand-holding-medical"></i></div>
              <h4 class="title"><a href="">Soins et soutien </a></h4>
              <p class="description">
                Les enfants atteints de paralysie cérébrale nécessitent un suivi médical régulier et un soutien spécialisé pour répondre à leurs besoins physiques, émotionnels et éducatifs. Les familles peuvent bénéficier de soutien, de ressources et de réseaux pour faire face aux défis de la prise en charge de leur enfant.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>À la recherche d'informations sur la paralysie cérébrale infantile ?</h3>
          <p>Nous sommes là pour vous fournir le soutien nécessaire. Découvrez comment nous pouvons accompagner votre enfant et votre famille dans cette démarche.</p>
          <a class="cta-btn scrollto" href="#appointment">Découvrir davantage</a>
      </div>
      
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de nous</h2>
          <p> L'hôpital Sahloul joue un rôle crucial dans le système de santé tunisien, non seulement en fournissant des soins de haute qualité aux patients, mais aussi en formant les futures générations de professionnels de santé.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
              <img src="./assets/css1/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Découvrez notre engagement envers les soins, la prévention, l'enseignement et la recherche</h3>
              <p class="fst-italic">
                  Nous sommes passionnément investis dans la santé et le bien-être de nos patients. Explorez nos services et notre engagement envers l'excellence médicale.
              </p>
              <ul>
                  <li><i class="bi bi-check-circle"></i> Où nous sommes : Sousse, Tunisie, c'est chez nous.</li>
                  <li><i class="bi bi-check-circle"></i> Nos spécialités : De la cardiologie à la pédiatrie, nous couvrons une gamme complète de services médicaux.</li>
                  <li><i class="bi bi-check-circle"></i> Pour la recherche et l'enseignement : Nous sommes une communauté de partage des connaissances, ouverte aux étudiants et aux professionnels de la santé.</li>
              </ul>
              <p><ul>
                  Nous sommes déterminés à offrir un soutien complet aux enfants atteints de paralysie cérébrale. Parmi nos services :
                  <br>
                  <br>
                  <li><i class="bi bi-check-circle"> </i>La physiothérapie, pour renforcer les muscles et améliorer la mobilité.</li>
                  <br>
                  <li><i class="bi bi-check-circle"> </i>L'ergothérapie, pour aider les enfants à s'épanouir dans leurs activités quotidiennes.</li>
                  <br>
                  <li><i class="bi bi-check-circle"></i> L'orthophonie, pour surmonter les défis de la communication et de la déglutition.</li>
                </ul>
              </p>
          </div>
      </div>
      

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
    
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="fas fa-file-alt"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Interrogatoire</strong> pour recueillir les antécédents médicaux</p>
                  
                </div>
            </div>
    
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="fas fa-user-md"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Évaluation en fonction de l'âge</strong> pour une prise en charge adaptée</p>
                 
                </div>
            </div>
    
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="fas fa-hands"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Prise en charge</strong> adaptée aux besoins individuels</p>
                 
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                  <i class="fas fa-file-prescription"></i>
                  <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Ordonnance</strong> pour le suivi médical et les traitements</p>
                
              </div>
          </div>
  
    
        </div>
    
    </div>
    

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fonctionnalités</h2>
          <p>
            Cette plateforme propose une approche structurée visant à simplifier la gestion des dossiers médicaux complexes des enfants souffrant de paralysie cérébrale, tout en facilitant la tâche des professionnels de la santé. En outre, elle simplifie la gestion des prescriptions et des rendez-vous, fournissant ainsi une solution intégrée pour le suivi et la prise en charge des patients.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-solid fa-stethoscope"></i></div>
            <h4 class="title"><a href="">Suivi des Patients</a></h4>
            Centralisez les historiques et le suivi de tous vos patients en un seul endroit pour augmenter votre efficacité et la qualité des soins médicaux que vous fournissez.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Aide à la Prescription</a></h4>
            <p class="description"> 
              Améliorez la qualité des soins avec notre système d'aide à la prescription, réduisant ainsi les risques d'erreurs et optimisant les décisions thérapeutiques pour vos patients.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-calendar-days"></i></div>
            <h4 class="title"><a href="">Gestion des rendez-vous </a></h4>
            <p class="description">
              Centralisez et gérez facilement vos rendez-vous pour optimiser votre emploi du temps. Visualisez, planifiez et modifiez vos engagements avec convivialité et efficacité.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-solid fa-folder-open"></i></div>
            <h4 class="title"><a href="">Gestion dossier</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-envelope"></i></div>
            <h4 class="title"><a href="">Messagerie Sécurisée</a></h4>
            <p class="description">Échangez en toute sécurité avec d'autres professionnels de la santé grâce à notre messagerie sécurisée. Envoyez, recevez et organisez vos pièces jointes directement depuis le dossier de votre patient, simplifiant ainsi la communication et la gestion des informations médicales.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Page d'accueil conviviale  </a></h4>
            <p class="description">Sur notre plateforme, nous vous offrirons un espace dédié où vous pourrez trouver des informations cruciales sur la paralysie cérébrale, y compris les nouveaux traitements et les conseils de gestion.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Les troubles</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Prise en charge</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Les premiers signes</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Pediatrics</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Les troubles</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="./assets/css1/assets/img/departments-1.jpg" alt="" class="img-fluid">
                <p>Les enfants atteints de paralysie cérébrale peuvent présenter une variété de troubles en fonction de la localisation, de l'étendue et de la gravité des lésions cérébrales. Ces troubles incluent des déficiences motrices ainsi que parfois des difficultés associées telles que des troubles de la parole, de la vision, de l'orientation spatiale et du développement cognitif. Les conséquences de ces troubles sur la vie quotidienne varient également d'un individu à l'autre.</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Prise en charge</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="./assets/css1/assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>Une prise en charge précoce et adaptée de la paralysie cérébrale permet de réduire les troubles et d’envisager une évolution favorable de l’enfant dans sa vie de tous les jours.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Les premiers signes</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="./assets/css1/assets/img/departments-3.jpg" alt="" class="img-fluid">
                <p>Les premiers signes, souvent remarqués par les parents, incluent des retards ou des difficultés dans le développement de la motricité chez le bébé, tels que la tenue de la tête, l'assise, le rampement, ou le maintien debout. D'autres indicateurs peuvent également être observés, tels que des membres raides, une main constamment fermée, des difficultés de déglutition, ou une coordination gestuelle altérée.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="./assets/css1/assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="./assets/css1/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="./assets/css1/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="./assets/css1/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="./assets/css1/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="./assets/css1/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
      <section id="articles" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Articles sur la Paralysie Cérébrale</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
          <div class="row">
            @foreach($posts as $key => $post)
                @if($key > 0 && $key % 3 === 0)
                    </div><div class="row"> <!-- Ferme et ouvre une nouvelle ligne -->
                @endif
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch"> <!-- Modifiez les classes de colonnes pour 3 colonnes par ligne -->
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('/legendsposts/'.$post->legende)}}" height="400" width="400" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $post->user->nom }}</h4>
                            <p>{{ $post->contenu}}</p>
                            <a href="{{route('articles', $post->id)}}">Lire la suite &raquo;</a>
                            <div class="comments-icon">
                                <i class="bi bi-chat-left"></i>
                                <span>{{ $post->comments->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section><!-- End Articles Section -->
    
   
  

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-1.jpg"><img src="./assets/css1/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-2.jpg"><img src="./assets/css1/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-3.jpg"><img src="./assets/css1/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-4.jpg"><img src="./assets/css1/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-5.jpg"><img src="./assets/css1/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-6.jpg"><img src="./assets/css1/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-7.jpg"><img src="./assets/css1/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="./assets/css1/assets/img/gallery/gallery-8.jpg"><img src="./assets/css1/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Les questions les plus fréquentes ? Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Les questions les plus fréquentes ?</h2>
          <p>
            Les parents d'enfants atteints de paralysie cérébrale ont fréquemment des interrogations sur le pronostic, les traitements disponibles et les ressources de soutien. Leur préoccupation principale est souvent centrée sur l'amélioration de la qualité de vie de leur enfant et de leur famille tout en naviguant à travers les défis associés à cette condition.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Qu'est ce que la paralysie cérébrale ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                La paralysie cérébrale est la principale déficience motrice chez les enfants, touchant environ 17 millions de personnes dans le monde. Elle est causée par des lésions irréversibles du cerveau du fœtus ou du nourrisson, résultant de la destruction de cellules cérébrales en développement, pour lesquelles aucune réparation n'est actuellement possible.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Quelles sont les types paralysie cérébrale ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il existe trois principaux types de paralysie cérébrale :
          
                <br>Infirmité motrice cérébrale spastique
                <br>Paralysie cérébrale dyskinétique
                <br>Infirmité motrice cérébrale ataxique
                
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">La forme la plus courante? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                 La spasticité, observée dans 75 à 87% des cas. Cette condition se caractérise par une tension musculaire constante, généralement dans les membres comme les jambes ou les bras, ce qui rend les mouvements contrôlés difficiles. La persistance de la spasticité peut entraîner un raccourcissement des muscles, des tendons et des ligaments, limitant ainsi la mobilité des articulations telles que le genou et entraînant des positions incorrectes des membres.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Quelles sont les conséquences d'une paralysie cérébrale ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                 Les symptômes de la paralysie cérébrale peuvent varier en fonction des lésions cérébrales précoces. Typiquement, ils affectent la motricité et la mobilité, entraînant divers troubles moteurs. En plus des symptômes moteurs, d'autres symptômes comme la douleur ou une déficience intellectuelle peuvent également se manifester, selon les zones cérébrales touchées, bien que leur présence ne soit pas systématique. Les symptômes peuvent inclure la spasticité musculaire, l'athétose, l'ataxie, des difficultés de coordination, des problèmes de marche, de la rigidité musculaire, des tremblements, des problèmes de posture, des troubles de la parole, de la déglutition et des fonctions cognitives altérées.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">D'où provient la paralysie cérébrale ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Déterminer la cause exacte de la paralysie cérébrale chez un enfant est souvent complexe pour les professionnels de la santé. Souvent, la lésion cérébrale précoce qui conduit à la paralysie cérébrale est difficile à identifier. Les médecins considèrent également la possibilité de plusieurs facteurs contribuant au développement de la paralysie cérébrale, ce qui ajoute à la complexité du diagnostic. Il peut s'agir d'une combinaison de facteurs tels que des complications pendant la grossesse ou l'accouchement, des infections maternelles, des anomalies génétiques, des accidents vasculaires cérébraux précoces ou d'autres causes potentielles.
              </p>

            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Où les parents d'enfants atteints de paralysie cérébrale peuvent-ils trouver du soutien ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pour la prise en charge de la paralysie cérébrale chez les enfants, une équipe multidisciplinaire comprenant des pédiatres, des orthopédistes pédiatriques, des kinésithérapeutes, des ergothérapeutes, des orthophonistes et des spécialistes des centres de socio-pédiatrie est essentielle. Le soutien des parents et des familles, ainsi que le partage d'expériences avec d'autres parents concernés et les ressources fournies par des organisations d'entraide et des associations spécialisées, jouent un rôle crucial dans la gestion de la condition.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section  class="contact">
      <div class="container">

        <div class="section-title">
          <h2>sécurité</h2>
          <p>La confidentialité et la sécurité des données médicales est notre priorité. Chez notre plateforme, toutes les données sont sécurisées et cryptées pour garantir la confidentialité de vos patients.</p>
          <p>Notre plateforme collecte des informations personnelles, qui sont entièrement cryptées et accessibles uniquement par le praticien autorisé.</p>
      </div>
      
      
      <div>
        <img src="assets/img/protection.jpg" alt="Description de l'image" style="border:0; width: 100%; height: 350px;">
    </div>
    
        
        

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Address</h3>
                  <p>Route Ceinture Cité Sahloul 4054 Sousse </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Contactez nous</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div  id="contact" class="col-lg-6">
            <img src="./assets/css1/assets/img/localisation.jpg" alt="Description de l'image" style="width: 100%; height: auto;">
        </div>
        

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>La plateforme dédiée à</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion des dossiers médicaux</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Prise en charge</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion des rendez-vous</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Messagerie sécurisée</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Articles sur la paralysie cérébrale</a></li>
            </ul>
        </div>
        
         

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/css1/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./assets/css1/assets/vendor/aos/aos.js"></script>
  <script src="./assets/css1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/css1/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./assets/css1/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/css1/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/css1/assets/js/main.js"></script>

</body>

</html>