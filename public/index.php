<?php
declare(strict_types=1);

require'../vendor/autoload.php';

use Oc\Controller\HomePageController;

session_start();

switch ($_GET['action']){
    case 'listearticle':
        $controller = new ArticleController();
        $controlelr->article('id');

    default:
    $controller = new HomePageController();
    $controller->homePage();
    var_dump($controller);
}