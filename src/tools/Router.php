<?php
declare(strict_types=1);

namespace Oc\Tools;

use Oc\Controller\ArticleController;
use Oc\Controller\HomePageController;
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
            
            case 'forget':
                $controller = new HomePageController();
                $controller->forget();
            break;
            case 'register':
                $controller = new HomePageController();
                $controller->register();
            break;
            case 'account':
                $controller = new HomePageController();
                $controller->account();
            break;
            case 'reset':
                $controller = new HomePageController();
                $controller->reset();
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
