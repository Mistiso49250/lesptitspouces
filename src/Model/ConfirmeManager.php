<?php
declare(strict_types=1);

namespace Oc\Tools;

use Oc\Tools\DbConnect;

    
class ConfirmeManager
{
    private $db;


    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();

    }

    
    

}