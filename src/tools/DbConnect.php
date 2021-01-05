<?php
declare(strict_types=1);

namespace Oc\Tools;

use PDO;

class DbConnect
{
    private $db;

    public function connectToDb()
    {
        $this->db = new \PDO('mysql:host=localhost;dbname=lesptitspouces;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $this->db;
    }

    public function lastInsertId()
    {
        return $this->db->lastInsertId();
    }
}
