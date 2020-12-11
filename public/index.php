<?php

declare(strict_types=1);

require '../vendor/autoload.php';


use Oc\Tools\Router;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router();
$router->run();



