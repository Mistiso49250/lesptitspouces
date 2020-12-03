<?php
declare(strict_types=1);

namespace Oc\Tools;

use Oc\Controller\HomePageController;
use Oc\Controller\ArticleController;

class Router
{

    public function run()
    {
        // Routing
        $action = isset($_GET['action']) ? $_GET['action'] : "home";
        // var_dump("action", $action); die();


        switch ($action) { // partie front
                // affichage des articles
            case 'article':
                $controller = new ArticleController();
                $controller->article((int)$_GET['id']);
                break;
                // affichage des nouveaux article
            case 'newArticle':
                $controller = new ArticleController();
                $controller->newArticle((int)$_GET['id']);
                break;
            
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