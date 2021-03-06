<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;
use Oc\Tools\Fonction;
use Oc\Tools\Session;

class RegisterManager
{
    private $db;
    private $fonction;
    private $session;

    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();
        $this->session = new session();
        $this->fonction = new Fonction($_POST);
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
    ) : bool {
        $options = [
            'cost' => 12,
        ];
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);
        $token = $this->fonction->str_random(60);
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

    public function lastInsertId()
    {
        $req = $this->db->lastInsertId();

        return $req;
    }

    public function validation($username)
    {
        $req = $this->db->prepare('SELECT id_client from client where username = :username');
        $req->execute(['username'=>$username]);
        $user = $req->fetch();

        return $user['id_client'];
    }

    public function validationEmail($email)
    {
        $req = $this->db->prepare('SELECT id_client from client where email = :email');
        $req->execute(['email'=>$email]);
        $user = $req->fetch();

        return $user['id_client'];
    }

    // public function isUniq($field): void
    // {
    //     $req = $this->db->query('SELECT id_client FROM client WHERE $field = ?', [$this->fonction->getField($field)]);
    //     $user = $req->fetch();
    //     if ($user) {
    //         $this->session->setFlash('danger', 'Ce pseudo est déja pris');
    //     }
    // }

    // public function confirm($userId, $token)
    // {
    //     $user = $this->db->query('SELECT * from client where id_client = :idClient', [$userId])->fetch();
    //     if($user && $user->confirmation_token == $token){
    //         $this->db->query('UPDATE client set confirmation_token = null, confirmed_at = now() where id_client = :idClien', [$userId])->fetch();
    //     }
    // }

    // public function confirmEmail($userId)
    // {
    //     $req = $this->db->prepare('SELECT confirmation_token from client where id_client = :idClient');
    //     $req->execute(['userId'=>$userId]);

    //     $user = $req->fetch();
    //     return $user;
        
    // }

    public function updateConfirmationAccount($userId)
    {
        $req = $this->db->prepare('UPDATE client set confirmation_token = null, confirmed_at = now() where id_client = :idClient', [$userId])->fetch();
        $req->execute(['userId'=>$userId]);

        $user = $req->fetch();
        return $user;
    }
}
