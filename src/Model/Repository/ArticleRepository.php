<?php

declare(strict_types=1);

namespace Oc\Model\Repository;

use Oc\Tools\DbConnect;

final class ArticleRepository
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

    private function insertArticle(array $article)
    {
        $create = [];
        foreach(array_keys($article) as $key){
            $create[] = "{$key} = :{$key}";
        }
    
        return implode(' and ', $create);
    }

    private function updateArticle(array $article)
    {
        $update = [];
        foreach(array_keys($article) as $key){
            $update[] = "{$key} = :{$key}";
        }
    
        return implode(' and ', $update);
    }

    public function __construct(DbConnect $dbConnect)
    {
        $this->db = $dbConnect->connectToDb();
    }

    public function find(int $id): ?array
    {
        $req = $this->db->prepare('SELECT * from article where id_article = :id');
        $req->execute(['id'=>$id]);
        $article = $req->fetch();

        return $article === false ? null : $article;
    }

    public function findOneBy(array $criteria): ?array
    {
        return null;
    }

    public function findBy(array $criteria, int $limit = null, int $offset = null): ?array
    {
        $binding = $this->makeBinding($criteria);
        $req = $this->db->prepare("SELECT * FROM article where {$binding}");
        $req->execute($criteria);

        return $req->fetchAll();
    }

    public function findAll(): ?array
    {
        return null;
    }

    public function create(array $article): bool
    {
        $create = $this->insertArticle($article);
        $req = $this->db->prepare("INSERT into article {$create}");
        $newArticle = $req->execute($article);

        return $newArticle;
    }

    public function update(array $article): bool
    {
        $update = $this->updateArticle($article);
        $req = $this->db->prepare("UPDATE chapitre set {$update}");
        $updateArticle = $req->execute([$article]);
        return $updateArticle;
    }

    public function delete(array $article): bool
    {
        $req = $this->db->prepare('DELETE from chapitre where _article = :id');

        return false;
    }
}

