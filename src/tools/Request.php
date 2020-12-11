<?php
declare(strict_types=1);

namespace Oc\Tools;

class Request
{

    private $get;

    public function __construct()
    {
        $this->get = $_GET;
    }

    public function getItem($action)
    {
        $action = $this->get['action'] ?? 'home';

        return $action;
    }

    public function postItem(): void
    {
    }

    // public function getErrors(){
    //     return $this->errors;
    // }
}
