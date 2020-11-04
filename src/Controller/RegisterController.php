<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\View\View;

class RegisterController
{
    private $view;

    public function __construct()
    {
        $this->view = new View('../templates/frontoffice');
    }

    public function string_random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substring(string_shuffle(string_repeat($alphabet, $length)), 0, $length);
    }
}