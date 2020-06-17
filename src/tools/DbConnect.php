<?php

namespace Oc\Tools;

class DbConnect {
    private $db;

    public function connectToDb()
    {
        try
        {
            $this->db = new \PDO('mysql:host=localhost;dbname=lesptitspouces;charset=utf8', 'root', '');
            return $this->db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}