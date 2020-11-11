<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\view\View;
use Oc\model\AdminManager;
use Oc\Tools\Session;
use Oc\Model\HomePageManager;

class HomePageController
{
    private $view;
    private $adminManager;
    private $homePageManager;
    private $session;

    public function _construct()
    {
        $this->view = new View();
        var_dump("hompePageController", $this->view); die();
        $this->session = new Session();
        $this->homePageManager = new HomePageManager();
    }   

    public function login()
    {
        if($this->homePageManager->user() !== null){
            header('Location: index.php');
            exit();
        }
        if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['passwprd'])){
            $user =$this->homePageManager->auth(htmlspecialchars($_POST['username'], $_POST['password'], isset($_POST['remember'])));
            if($user){
               $this->session->setFlash('succes', 'vous etes maintenant connecté');
                
                header('Location: index.php?login=1');
                exit();
            }else {
               $this->session->setFlash('danger', 'identifiant ou de passe incorrect');
            }
        }
    }

    public function logout()
    {
        $this->session->logout();
        header('Location: index.php');
        exit();
    }

   
    public function homePage()
    {
        var_dump($this->view); die();
        $this->view->render('homePage', null);
    }
}