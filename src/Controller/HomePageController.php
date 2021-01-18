<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\ArticleManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    private $articleManager;
   
    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

   
    /**
     * @Route("/", name="homepage")
     */
    public function homePage(): Response
    {
        $list = $this->articleManager->AllNouveaute();
        return $this->render('frontoffice/homePage.html.twig', [
            'list'=>$list
        ]);
    }
}
