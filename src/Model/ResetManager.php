<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;
use Oc\Model\HomePageManager;

class ResetManager
{
    // private $db;
    // private $homePage;

    // public function __construct()
    // {
    //     $this->db = (new DbConnect())->connectToDb();
    //     $this->homePage = new HomePageManager;
    // }

    // public function reset()
    // {
    //     // verif info correct
    //     $user = $this->homePage->getUsers($_GET['id'], $_GET['token']);

    //     if(isset($_GET['id']) && isset($_GET['token'])){

    //         if($auth->getUsers()){
    //             if(!empty($_POST)){
    //                 if(!empty($_Post['password'])){
    //                     $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    //                     $this->db->query('update client set password=?, reset_at = null, reset_token = null where id = ?', [$password, $_GET['id']]);
    //                     $_SESSION['flash']['success'] = "votre mot de passe a bien été modifié";
    //                     $auth->connect($user);
    //                     header('Location: index.php?action=account');
    //                     exit();
    //                 }
    //             }

    //         }else{
    //             $_SESSION['flash']['danger'] = "ce token n'est pas valide";
    //             header('Location: index.php?action=login');
    //             exit();
    //         }

    //     }else {
    //         hearder('Location: index.php?action=login');
    //         exit();
    //     }
    // }
}