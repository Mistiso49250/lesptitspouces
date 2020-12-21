<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\AdminManager;
use Oc\Model\ArticleManager;
use Oc\Tools\Session;
use Oc\View\View;

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

        $this->view->render('frontoffice/article', [
            'article'=>$article,
            'flashMessages' => $this->session->getFlashes()
        ]);
    }
}
