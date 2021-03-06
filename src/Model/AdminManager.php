<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;

class AdminManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();
    }

    // public function user() : ?user
    // {
    //     $query = $this->db->prepare('SELECT * FROM user WHERE id = :iduser');
    //     $query->execute([$id]);
    //     $user = $query->fetch();
    //     if (!$this->session->read['auth']) {
    //         return false;
    //     }
    //     return !$this->session->read['auth'];
    // }

    public function auth(string $name): ?array
    {
        $req = $this->db->prepare('SELECT * FROM user WHERE name = :name');
        $req->execute(['name' => $name]);
        $user = $req->fetch();

        if ($user === false) {
            return null;
        }
        return $user;
    }
}
