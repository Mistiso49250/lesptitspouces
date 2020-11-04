<?php
declare(strict_types=1);

namespace Oc\View;

class View
{
    private $path;

    public function  __construct(string $path)
    {
        $this->path = $path;
    }

    public function render(string $templates, ?array $data) : void
    {
        ob_start();
        require_once($this->path.$templates.'.html.php');
        $content=ob_get_clean();
        require_once($this->path.'layout.html.php');
    }

}