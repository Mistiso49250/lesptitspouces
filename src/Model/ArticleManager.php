<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;

class ArticleManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();
    }

    // récupère les informations d'un article
    public function findArticle(int $idArticle) : ?array
    {
        $req = $this->db->prepare('SELECT * from articles where id_article = :idarticle');
        $req->execute(['idarticle'=>$idArticle]);
        $articles = $req->fetch();

        return $articles === false ? null : $articles;
    }

    // récupère les informations d'un nouvel article
    public function findNouveaute(int $idArticle) : ?array
    {
        $req = $this->db->prepare('SELECT * from newarticles where id_article = :idarticle');
        $req->execute(['idarticle'=>$idArticle]);
        $articles = $req->fetch();

        return $articles === false ? null : $articles;
    }

    // recupère les nouveaux articles pour la homePage
    public function findAllNouveaute() : array
    {
        $req = $this->db->prepare('SELECT * FROM articles where newarticle = 1');
        $req->execute();

        return $req->fetchAll();
    }
}
