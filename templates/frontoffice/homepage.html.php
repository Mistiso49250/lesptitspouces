<?php ?>

<div class="homeHeader">
    <h2>Nouveautés</h2>
</div>


<?php foreach($data as $article): ?>
<div class="container">
    <section class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <a href="index.php?action=<?$article['id_article']?>">
                <img src="images/<?$article['image']?>" alt=""></a>
        </div>
    </section>

    <section class="row">
        <div class="col-lg-offset-3 col-lg-6">
        <h2>Besoin d'aide pour un cadeau ?</h2>
        <a href="index.php?action=aide"><img src="image/aideCadeau" alt="aide cadeau"></a>
        </div>
    </section>

    <section class="row">
        <div class="col-lg-12">
            <p><em>Les P'tits Pouces</em> est le magasin de jouet en ligne de la boutique physique <em>Les P'tits Pouces</em> à Saumur.</p><br>
            <p>Notre boutique propose un large éventail de produits de grande qualité dés la naissance et pour les plus grands, constitué de marques renommées comme <a href="index.php?action=Moulin Roty">Moulin Roty</a>,avec les célèbres lampes à histoires , Djeco, Haba, Lilliputiens et beaucoup d'autres…</p><br>
            <p>Dans notre boutique de jouets, vous trouverez vos cadeaux de naissance, articles de puériculture, jeux d’éveil, décoration pour la chambre et produits personnalisables au prénom de votre enfant.</p><br>
            <p>Nous vous souhaitons une agréable visite sur note site, à la découverte de cadeaux de qualité à offrir aux <em>loupiots</em> et leurs heureux parents  !</p>
        </div>
    </section>
</div>
<?php endforeach; ?>