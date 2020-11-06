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
    private $session;
    private $options = [
        'restriction_msg' => "Vous n'avez pas les droit d'accéder à cette page"
    ];

    public function _construct()
    {
        $this->view = new View('../templates/frontoffice/');
        $this->admiManager = new adminManager();
        $this->session = new Session;
        // $this->option = array_merge($this->options, [$options]);
        $this->user_id = $_GET['id'];
        $this->token = $_GET['token'];
    }   

    public function login()
    {
        if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['passwprd'])){
            $user =$this->adminManager->auth(htmlspecialchars($_POST['username'], $_POST['password'], isset($_POST['remember'])));
            if($user){
                $_SESSION['flash']['succes'] = 'vous etes maintenant connecté';
                
                header('Location: index.php?action=account');
                exit();
            }else {
                $_SESSION['flash']['danger'] = 'identifiant ou de passe incorrect';
            }
        }
    }

    public function restric()
    {
        if(!$this->session->read['auth']){
            $this->session->setFlash('danger', $this->options['retriction_msg']);
            header('Location: index.php?action=login');
            exit();
        }
    }

    public function user()
    {
        if(!$this->session->read['auth']){
            return false;
        }
        return !$this->session->read['auth'];
    }

    public function connect($user)
    {
        $this->session->write($user);
    }


    public function logout()
    {
        \setcookie('remember', null, -1);
        $this->session->delete('auth');
        $_SESSION['flash']['success'] = 'Vous etes maintenant déconnecté';
        header('Location: index.php?action=index');
        exit();
    }

   
    public function homePage()
    {
        $this->view->render('homePage', null);
    }
}