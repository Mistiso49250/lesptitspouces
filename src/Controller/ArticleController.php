<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\ArticleManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    private $articleManager;

    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

    // affiche les informations d'un article
    /**
     * @Route("/article/{id}", name="article")
     * Route("/article/{slug}", name="article")
     */
    public function article(int $id): Response
    // public function article(string $slug): Response
    {
        $article = $this->articleManager->findArticle($id);
        return $this->render('frontoffice/article.html.twig', [
            'article'=>$article,
        ]);
    }
}
