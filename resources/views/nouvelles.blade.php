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
                            <li><a href="/nouvelles" class="active">Nouvelles</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">À propos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/aproposdenous">À propos de nous</a>
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
    <title>COVID-19 | Dernières nouvelles</title>

<section class="section section-bg" id="call-to-action" style="background-image: url(/frontend/images/vaccin.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Les dernières <em>nouvelles</em></h2>
                        <p>Restez au courant. Vous pouvez consulter les prochaines informations officielles à propos de la COVID-19.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- ***** body ter Start ***** -->

  <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                      <article>
                      <img src="{{asset('/frontend/images/vaccin1.jpg')}}" alt="">
                    <h4>Plus de 200 millions de doses de vaccins contre le Covid-19 ont été administrées dans le monde.</h4>

                    <p><i class="fa fa-user"></i> Anis Kamal &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 20.02.2021 13:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  0 comments</p>

                    <p>Plus de 200 millions de doses de vaccins contre le Covid-19 ont été administrées dans le monde.

Ce chiffre est toutefois sous-estimé, car deux grands pays, la Chine et la Russie, n’ont pas communiqué de nouvelles données depuis une dizaine de jours....</p>
                    <div class="main-button">
                        <a href="https://www.ouest-france.fr/sante/vaccin/covid-19-plus-de-200-millions-de-doses-de-vaccins-ont-ete-administrees-dans-le-monde-7161766" target="_blank">Lire la suite</a>
                    </div>
                      </article>

                      <br>
                      <br>

                      <article>
                      <img src="{{asset('/frontend/images/vaccin2.jpg')}}" alt="">
                  <h4>La Russie enregistre un troisième vaccin contre le coronavirus.</h4>
                    <p><i class="fa fa-user"></i> Bouchra Houmaidi &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 20.02.2021 14:15 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>
                    <p>En Russie, un troisième vaccin contre le Covid-19 vient d’être enregistré, une étape avant les essais cliniques. Le Premier ministre russe, Mikhaïl Michoustine, a promis d’accélérer les cadences de production de ces différents vaccins. La Russie a enregistré son troisième vaccin contre ...</p>
                    <div class="main-button">
                        <a href="https://www.ouest-france.fr/europe/russie/covid-19-la-russie-enregistre-un-troisieme-vaccin-contre-le-coronavirus-7161685" target="_blank">Lire la suite</a>
                    </div>
                      </article>

                      <br>
                      <br>

                      <article>
                      <img src="{{asset('/frontend/images/vaccin3.jpg')}}" alt="">
                    <h4>Le Maroc acquiert le premier lot du vaccin contre le virus de la Covid-19</h4>

                    <p><i class="fa fa-user"></i> Aâdila Bendahou &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 25.01.2021 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  0 comments</p>

                    <p>Sous le Haut Patronage de Sa Majesté le Roi Mohammed VI, que Dieu L'assiste et la Haute sollicitude et la bienveillance humaine dont le Souverain ne cesse d'entourer l'ensemble des composantes du peuple marocain depuis l'apparition des premiers cas du coronavirus au Maroc...</p>
                    <div class="main-button">
                        <a href="https://www.sante.gov.ma/pages/actualites.aspx?IDActu=431" target="_blank">Lire la suite</a>
                    </div>
                      </article>
                    </section>
                </div>

                <div class="col-lg-4">
                    <h5 class="h5">CHERCHER</h5>
                    
                    <div class="contact-form">
                        <form id="search_form" name="gs" method="GET" action="#">
                          <input type="text" name="q" class="searchText" placeholder="tapez pour rechercher..." autocomplete="on">
                        </form>
                    </div>

                    <h5 class="h5">LES DERNIÈRES NOUVELLES</h5>

                    <ul>
                        <li>
                            <p><a href="https://www.ouest-france.fr/sante/vaccin/covid-19-plus-de-200-millions-de-doses-de-vaccins-ont-ete-administrees-dans-le-monde-7161766" target="_blank">Plus de 200 millions de doses de vaccins ont été administrées dans le monde.</a></p>
                            <small><i class="fa fa-user"></i> Anis Kamal &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 20.02.2021 13:10 </small>
                        </li>

                        <li><br></li>

                        <li>
                            <p><a href="https://www.ouest-france.fr/europe/russie/covid-19-la-russie-enregistre-un-troisieme-vaccin-contre-le-coronavirus-7161685" target="_blank">La Russie enregistre un troisième vaccin contre le coronavirus.</a></p>
                            <small><i class="fa fa-user"></i> Bouchra Houmaidi &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 20.02.2021 14:15 </small>
                        </li>

                        <li><br></li>

                        <li>
                          <p><a href="https://www.sante.gov.ma/pages/actualites.aspx?IDActu=431" target="_blank">Le Maroc acquiert le premier lot du vaccin contre le virus de la Covid-19.</a></p>

                          <small><i class="fa fa-user"></i> Aâdila Bendahou &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 25.01.2021 10:10</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** body Area End ***** -->


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