<?php
declare(strict_types=1);

namespace Oc\Tools;

class Request
{
    private $get;
    private $post;
    private $token;
    private $userId;

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
    }

    public function getItem($item)
    {
        $action = $this->get[$item] ?? null;

        return $action;
    }

    public function postItem($item)
    {
        $action = $this->post[$item] ?? null;

        return $action;
    }

    public function confirm(): void
    {
        $userId = $this->get['id_client'];
        $token = $this->get['confirmation_token'];
    }

    // public function getErrors(){
    //     return $this->errors;
    // }
}
