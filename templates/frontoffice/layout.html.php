<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/front/style.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">

    <!-- meta facebook -->
    <meta property="og:title" content="Les P'tits Pouces" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lesptitspouces.com" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="magasin de jouet" />


    {% block head %} {% endblock %}
    {# <title>Les P'tits Pouces</title> #}
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  indigo darken-4">

        <!-- Navbar brand -->
        <a class="navbar-brand text-uppercase" href="#">Accueil</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                
                <!-- Cadeaux naissance -->
                <li class="nav-item dropdown mega-dropdown active">
                    <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadeaux naissance
                    <span class="sr-only">(current)</span>
                    </a>
                    <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink2">
                    <div class="row">
                        <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Pour bébé</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Doudous
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Peluches
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Albums photo
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Protèges carnet de santé
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Eveil</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Boites à musiques
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Dentition
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Hochets
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Mobiles
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Jeux & jouets -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink3"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jeux & jouets</a>
                    <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink3">
                    <div class="row">
                        <div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Pour bébé</h6>
                            <!--Featured image-->
                            <a href="#!" class="view overlay z-depth-1 p-0 mb-2">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/8-col/img%20(37).jpg"
                                class="img-fluid" alt="First sample image">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                            <a class="news-title font-weight-bold pl-0" href="#!">Lorem ipsum dolor sit</a>
                            <p class="font-small text-uppercase white-text">
                                <i class="fas fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 / <i
                                class="far fa-comments px-1" aria-hidden="true"></i> 20
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Pour bébé</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Chevals bascules
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Chariots de marche
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Jouets à tirer
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Jouets à suspendre
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Jouets de bain
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Porteurs
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xl-4 sub-menu mb-0">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Pour enfants(18 mois et
                                plus)</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Activités manuelles
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Constructions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Figurines
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Jeux éducatifs
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Jeux d'imitation
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Jeux de société
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Poupées
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Puzzles
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Plain air
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Mobiliers -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink4"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mobiliers & décorations</a>
                    <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink4">
                        
                        <div class="row">
                            <div class="col-md-6 col-xl-3 sub-menu mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold white-text">Décorations</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Boites à dent de lait
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Luminaires
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Petites tables et chaises
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Tableaux
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Tirelires
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Toises
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-item pl-0" href="#!">
                                            <i class="fas fa-caret-right pl-1 pr-3"></i>Veilleuses
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu mb-4 mb-xl-0">
                                <h6 class="sub-title text-uppercase font-weight-bold white-text">Related</h6>
                                <!--Featured image-->
                                <a href="#!" class="view overlay z-depth-1 p-0 mb-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(43).jpg"
                                    class="img-fluid" alt="First sample image">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                <a class="news-title font-weight-bold pl-0" href="#!">Lorem ipsum dolor sit</a>
                                <p class="font-small text-uppercase white-text">
                                    <i class="fas fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 / <i
                                    class="far fa-comments px-1" aria-hidden="true"></i> 20
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Accessoires & textiles -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessoires & textiles
                    </a>
                    <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                    aria-labelledby="navbarDropdownMenuLink2">
                    <div class="row">
                        <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Bagageries</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Cartables
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Sacs à dos
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Sac de voyage
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Valises
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                            <h6 class="sub-title text-uppercase font-weight-bold white-text">Textiles</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Cape de bain
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Kimono de bain
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item pl-0" href="#!">
                                        <i class="fas fa-caret-right pl-1 pr-3"></i>Serviettes de bain
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                
            </ul>
            <!-- comptes -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Se connecter</a>
                    </div>
                </li>
            </ul>
            <!-- Search form -->
            <form class="form-inline" role="search">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Recherche"
                    aria-label="Rechercher parmi le contenu du site" size="30" minlength="4" maxlength="12"
                    pattern="[A-Za-z\é\è\ê\-\¨]">
                </div>
            </form>
            <!-- role="search" => permettra aux lecteurs d'écran d'indiquer le formulaire comme étant un formulaire de recherche. -->
            <!-- aria-label => contenir un texte descriptif qui sera lu à voix haute par un lecteur d'écran. -->


        </div>
        <!-- Collapsible content -->

    </nav>
    <!-- Navbar -->

    <header class="slide">
        <div class="circLeleft">
            <a id="circLeleft"><i class="fas fa-angle-left"></i></a>
        </div>

        <img src="public/images/" alt="">
        <span id="timer"></span>
        <button id="play">Play</button>

        <div class="circleRight">
            <a id="circleRight"><i class="fas fa-angle-right"></i></a>
        </div>
    </header>

    <div class="siteContent">
        <div class="container">
            {% block content %}{% endblock %}
        </div>
    </div>
    <div class="siteCache" id="siteCache"></div>
    </div>
    </div>
</body>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Suivez nous sur les réseaux!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Les P'tits Pouces</h6>
         <!--Image-->
         <div class="view overlay z-depth-1-half">
          <img src="jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Nos rayons</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Cadeaux naissance</a>
        </p>
        <p>
          <a href="#!">jeux & jouets</a>
        </p>
        <p>
          <a href="#!">Mobiliers & décoration</a>
        </p>
        <p>
          <a href="#!">Accessoires & textiltes</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Nos marques</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Moulin Rotry</a>
        </p>
        <p>
          <a href="#!">L'oiseau bateau</a>
        </p>
        <p>
          <a href="#!">Djeco</a>
        </p>
        <p>
          <a href="#!">Lilliputien</a>
        </p>
        <p>
          <a href="#!">Janod</a>
        </p>
        <p>
          <a href="#!">Vilac</a>
        </p>
        <p>
          <a href="#!">Haba</a>
        </p>
        <p>
          <a href="#!">Corolle</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Nous contacter</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Les P'tits Pouces</p><br>
                                        <p>10 ruen Saint Jean</p><br>
                                        <p>49400 Saumur</p><br>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i>  09 81 43 44 20
        </p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://lesptitspouces.com/"> LesPtitsPouces.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>