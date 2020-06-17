<?php foreach($data as $article): ?>
<div id="marqueBanniere">
    <div class="banniere">
        <h2 class="marqueTitle"><?=$article['titre']?></h2>
    </div>
</div>

<div class="container">
    <section class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <a href="index.php?action=article&id<?$article['id_article']?>">
                <img src="images/<?$article['image']?>" alt="">
                <h3 class="chapitreTitle"><?=$article['titre']?></h3>
                <?=$article['contenu_article']?>
            </a>
        </div>
    </section>
    <?php endforeach; ?>