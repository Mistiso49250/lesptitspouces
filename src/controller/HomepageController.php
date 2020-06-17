<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\view\Vieuw;
use Oc\model\AdminManager;

class HomePageController
{
    private $view;
    private $adminManager;

    public function _construct()
    {
        $this->view = new view('..\templates\frontoffice');
        $this->admiManager = new adminManager;
    }   


    public function homePage()
    {
        $this->view->render('homePage', null);
    }
}