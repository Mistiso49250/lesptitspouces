<?php
declare(strict_types=1);

namespace Oc\Tools;

use Oc\Controller\ArticleController;
use Oc\Controller\HomePageController;
use Oc\Controller\RegisterController;
use Oc\Tools\Request;

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

        switch ($action) { // partie front
                // affichage des articles
            case 'article':
                $controller = new ArticleController();
                $controller->article((int)$_GET['id']);
            break;
                // affichage des nouveaux article
            
            case 'forgetPassword':
                $controller = new HomePageController();
                $controller->forgetPassword();
            break;
            case 'register':
                $controller = new HomePageController();
                $controller->register();
            break;
            case 'resetPassword':
                $controller = new HomePageController();
                $controller->resetPassword();
            break;
            case 'changePassword':
                $controller = new HomePageController();
                $controller->changePassword();
            break;
            //connecion au compte utilisateur
            case 'account':
                $controller = new HomePageController();
                $controller->account();
            break;
            // connexion à la partie admin
            case 'login':
                $controller = new HomePageController();
                $controller->login();
            break;

                // page d'accueil
            default:
                $controller = new HomePageController();
                $controller->homePage();
        }
    }
}
