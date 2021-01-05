<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\ArticleManager;
use Oc\View\View;

class ArticleController
{
    private $articleManager;
    private $view;

    public function __construct(ArticleManager $articleManager)
    {
        $this->view = new View('../templates/frontoffice/');
        $this->articleManager = $articleManager;
    }

    // affiche les informations d'un article
    public function article(int $idArticle) : void
    {
        $article = $this->articleManager->findArticle($idArticle);

        $this->view->render('frontoffice/article', [
            'article'=>$article
        ]);
    }
}
