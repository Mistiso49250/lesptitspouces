<?php
declare(strict_types=1);

namespace Oc\Tools;

class Session
{
    private $session;

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->session = $_SESSION;
    }

    public function logout(): void
    {
        $this->session = null;
        session_destroy();
    }

    public function setFlash($type, $message): void
    {
        $_SESSION['flash'][] = ['type'=>$type, 'message'=>$message];
    }

    public function hasFlashes()
    {
        return isset($_SESSION['flash']);
    }

    public function getFlashes()
    {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }

    public function setToken($hash): void
    {
        $_SESSION['csrfToken'] = $hash;
    }

    public function getToken()
    {
        $csrfToken = $_SESSION['csrfToken'];
        unset($_SESSION['csrfToken']);

        return $csrfToken;
    }
}
