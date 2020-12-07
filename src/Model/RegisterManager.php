<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Model\HomePageManager;
use Oc\Tools\DbConnect;
use Oc\Tools\Session;

class RegisterManager
{
    private $db;
    private $errors;
    private $validation;
    private $HomePageManager;
    private $sesion;

    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();
        $this->sesion = new session();
    }

    public function auth(): void
    {
    }

    public function register(
        string $username,
        string $name,
        string $adresse,
        string $adSup,
        string $postal,
        string $ville,
        string $pays,
        int $phone,
        string $societe,
        string $email,
        string $password
    ) : bool
    {
        $options = [
            'cost' => 12,
        ];
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);
        $token = str_random(60);
        $client = $this->db->prepare('INSERT into client (username, name, adresse, adresse_sup, postal, ville, pays, phone, 
        societe, email, password, role, confirmation_token  date_inscription ) VALUES(:username, :name, :adresse, :adress_sup, :postal, :ville, :pays, :phone, 
        :societe, :email, :password, :confirmation_token, NOW()');

        return $client->execute([
            'username'=>$username,
            'name'=>$name,
            'adresse'=>$adresse,
            'adresse_sup'=>$adSup,
            'postal'=>$postal,
            'ville'=>$ville,
            'pays'=>$pays,
            'phone' =>$phone,
            'societe'=>$societe,
            'email'=>$email,
            'password'=>$passwordHash,
            'confirmation_token'=>$token
        ]);
    }

    public function validation($username)
    {
        $req = $this->db->prepare('SELECT id_client from client where username = :username');
        $req->execute(['username'=>$username]);
        $user = $req->fetch();

        return $user['id_client'];
    }

    public function validationCompte(): void
    {
    }

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
