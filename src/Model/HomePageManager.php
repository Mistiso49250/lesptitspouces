<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;

class HomePageManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new DbConnect())->connectToDb();
    }

    public function register($username, $password, $email)
    {
        if($this->validation->isValid()){
            $passord = password_hash($password, PASSWORD_BCRYPT);
            $token = string_random(60);
            $req = $this->db->query("INSERT INTO client SET username = ?, password = ?, email = ?, confirmation_token = ?",
             $username, 
              $password, 
              $email,
              $token);
            $user_id = $this->db->lastInsertId();
            // verif compte par email
            mail($email, 'Confirmation de votre compte', "Afin de valider le compte merci de cliquer sur ce lien\n\nhttp://localhost/users/confirm.php?id=$user_id$token=$token");    
        }
    }

    public function confirm($user_id, $token) {

        $user = $this->db->query('SELECT * from client where id= ?', [$user_id])->fetch;

        if($user && $user_id->confirmation_token == $token){
            session_start();
            $this->db->query('update client set confirmation_token = null, confirmed_at = now(), where id=?', [$user_id]);
            $this->session->write('auth', $user);
            return true;
        }
            return false;
    }

    public function connectFromCookie()
    {
        if(isser($_COOKIE['remember']) && !$this->user()){
            $remember_token = $_COOKIE['remember'];
            $parts = explode('==', $remember_token);
            $user_id = $passord[0];
            $user = $this->db->query('SELECT * from client where id = ?', [$user_id])->fetch;
       
            if($user){
                $expected = $user_id . '==' . $user->$remember_token . sha1($user_id, 'raton');
                if($expected == $remember_token){
                    $this->connect($user);
                    setcookie('remember', $remember_token,time() + 60 * 60 * 24 * 7);
                }else{
                    setcookie('remember', null, -1);
                }
            }
        }
    }

    public function login($username, $passord, $remember = false)
    {
        if(!empty($_POST) && !empty($_POST['utilisateur']) && !empty($_POST['passwprd'])){
           $user = $this->db->query('SELECT * from client  where (username = :username or email = : username) and confirm_at is not null', ['username' => $username])->fetch();
            if(password_verify($passord, $user->password)){
                $this->connect($user);
                if($remember){
                    $this->remember($user->id);
                    }
                return $user;
            }else{
                return false;
            }
        }

    }

    public function remember($user_id)
    {
        $remember_token = string_random(250);
        $this->db->query('UPDATE client set remember_token = ? where id = ?', [$remember_token, $user_id]);
        setcookie('remember', $user_id . '==' . $remember_token . sha1($user_id, 'raton'), time() + 60 * 60 * 24 * 7);
    }

    public function confirmCreatAccount()
    {
        $req = $this->db->prepare('select * from client where id= ?');
        $req->execute([$this->user_id]);
        $user = $req->fetch();

        if($auth->confirm($_GET['id'], $_GET['token'])){
            
            $_SESSION['flash']['succes'] = 'votre compte a bien été validé';
            $_SESSION['auth'] = $user;
            header('Locaion: index.php?action=account');
            die('ok');
        }else{
            $_SESSION['flash']['danger'] = "Ce token n'est plus vallide";
            header('Location: index.php?action=login');
        }
    }

    public function resetPassword($email)
    {
        $user = $this->db->query('SELECT * from client where email= ? AND confirmed_at IS not null', [$email])->fetch();
        if($user){
            $reset_token = string_random(60);
            $this->db->query('UPDATE client set reset_token = ?, reset_at = now() where id= ?',([$reset_token, $user_id]));
            mail($_POST['email'], 'reinitialisation de votre mot de passe', "Afin de reinitialiser votre compte merci de cliquer sur ce lien\n\nhttp://localhost/users/reset.php?id={$user->id}&token=$reset_token");   
            return $user;
        }else{
            return false;
        }
    }

    public function getUsers($user_id, $token)
    {
        $user = $this->db->query('SELECT * from client where id = ? and token = ? and reset_at > date_sub(now(), interval 30 minute')->execute([$user_id, $token])->fetch();
        return $user;
    }
}