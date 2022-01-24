<!DOCTYPE html>
<html>

  <head> 

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">

  </head>
  @include('inc.loading')

  <body>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">COVID-19<em> Tracker</em></a>
                        <!-- ***** Logo End ***** -->
                         <!-- ***** Menu Start ***** -->
                       <ul class="nav">
                            <li><a href="/"  >Accueil</a></li>
                            <li><a href="/statistiques" >Statistiques</a></li>
                            <li><a href="/nouvelles">Nouvelles</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">À propos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="/aproposdenous">À propos de nous</a>
                                    <a class="dropdown-item" href="/aproposducorona">À propos du coronavirus</a>
                                </div>
                            </li>
                            <li><a href="/contact" >Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <title>COVID-19 | À propos de nous</title>

    <section class="section section-bg" id="schedule" style="background-image: url(/frontend/images/istock-1208116440.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>À PROPOS <em>DE NOUS </em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>COVID19.WEB est un projet communautaire au grand public.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Il s'agit d'un portail permettant au public de suivre l'évolution de l'actualité du Covid-19, tout en recueillant des données pour une analyse plus approfondie. Dans l'intérêt du public, afin de garantir la fiabilité des sources et de réduire au minimum les fausses alertes et informations, tous les contenus sont sélectionnés, filtrés et gérés avec soin par des bénévoles. Le Traitement Automatique du Langage Naturel (TALN) est utilisé pour analyser les tendances des contenus et identifier les sujets pertinents sur diverses sources d'information et plateformes de médias sociaux, avant d'être vérifiés par notre équipe.</p>

                        <p>Notre équipe utilise le modèle OSEMN pour collecter, nettoyer, explorer, modéliser et effectuer leurs analyses. Afin de la rendre plus accessible au public, l'information est présentée à l'aide de visualisations graphiques et de tableaux de bord. Grâce aux données obtenues, nous espérons construire très bientôt des modèles d'apprentissage automatique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ***** team Item Start ***** -->
<section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>DÉCOUVREZ<em> NOTRE ÉQUIPE</em></h2>
                        <img src="{{asset('/frontend/images/covid icon1.png')}}" alt="covid">
                        <p>Si vous pensez que l'une des sources d'information dans notre site est inexacte, merci de nous le signaler <a href="/contact">ici</a>.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('/frontend/images/features-first-icon.png')}}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Aâdila BENDAHOU</h4>
                                <p>aadila.bendahou@etu.uae.ac.ma</p>
                                <p><em>Une étudiante à l'Ecole Nationale des Sciences Appliquées d'Al-Hoceima!</em></p>

                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('/frontend/images/features-first-icon.png')}}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Bouchra HOUMAIDI</h4>
                                <p>Bouchra.houmaidi@etu.uae.ac.ma</p>
                                <p><em>Une étudiante à l'Ecole Nationale des Sciences Appliquées d'Al-Hoceima!</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('/frontend/images/features-first-icon.png')}}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Salma BENTOUHAMI</h4>
                                <p>Salma.bentouhami@etu.uae.ac.ma</p>
                                <p><em>Une étudiante à l'Ecole Nationale des Sciences Appliquées d'Al-Hoceima!</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            
                  
                <div class="col-lg-6 my-auto">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('/frontend/images/features-first-icon.png')}}" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Mohamed MIRI</h4>
                                <p>Mohamed.miri@etu.uae.ac.ma</p>
                                <p><em>Un étudiant à l'Ecole Nationale des Sciences Appliquées d'Al-Hoceima!</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('/frontend/images/features-first-icon.png')}}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Kamal ANIS</h4>
                                <p>Kamal.anis@etu.uae.ac.ma</p>
                                <p><em>Un étudiant à l'Ecole Nationale des Sciences Appliquées d'Al-Hoceima!</em></p>
                            </div>
                        </li>
                
                    </ul>
                </div>
            </div>
            
            <br>


        </div>
    </section>
    <!-- ***** team Item End ***** -->
    
<!-- ***** Footer Start ***** -->
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                    Copyright © 2021 Covid-19 - par une équipe de: <a href="https://www.ensah.ma/">Ensah.ma</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

      <!-- jQuery -->
      <script src="{{asset('/frontend/js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('/frontend/js/popper.js')}}"></script>
<script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('/frontend/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('/frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/frontend/js/imgfix.min.js')}}"></script> 
<script src="{{asset('/frontend/js/mixitup.js')}}"></script> 
<script src="{{asset('/frontend/js/accordions.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('/frontend/js/custom.js')}}"></script>
  </body>
</html>