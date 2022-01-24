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
                                    <a class="dropdown-item" href="/aproposdenous">À propos de nous</a>
                                    <a class="dropdown-item active" href="/aproposducorona">À propos du coronavirus</a>
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
    <title>COVID-19 | À propos du coronavirus</title>

    <section class="section section-bg" id="call-to-action" style="background-image: url(/frontend/images/images.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>À propos du <em>coronavirus</em></h2>
                        <p>C'est quoi un coronavirus : Définition, temps d'incubation,types, mutation,transmission, symptômes,traitement, vaccin et prévention.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ***** Blog Start ***** -->
     <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <section class='tabs-content'>
              <article>
        

                <br>
                <h4>Définition : qu'est-ce qu'un coronavirus ?</h4>

                <p>Les coronavirus forment une famille de virus variés (Coronaviridae) qui peuvent infecter aussi bien l'homme que l'animal. Leur nom signifie "virus en couronne" et vient du fait qu'ils possèdent tous un aspect en forme de couronne lorsqu'ils sont observés au microscope. Les coronavirus ont été identifiés pour la première fois chez l'humain dans les années 1960. Il s'agit de virus causant des maladies émergentes, c'est-à-dire des infections nouvelles dues à des modifications ou à des mutations du virus. Les coronavirus humains causent principalement des infections respiratoires, allant du rhume sans gravité à des pneumopathies sévères parfois létales. 
                Ils peuvent aussi s'accompagner de troubles digestifs tels que des gastro-entérites.</p>
                
                <h4>Temps d'incubation:</h4>

                <p>Le temps d'incubation correspond à la durée entre l'exposition au virus et à la manifestation des premiers symptômes. Pour les coronavirus, il est évalué entre 3 et 5 jours dans la majorité des cas, mais peut durer dans des cas extrêmes de 12 et 14 jours.</p>
                
                <h4>Les types de coronavirus : </h4>

                <p>Il existe<b> quatre sous-groupes principaux de coronavirus</b>, appelés alpha, bêta, gamma et delta. Et <b>sept formes différentes </b> dont quatre communes (moins graves que les autres) :</br>
                <b>-229E</b>  (alpha coronavirus)</br>
                <b>-NL63</b>  (alpha coronavirus)</br>
                <b>-OC43</b>  (bêta-coronavirus)</br>
                <b>-HKU1</b>  (bêta-coronavirus)</br>
                 Et trois plus graves : </br>
                 <b>-SRAS-CoV</b>  (le bêta-coronavirus qui cause le Syndrome respiratoire aigu sévère, ou SRAS, identifié en Chine en 2002).</br>
                <b> -MERS-CoV</b>  (le coronavirus bêta qui provoque le syndrome respiratoire du Moyen-Orient, ou MERS découvert en 2012 en Arabie Saoudite).</br>
                <b> -Sars-SoV-2</b>  ou <b>Covid-19</b>  est pour la première fois identifié en Chine (Wuhan) en décembre 2019. Ce coronavirus a beaucoup de similitudes avec 
                celui du SRAS (origine animale, identique génétiquement à 80%, responsable d'infections pulmonaires) mais aussi des différences notables pour les scientifiques au niveau de sa contagion. Il est contagieux dès le début des symptômes voire parfois en l'absence de symptômes alors que le Sras l'était quelques jours après les premiers symptômes. Il existe aussi des formes bénignes et asymptomatiques du Covid-19 alors que le Sras n'entraînaient que des formes sévères.</p>
               
                <h4>Mutation du coronavirus</h4>

                <p>Le coronavirus est un virus à ARN possédant un taux de mutation élevé à l'instar de celui de la grippe ou du virus HIV. Les coronavirus sont présents dans de très nombreuses espèces animales et circulent assez facilement d'une espèce à l'autre ce qui peut entraîner la mort. Les coronavirus peuvent également infecter les hommes.</p>
                
                <h4>Transmission</h4>

                <p>Les coronavirus se transmettent d'homme à homme lors de contacts rapprochés (se toucher ou se serrer la main par exemple) et par voie aérienne en toussant ou en éternuant. Toucher un objet ou une surface avec le virus dessus, puis toucher la bouche, le nez ou les yeux avant de se laver les mains peut aussi transmettre le coronavirus. Enfin, plus rarement la contamination peut se faire par contact fécal.<br>

                <b>A noter : </b>les coronavirus survivent jusqu'à 3 heures sur des surfaces inertes sèches et jusqu'à 6 jours en milieu humide. Ainsi la transmission manuportée à partir de l'environnement est possible.</p>

                <h4>Symptômes et évolution</h4>

                <p>Les manifestations des coronavirus font leur apparition moins de 24 heures après l'infection. Le plus généralement, le virus entraîne des maladies respiratoires légères à modérées comme le rhume avec des symptômes tels que :<br>
-<b> mal de tête,</b><br>
- <b>toux,</b><br>
- <b>gorge irritée,</b><br>
-<b> fièvre,</b><br>
- <b> un sentiment général de malaise dans le cas du covid-19,</b><br>
-<b>  une perte de goût et d'odorat font partie des nouveaux symptômes évoqués.</b><br>
Plus gravement - comme on a pu le voir avec le nouveau coronavirus -  il peut provoquer des maladies respiratoires des voies inférieures comme la<b>  pneumonie</b> ou la <b> bronchite</b>, particulièrement chez les personnes atteintes d'une maladie cardio-pulmonaire, chez celles dont le système immunitaire est affaibli et les personnes âgées.</p>

                <h4>Traitement</h4>
                
            <p>Il n'existe aucun traitement spécifique pour les maladies provoquées par les coronavirus humains. Les traitements sont symptomatiques : prendre des médicaments contre la douleur et la fièvre, se reposer, ne pas sortir. </p>
            <h4>Vaccin</h4>
            <p>Dès le début de la pandémie de maladie à coronavirus (Covid-19), la recherche de vaccins potentiels contre le coronavirus SARS-CoV-2 a débuté dans plusieurs pays. Ainsi, le cofondateur de BioNTech a expliqué, le 20 novembre 2020, que son vaccin a été conçu en quelques heures dès janvier 20201. </p>

<p>Différentes approches sont explorées pour forcer l'organisme à développer une réponse immunitaire permettant d'éliminer le virus SARS-CoV-2 : l'utilisation de formes atténuées ou inactivées du coronavirus, de virus anodins modifiés génétiquement pour exprimer une protéine du coronavirus, de protéines du coronavirus, ou d'acides nucléiques insérés dans des cellules humaines pour y produire des protéines virales.</p>

<p>En janvier 2021, selon l'Organisation mondiale de la santé (OMS), il y aurait soixante vaccins contre le coronavirus SARS-CoV-2 autorisés ou en phase d'étude clinique, ainsi que 172 vaccins potentiels à l'étude.</p>

<p>La Russie, la Chine et Cuba sont les premières à injecter massivement un vaccin et à le commercialiser. Le vaccin russe Spoutnik V est le premier au monde à être homologué, son nom faisant référence au premier satellite envoyé dans l'espace. La Chine aurait déjà vacciné 350 000 personnes début octobre 2020.</p>


            <h4>Prévention</h4>
                <p>Pour réduire son risque d'infection par un coronavirus, il est conseillé de  :<br>
-se <b> laver les mains régulièrement</b> avec de l'eau et du savon pendant au moins 20 secondes (sans oublier les solutions hydro-alcooliques très pratiques quand on ne peut pas se laver les mains),<br>
-éviter de se toucher les yeux, le nez ou la bouche quand les mains ne sont pas lavées,<br>
-éviter les contacts avec des personnes malades,<br>
-porter un<b> masque.</b><br></p>
<div><img src="{{asset('/frontend/images/Close-up-of-woman-washing-her-hands-with-soap.jpg')}}" alt=""></div>

              </article>
            </section>

        </div>
    </section>
    <!-- ***** Blog End ***** -->

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