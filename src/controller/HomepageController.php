<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\view\Vieuw;
use Oc\model\AdminManager;
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
        $this->view = new view('..\templates\frontoffice');
        $this->admiManager = new adminManager;
        $this->session = $session;
        $this->option = array_merge($this->options, [$options]);
        $this->user_id = $_GET['id'];
        $this->token = $_GET['token'];
    }   

    public function register($username, $password, $email)
    {
        if($validation->isValid()){
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

    public function restric()
    {
        if(!$this->session->read['auth']){
            $this->session->setFlash('danger', $this->options['retriction_msg']);
            header('Location: login.php');
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

    public function confirmCreatAccount()
    {
        $req = $this->db->prepare('select * from client where id= ?');
        $req->execute([$this->user_id]);
        $user = $req->fetch();

        if($auth->confirm($_GET['id'], $_GET['token'])){
            
            $_SESSION['flash']['succes'] = 'votre compte a bien été validé';
            $_SESSION['auth'] = $user;
            header('Locaion account.php');
            die('ok');
        }else{
            $_SESSION['flash']['danger'] = "Ce token n'est plus vallide";
            header('Location: login.php');
        }
    }

    public function connect($user)
    {
        $this->session->write($user);
    }

    public function login($username, $passord, $remember = false)
    {
        if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['passwprd'])){
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

    public function logout()
    {
        setcookie('remember', null, -1);
        $this->session->delete('auth');
    }

   
    public function homePage()
    {
        $this->view->render('homePage', null);
    }
}