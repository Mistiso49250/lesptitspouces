<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Model\HomePageManager;
use Oc\Tools\DbConnect;

class RegisterManager
{
    // private $db;
    // private $errors;
    // private $validation;
    // private $HomePageManager;
    // private $sesion;

    // public function __construct()
    // {
    //     $this->db = (new DbConnect())->connectToDb();
    //     $this->errors = array();
    //     $this->validation = new Validation($_POST);
    //     $this->homePage = new HomePageManager();
    //     $this->sesion = new session();
    // }

    // public function validation()
    // {
    //     $this->homePage->register($_POST['username'], $_POST['password'], $_POST['email']);

        
    //     if($this->sesion->setFlash('success', 'un email de confirmation vous a été envoyé pour validé votre compte')){
    //         header('Location: index.php?action=login');
    //         exit();
    //     }else{
    //         $this->errors = $this->validation->getErrors();
    //     }

    //     $this->validation->isAlphanum('username', "Votre pseudo n'est pas valide");
    //     if($this->validation->isValid()){
    //         $this->validation->isUniq('username', $this->db, 'client', 'ce pseudo est deja pris');
    //     }

    //     $this->validation->isEmail('email', "Votre email n'est pas valide");
    //     if($this->validation->isValid()){
    //         $this->validation->isUniq('email', $this->db, 'client', 'cet email est déjà utilisé pour autre compte');
    //     }

    //     $this->validation->isConfirmed('password', "Vous devez rentrer un mot de passe valide");
        
    // }
}
