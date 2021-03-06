<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;

class HomePageManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();
    }

    public function user()
    // : ? user
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $id = $_SESSION['auth'] ?? null;// ??null => si pas défini = null
        if ($id === null) {
            return null;
        }
        $req = $this->db->prepare('SELECT * from client where id = :id');
        $req->execute([$id]);
        $user = $req->fetch();

        return $user ?: null;
    }

    public function auth($username)
    // : ?user
    {
        // cherche l'utilisateur correspondant au username
        $req = $this->db->prepare('SELECT * from client where username = :username');
        $req->execute(['username'=> $username]);
        $user = $req->fetch();
        if ($user === false) {
            return null;
        }
    }
}
