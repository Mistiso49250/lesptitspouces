<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\AdminManager;
use Oc\Model\ArticleManager;
use Oc\View\View;
use Oc\Tools\Session;


class ArticleController
{
    private $articleManager;
    private $session;
    private $view;

    public function __construct()
    {
        $this->view = new View('../templates/frontoffice/');
        $this->articleManager = new ArticleManager();
        $this->session = new session();
    }

    // affiche les informations d'un article
    public function article(int $idArticle) : void
    {
        $article = $this->articleManager->findArticle($idArticle);

        $this->view->render('article', [
            'article'=>$article,
            'flashMessages' => $this->session->getFlashes()
        ]);
    }
}
