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