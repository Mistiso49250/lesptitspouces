<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Model\Repository\UserRepository;

class UserManager
{
    private $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function auth($username)
    {
        // cherche l'utilisateur correspondant au username
        $req = $this->db->prepare('SELECT * from client where username = :username');
        $req->execute(['username'=> $username]);
        $user = $req->fetch();
        if ($user === false) {
            return null;
        }
    }

    public function user()
    // : ? user
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $id = $this->session['auth'] ?? null;// ??null => si pas défini = null
        if ($id === null) {
            return null;
        }
        $req = $this->db->prepare('SELECT * from client where id = :id');
        $req->execute([$id]);
        $user = $req->fetch();

        return $user ?: null;
    }

    public function register()
    {
        return $this->userRepository->create(['username'=>'', 'name'=>'', 'société'=>'', 'email'=>'', 'adresse'=>'',
                        'adress_supp'=>'', 'postal'=>'', 'ville'=>'', 'pays'=>'', 'phone'=>'', 'password'=>'', 
                        'passwordConfirm'=>'']);
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


    // public function updatePassword()
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
    //         header('Location: index.php?action=login');
    //         exit();
    //     }
    // }

    public function updateConfirmationAccount($userId)
    {
        $req = $this->db->prepare('UPDATE client set confirmation_token = null, confirmed_at = now() where id_client = :idClient', [$userId])->fetch();
        $req->execute(['userId'=>$userId]);

        $user = $req->fetch();
        return $user;
    }
}
