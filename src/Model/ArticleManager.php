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
    public function Article(int $idArticle) : ?array
    {
        return $this->articleRepository->find($idArticle);
    }

    // recupère les nouveaux articles pour la homePage
    public function AllNouveaute() : array
    {
        return $this->articleRepository->findBy(['newarticle'=> 1]);
    }

    public function create()
    {
        return $this->articleRepository->create(['titre'=>':titre', 'contenu_article'=>':contenu_article',
                     'extrait'=>':extrait', 'detail'=>'', 'prixTTC'=>':prixTTC', 'slug'=>':slug', 'newarticle'=>1]);
    }

    public function uniqImg()
    {
        $req = $this->db->prepare('INSERT into chapitre (dateImg) values (now())');
        $req->execute();

        return $req->fetchAll();
    }

    public function update()
    {
        return $this->articleRepository->update(['titre'=>':titre', 'contenu_article'=>':contenu_article',
        'extrait'=>':extrait', 'detail'=>'', 'prixTTC'=>':prixTTC', 'slug'=>':slug', 'newarticle'=>1]);
    }

    public function delete()
    {
        return $this->articleRepository->delete([]);
    }
}
