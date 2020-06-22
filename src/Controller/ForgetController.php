<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\View;

class ForgetController
{
   private $view;

   public function __contruct()
   {
    $this->view = new View('../templates/frontoffice/');
   }

   public function forget()
   {
    if (!empty($_POST) && !empty($_POST['email'])){
        if($auth-->resetPassword($db, $_POST['email'])){
            $_SESSION['flash']['success'] = 'les instruction du rappel de mot de passe vous ont été envoyé par email';
            header('Location: login.php');
        }else{
            $_SESSION['flash']['dager'] = 'aucun compte ne correspond a cet adresse';
        }
    }
   }
}