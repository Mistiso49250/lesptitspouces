<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\ArticleManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    private $articleManager;

    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

    // affiche les informations d'un article
    /**
     * @Route("/article/{slug}", name="article")
     */
    public function article(int $idArticle): Response
    {
        $article = $this->articleManager->findArticle($idArticle);
        return $this->render('frontoffice/article', [
            'article'=>$article
        ]);
    }
}
