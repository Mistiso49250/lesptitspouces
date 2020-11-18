<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Controller\HomePageController;
use Oc\View\View;

class AccountController
{
    // private $view;
    // private $homePageController;

    // public function __contruct()
    // {
    //     $this->view = new View('../templates/frontoffice');
    //     $this->homePage = new HomePageController();
    // }

    // public function account()
    // {

    //     if(!isset($_SESSION['auth'])){
    //         $_SESSION['flash']['danger'] = "vous n'avez pas le droit d'accéder a cette page";
    //         exit();
    //     }

    //     if(!empty($_POST)){
    //         if(empty(['password']) || $_POST['password'] != $_POST['passwordConfirm']){
    //             $_SESSION['flash']['danger'] = "Les mots de passe ne correspondent pas";
    //         }else{
    //             $user_id = $_SESSION['auth']->id;
    //             $password= password_hash($_POST['password'], PASSWORD_BCRYPT);
    //             $req = $pdo->prepare('update client set password= ? where id = ?')->execute(['password', $user_id]);
    //             $req->execute([$password]);
    //             $_SESSION['flash']['success'] = "votre mot de passe a bien été mis a jour";
    //         }
    //     }
    // }
}
