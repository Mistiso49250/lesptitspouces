<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\View\View;
use Oc\Model\AdminManager;
use Oc\Model\ArticleManager;

class ArticleController
{
    private $articleManager;

    private $view;

    public function __construct()
    {
        $this->view = new View();
        $this->articleManager = new ArticleManager();
    }

    // affiche les informations d'un article
    public function article(int $idArticle) : void
    {
        $article = $this->articleManager->findArticle($idArticle);

        $this->view->render('article', [
            'article'=>$article
        ]);
    }

    // affiche les informations d'un nouvel article
    public function newArticle(int $idArticle) : void
    {
        $newArticle = $this->articleManager->findNewArticle($idArticle);

        $this->view->render('newArticle', [
            'article'=>$newArticle
        ]);
    }

}