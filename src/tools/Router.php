<?php
declare(strict_types=1);

namespace Oc\Tools;

use Oc\Tools\Request;
use Oc\Model\ArticleManager;
use Oc\Controller\ArticleController;
use Oc\Controller\HomePageController;
use Oc\Controller\UserController;
use Oc\Model\HomePageManager;
use Oc\Model\RegisterManager;
use Oc\Model\UserManager;

class Router
{
    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function run(): void
    {
        $action = $this->request->getItem('action');
        $bddConnect = new DbConnect();
        $articleManager = new ArticleManager($bddConnect);
        $request = new Request();
        $session = new Session();
        $homePageManager = new HomePageManager($bddConnect);
        $user = new UserManager($bddConnect);

        switch ($action) { // partie front
                // affichage des articles
            case 'article':
                $controller = new ArticleController($articleManager);
                $controller->article((int)$_GET['id']);
            break;
                // affichage des nouveaux article
            
            // case 'forgetPassword':
            //     $controller = new UserController($request, $session, $homePageManager, $user);
            //     $controller->forgetPassword();
            // break;
            case 'register':
                $controller = new UserController($request, $session, $homePageManager, $user);
                $controller->register($_POST);
            break;
            // case 'resetPassword':
            //     $controller = new UserController($request, $session, $homePageManager, $user);
            //     $controller->resetPassword();
            // break;
            // case 'changePassword':
            //     $controller = new UserController($request, $session, $homePageManager, $user);
            //     $controller->changePassword();
            // break;
            // //connecion au compte utilisateur
            // case 'account':
            //     $controller = new UserController($request, $session, $homePageManager, $user);
            //     $controller->account();
            // break;
            // connexion à la partie admin
            case 'login':
                $controller = new UserController($request, $session, $homePageManager, $user);
                $controller->login();
            break;

                // page d'accueil
            default:
                $controller = new HomePageController($articleManager);
                $controller->homePage();
        }
    }
}
