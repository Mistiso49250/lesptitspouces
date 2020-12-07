<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\ArticleManager;
use Oc\Model\HomePageManager;
use Oc\Tools\Session;
use Oc\View\View;

class HomePageController
{
    private $view;
    private $articleManager;
    private $homePageManager;
    private $session;

    public function __construct()
    {
        $this->view = new View('../templates/frontoffice/');
        $this->session = new Session();
        $this->homePageManager = new HomePageManager();
        $this->articleManager = new ArticleManager();
    }

    public function login(): void
    {
        $messageError = null;
        if ($this->homePageManager->user() !== null) {
            header('Location: index.php');
            exit();
        }
        if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
            $user = $this->homePageManager->auth(htmlspecialchars($_POST['username'], $_POST['password'], isset($_POST['remember'])));
            if ($user) {
                $this->session->setFlash('succes', 'vous etes maintenant connecté');
                
                header('Location: index.php?login=1');
                exit();
            }
            $this->session->setFlash('danger', 'identifiant ou de passe incorrect');
        }

        $this->view->render('frontoffice/login', ['messageError'=>$messageError]);
    }


    public function logout(): void
    {
        $this->session->logout();
        header('Location: index.php');
        exit();
    }

    public function forget(): void
    {
        $this->view->render('frontoffice/forget', null);
    }

    public function register(): void
    {
        $this->view->render('frontoffice/register', null);
    }

    public function account(): void
    {
        $this->view->render('frontoffice/account', null);
    }

    public function reset(): void
    {
        $this->view->render('frontoffice/reset', null);
    }


   
    public function homePage(): void
    {
        $list = $this->articleManager->findAllNouveaute();
 
        $this->view->render('frontoffice/homePage', [
            'list'=>$list
        ]);
    }
}
