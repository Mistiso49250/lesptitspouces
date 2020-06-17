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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- meta facebook -->
    <meta property="og:title" content="Les P'tits Pouces" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="magasin de jouet" />


    <title>Les P'tits Pouces</title>
</head>

<body>
    <div class="siteContainer">
        <div class="sitePusher">
            <section class="burger">
                <a href="#" class="burgerIcon" id="burgerIcon"></a>
                <ul class="menu">
                    <li><a href="index.php">Pour bébé</a>
                        <ul>
                            <li><a href="">Jouets premier age</li>
                            <li><a href="">Doudous</li>
                            <li><a href="">Peluches</li>
                            <li><a href="">Les musicaux</li>
                        </ul>
                    </li>
                    <li><a href="">Puzzles et jouets a empiler</a></li>
                    <li><a href="">jouer et apprendre</a></li>
                    <li><a href="">Jeux de société</a></li>
                    <li><a href="">Construction</a></li>
                    <li><a href="">Jeux d'imitation</a></li>
                    <li><a href="">Plain air</a></li>
                    <li><a href="">Décoration</a>
                        <ul>
                            <li><a href="">Décoration de chambre</a>
                                <ul>
                                    <li><a href="">Luminaires et veilleuses</a></li>
                                    <li><a href="">Tableaux</a></li>
                                    <li><a href="">Toises</a></li>
                                    <li><a href="">Mobiles</a></li>
                                    <li><a href="">Fauteuils</a></li>
                                </ul>
                            </li>
                            <li><a href="">Accessoire décoration</a>
                                <ul>
                                    <li><a href="">Boîte a dents de lait</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Par Age</a>
                        <ul>
                            <li><a href="">Naissance</a></li>
                            <li><a href="">1 - 3 ans</a></li>
                            <li><a href="">4 - 7 ans</a></li>
                            <li><a href="">8 ans et +</a></li>
                        </ul>
                    </li>
                    <li><a href="">Par marque</a>
                        <ul>
                            <li><a href="">Moulin Roty<< /a>/li>
                            <li><a href="">Lilliputiens</a></li>
                            <li><a href="">Janod</a></li>
                            <li><a href="">Haba</a></li>
                            <li><a href="">Djeco</a></li>
                            <li><a href="">Kaloo</a></li>
                            <li><a href="">Mimi Bergamote</a></li>
                            <li><a href="">Corolle</a></li>
                            <li><a href="">Vilac</a></li>
                        </ul>
                    </li>

                    <li><a href="index.php?action=admin">Admin</a></li>
                </ul>
            </section>

            <form role="search">
                <div>
                    <input type="search" id="maRecherche" name="q" placeholder="Rechercher sur le site…"
                        aria-label="Rechercher parmi le contenu du site" size="30" minlength="4" maxlength="12" pattern="[A-Za-z\é\è\ê\-\¨]">
                    <button>Rechercher</button>
                </div>
            </form>
            <!-- role="search" => permettra aux lecteurs d'écran d'indiquer le formulaire comme étant un formulaire de recherche. -->
            <!-- aria-label => contenir un texte descriptif qui sera lu à voix haute par un lecteur d'écran. -->
            
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
                    <?= $content ?>
                </div>
            </div>
            <div class="siteCache" id="siteCache"></div>
        </div>
    </div>
</body>

<footer>
    <div class="footer">
        <section class="row">
            <div class="col-md-3 col-lg-3">
                <div class="titleFooter">A propos des P'tits Pouces</div>
                <ul>
                    <li>
                        <a href="http://lienDuSite" title="Notre boutique de jouets">Notre boutique</a>
                    </li>
                    <li>
                        <a href="mentions" title="mentions legale">Mentions Légales</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="titleFooter">Nos rayons</div>
                <ul>
                    <li>
                        <a href="http://de la page" title="pour bebe">Pour bébé</a>
                    </li>
                    <li>
                        <a href="http://de la page" title="apprendre">Apprendre</a>
                    </li>
                    <li>
                        <a href="http://de la page" title="jeux de societe">Jeux de société</a>
                    </li>
                    <li>
                        <a href="http://de la page" title="construction">Construction</a>
                    </li>
                    <li>
                        <a href="http://de la page" title="imitation">Imitation</a>
                    </li>
                    <li>
                        <a href="http://de la page" title="plain aire">Plain air</a>
                    </li>
                    <li>
                        <a href="http://de la page" title="decoration">Décoration</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="titleFooter">Nos Marques</div>
                <ul>
                    <li>
                        <a href="moulin Roty" title="moulin Roty">Moulin Roty</a>
                    </li>
                    <li>
                        <a href="lilliputiens" title="lilliputiens">Lilliputiens</a>
                    </li>
                    <li>
                        <a href="janod" title="janod">Janod</a>
                    </li>
                    <li>
                        <a href="haba" title="haba">Haba</a>
                    </li>
                    <li>
                        <a href="djeco" title="djeco">Djeco</a>
                    </li>
                    <li>
                        <a href="kaloo" title="kaloo">Kaloo</a>
                    </li>
                    <li>
                        <a href="mimi Bergamote" title="mimi Bergamote">Mimi Bergamote</a>
                    </li>
                    <li>
                        <a href="corolle" title="corolle">Corolle</a>
                    </li>
                    <li>
                        <a href="vilac" title="vilac">Vilac</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="titleFooter">Nos services</div>
                <ul>
                    <li>
                        <a href="carte cadeaux" title="carte cadeaux">Carte cadeaux</a>
                    </li>
                    <li>
                        <a href="retrait en magasin" title="retrait en magasin">Retrait en magasin</a>
                    </li>
                    <li>
                        <a href="livraison" title="livraison">Livraison</a>
                        ,
                        <a href="paiement" title="paiement">paiement</a>
                        ,
                        <a href="retours" title="retours">retours</a>
                    </li>
                    <li>
                        <a href="cgv" title="conditions générales de vente">Conditions générales de vente</a>
                    </li>
                    <li>
                        <a href="collectivite" title="collectivite">Collectivités</a>
                    </li>
                    <li>
                        <a href="paiement securise" title="paeiment securise">Paiement sécurisé</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="titleFooter">Suivez nous !</div>

                <p><a href="https://lien vers page facebook" target="_blank"><i class="fab fa-facebook-square fa-2x"
                            aria-hidden="true"></i></a></p>
                <p><a href="https//liens vers pinterest" target="_blank"><i class="fab fa-pinterest fa-2x"
                            aria-hidden="true"></i></a></p>
                <p><a href="https//liens vers instagram" target="_blank"><i class="fab fa-instagram fa-2x"
                            aria-hidden="true"></i></a></p>
            </div>
            <div class="col-sm-4">
                <div class="titleFooter">Nous contacter</div>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> Nous <a href="mailto:adresse du site">envoyer
                        un message</a></p><br>
                <p><i class="fa fa-phone" aria-hidden="true"></i> numero de la boutique</p><br>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> adresse de la boutique</p>
            </div>
            <div class="col-sm-5">
                <img src="public/images/boutique.jpg" alt="photo boutique">
            </div>
        </section>
    </div>
</footer>

</html>