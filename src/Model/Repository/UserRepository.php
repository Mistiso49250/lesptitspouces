<?php

declare(strict_types=1);

namespace Oc\Model\Repository;

use Oc\Tools\DbConnect;

final class UserRepository
{
    private $db;

    private function makeBinding(array $criteria): string
    {
        if (empty($criteria)) {
            throw new \Exception('les critères d\'un findOneBy ou findBy ne peuvent pas être vide');
        }
        
        $binding = [];
        foreach (array_keys($criteria) as $key) {
            $binding[] = "{$key} = :{$key}";
        }
    
        return implode(' and ', $binding);
    }

    private function insertUser(array $user)
    {
        $create = [];
        foreach (array_keys($user) as $key) {
            $create[] = "{$key} = :{$key}";
        }
    
        return implode(' and ', $create);
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

    public function create(array $user): bool
    {
        $create = $this->insertUser($user);
        $options = [
            'cost' => 12,
        ];
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);
        $token = $this->fonction->str_random(60);
        $req = $this->db->prepare("INSERT into client {$create}");

        $newUser = $req->execute($user);

        return $newUser;
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
