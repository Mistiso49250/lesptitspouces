<?php
declare(strict_types=1);

namespace Oc\View;

use Twig\Environment;
use twig\Loader\FilesystemLoader;

class View
{
    private $twig;

    public function  __construct()
    {
        $loader = new FilesystemLoader( '../templates');
        var_dump("loader", $loader); die();
        $this->twig = new Environment($loader, [
            'cache' => false
        ]);
    }

    public function render(string $templates, ?array $data) : void
    {
        echo $this->twig->render($templates . ".html.twig", $data);
    }



}