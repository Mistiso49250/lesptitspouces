<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Model\Repository\ArticleRepository;

class ArticleManager
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    // récupère les informations d'un article
    public function findArticle(int $idArticle) : ?array
    {
        return $this->articleRepository->find($idArticle);
    }

    // recupère les nouveaux articles pour la homePage
    public function findAllNouveaute() : array
    {
        return $this->articleRepository->findBy(['newarticle'=> 1]);
    }
}
