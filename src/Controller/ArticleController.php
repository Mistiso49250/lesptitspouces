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
        // $pagePrecedente = 0;
        // $pageSuivante = 0;

        // $currentPage = (int)($_GET['page'] ?? 1);

        // //determine le nombre d'items par page
        // $postsPerPage = 4;
        // $offset = $postsPerPage * ($currentPage - 1);

        // $countArticle = $this->ArticleManager->countArticle();

        // $nbTotalPages = (int)ceil($countArticle / $postsPerPage);

        // if ($currentPage < 1){
        //     $currentPage = 1;
        // }elseif ($currentPage > $nbTotalPages){
        //     $currentPage = $nbTotalPages;
        // }

        // //calculer la page précédente, si current page = 1 pas de page prec : =0
        // if($currentPage === 1){ 
        //     $pagePrecedente = 0;
        // }else {
        //     $pagePrecedente = $currentPage - 1;
        // }

        // //calculer la page suivante
        // if($currentPage === $nbTotalPages){
        //     $pageSuivante = 0;
        // }else {
        //     $pageSuivante = $currentPage + 1;
        // }

        $article = $this->articleManager->Article($id);
        return $this->render('frontoffice/article/article.html.twig', [
            'article'=>$article,
            // 'pageSuivante'=>$pageSuivante, 
            // 'pagePrecedente'=>$pagePrecedente, 
            // 'currentPage'=>$currentPage
        ]);
    }
}
