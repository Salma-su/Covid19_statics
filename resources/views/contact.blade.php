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
                        <a href="/" class="logo">COVID-19<em> Tracker</em></a>
                        <!-- ***** Logo End ***** -->
                         <!-- ***** Menu Start ***** -->
                       <ul class="nav">
                            <li><a href="/"  >Accueil</a></li>
                            <li><a href="/statistiques" >Statistiques</a></li>
                            <li><a href="/nouvelles">Nouvelles</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">À propos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/aproposdenous">À propos de nous</a>
                                    <a class="dropdown-item" href="/aproposducorona">À propos du coronavirus</a>
                                </div>
                            </li>
                            <li><a href="/contact" class="active" >Contact</a></li> 
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
    <title>COVID-19 | Contact</title>

<section class="section section-bg" id="call-to-action" style="background-image: url(/frontend/images/man-using-phone-dcm-40515.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>N'HÉSITEZ PAS À <em>NOUS CONTACTER</em></h2>
                        <p>Si vous pensez que l'une des sources d'information dans notre site est inexacte, merci de nous le signaler</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ***** Features Item Start ***** -->
     <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Informations de<em> contact</em></h2>
                        <img src="{{asset('/frontend/images/covid icon1.png')}}" alt="covid">
                        <p>Si vous pensez que l'une des sources d'information dans notre site est inexacte, merci de nous le signaler.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5>+212(0) 539 80 57 13</h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5>ensah@gmail.com</h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>BP 03, Ajdir Al-Hoceima </h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
    @include('inc.messages')

<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=al%20hoceima%20ensah+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                        <h2>Contactez-nous</h2>                        
                <br/>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
       {{Form::label('name', 'Nom')}}  
       {{Form::text('name', '',['class'=> 'form-control','placeholder'=> 'Entrez le nom'])}}  
   </div>
   <div class="form-group">
       {{Form::label('email', 'Adresse e-mail')}}  
       {{Form::text('email', '',['class'=> 'form-control','placeholder'=> 'Exemple@gmail.com'])}}  
   </div>
   <div class="form-group">
       {{Form::label('message', 'Message')}}  
       {{Form::textarea('message', '',['class'=> 'form-control','placeholder'=> 'Entrez le message'])}}  
   </div>
   <div >
       {{Form::submit('Envoyer',['class'=> 'btn btn-primary'])}}  
   </div>
{!! Form::close() !!}
                      </div>
                      </div> 
  <!-- ***** Footer Start ***** -->
  <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2021 Covid-19 - par une équipe de: <a href="https://www.ensah.ma/">Ensah.ma</a>
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