<?php
declare(strict_types=1);

namespace Oc\Controller;

class session
{
    public function __contruct(){
        session_start();
    }

    public function setFlash($key, $message){
        $_SESSION['flash'][$key] = $message;
    }

    public function hasFlashes(){
        return isset($_SESSION['flash']);
    }

    public function getFlashes(){
        $flash = $_SESSION['flash'];
        unset ($_SESSION['flash']);
        return $flash;
    }

    public function write($key, $value){
        $_SESSION[$key] = $value;
    }

    public function read($key, $value){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function delete($key){
        unset($_SESSION[$key]);
    }

}