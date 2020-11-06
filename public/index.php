<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use Oc\Controller\HomePageController;
use Oc\Controller\ArticleController;

session_start();

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Routing
$action = isset($_GET['action']) ? $_GET['action'] : null;

// Rendu du template
// $loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
// $twig = new Twig_Environnement($loader, [
//     'cache'=>false
// ]);

switch ($action){
    // case 'listearticle':
    //     $controller = new ArticleController();
    //     $controlelr->article((int)$_GET['id']);
    // break;

    default:
        $controller = new HomePageController();
        $controller->homePage();
}