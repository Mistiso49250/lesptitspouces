<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\ArticleManager;
use Oc\View\View;

class HomePageController
{
    private $view;
    private $articleManager;
   
    public function __construct(ArticleManager $articleManager)
    {
        $this->view = new View('../templates/frontoffice/');
        $this->articleManager = $articleManager;
    }
   
    public function homePage(): void
    {
        $list = $this->articleManager->findAllNouveaute();
 
        $this->view->render('frontoffice/homePage', [
            'list'=>$list
        ]);
    }
}
