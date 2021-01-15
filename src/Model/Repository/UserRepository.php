<?php

declare(strict_types=1);

namespace Oc\Model\Repository;

use Oc\Tools\DbConnect;

final class UserRepository
{
    private $db;

    private function makeBinding(array $criteria): string
    {
        if(empty($criteria)){
            throw new \Exception('les critères d\'un findOneBy ou findBy ne peuvent pas être vide');
        }
        
        $binding = [];
        foreach(array_keys($criteria) as $key){
            $binding[] = "{$key} = :{$key}";
        }
    
        return implode(' and ', $binding);
    }

    public function __construct(DbConnect $dbConnect)
    {
        $this->db = $dbConnect->connectToDb();
    }

    public function find(int $id): ?array
    {
        return null;
    }

    public function findOneBy(array $criteria): ?array
    {
        return null;
    }

    public function findBy(array $criteria, int $limit = null, int $offset = null): ?array
    {
        return null;
    }

    public function findAll(): ?array
    {
        return null;
    }

    public function create(array $article): bool
    {
        return false ;
    }

    public function update(array $article): bool
    {
        return false;
    }

    public function delete(array $article): bool
    {
        return false;
    }
}

