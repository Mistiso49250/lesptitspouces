<?php
declare(strict_types=1);

namespace Oc\View;

use Oc\Tools\TwigExtention;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader('../templates');
        
        $this->twig = new Environment($loader, [
            'cache' => false
        ]);

        // $this->twig->addExtension(new TwigExtention());
    }



    public function render(string $templates, ?array $data) : void
    {
        // var_dump($templates, $data); die();
        $data = $data === null ? [] : $data;
        echo $this->twig->render($templates . ".html.twig", $data);
    }
}
