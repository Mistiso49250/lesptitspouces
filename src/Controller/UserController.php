<?php

declare(strict_types=1);

namespace Oc\Controller;

use Oc\View\View;
use Oc\Tools\Request;
use Oc\Tools\Session;
use Oc\Tools\Fonction;
use Oc\Model\ArticleManager;
use Oc\Model\HomePageManager;
use Oc\Model\RegisterManager;

class UserController
{
    private $view;
    private $homePageManager;
    private $session;
    private $registerManager;
    private $fonction;
    private $request;

    public function __construct(RegisterManager $registerManager, Request $request, Session $session, HomePageManager $homePageManager)
    {
        $this->view = new View('../templates/frontoffice/');
        $this->session = $session;
        $this->homePageManager = $homePageManager;
        $this->registerManager = $registerManager;
        $this->fonction = new Fonction($_POST);
        $this->request = $request;
    }

    public function login(): void
    {
        $messageError = null;
        if ($this->homePageManager->user() !== null) {
            header('Location: index.php');
            exit();
        }
        if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
            $user = $this->homePageManager->auth(htmlspecialchars($_POST['username'], $_POST['password'], isset($_POST['remember'])));
            if ($user) {
                $this->session->setFlash('succes', 'vous etes maintenant connecté');

                header('Location: index.php?login=1');
                exit();
            }
            $this->session->setFlash('danger', 'identifiant ou de passe incorrect');
        }

        $this->view->render('frontoffice/login', ['messageError' => $messageError]);
    }

    public function register($post): void
    {
        $token = $this->fonction->str_random(60);
        $clientId = null;
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (
                empty($post['username']) || empty($post['name']) || empty($post['adresse']) || empty($post['adress_supp']) ||
                empty($post['postal']) || empty($post['ville']) || empty($post['pays']) || empty($post['societe']) ||
                !preg_match('/^[a-zA-Zéèàï0-9._]+$/', $post['username'])
            ) {
                $this->session->setFlash('danger', 'Tout les champs ne sont pas remplis');
            }
            // else {
            // $user = $this->registerManager->validation($post['username']);
            // $userEmail = $this->registerManager->validationEmail($post['email']);
            //         if ($utilisateur === false) {
            //             $this->session->setFlash('danger', 'Impossible d\'éffectuer l\'inscription !');
            //         } elseif ($post['username'] === $user) {
            //             $this->session->setFlash('danger', 'Ce nom est déjà pris');
            //         } elseif (empty($post['email']) || !filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            //             $this->session->setFlash('danger', 'Votre email n\'est pas valide');
            //         } elseif ($post['email'] === $userEmail) {
            //             $this->session->setFlash('danger', 'Cet email est déjà utilisé pour un autre compte');
            //         } elseif (empty($post['password'])) {
            //             $this->session->setFlash('danger', 'Vous devez rentrer un mot de passe valide');
            //         } elseif ($post['password'] !== $post['passwordConfirm']) {
            //             $this->session->setFlash('danger', 'Vos mot de passe ne corresponde pas');
            //         } elseif (empty($post['phone']) || !preg_match('#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#', $post['phone'])) {
            //             $this->session->setFlash('danger', 'Vous devez rentrer un numéro de téléphone valide');
            //         } else {
            //         $utilisateur = $this->registerManager->register(
            //             $post['username'],
            //             $post['name'],
            //             $post['adresse'],
            //             $post['adress_supp'],
            //             $post['postal'],
            //             $post['ville'],
            //             $post['pays'],
            //             $post['phone'],
            //             $post['societe'],
            //             $post['email'],
            //             $post['password']
            //         );
            //             $clientId = $this->registerManager->lastInsertId();
            //             mail($post['email'], 'Confirmation de votre compte', "Afin de valider votre compte, merci de cliquer sur ce lien\n\nhttp://localhost:8000/index.php?action=confirm&id=$clientId&token=$token");
            //             $this->session->setFlash('success', "un email de confirmation vous a été envoyé pour validé votre compte ");
            //             header('Location: index.php');
            //             exit();
            //         }
            //     }
        }
        // $this->session->setFlash('success', "un email de confirmation vous a été envoyé pour validé votre compte ");
        // $this->session->setFlash('success', "toto");
        // $this->session->setFlash('danger', "tata");
        // var_dump($this->session->getFlashes());die();
        $this->view->render('frontoffice/register', [
            'messages' => $this->session->hasFlashes() ? $this->session->getFlashes() : null,
        ]);
    }


    public function logout(): void
    {
        $this->session->logout();
        header('Location: index.php');
        exit();
    }


    public function forgetPassword(): void
    {
        // if (!empty($_POST) && !empty($_POST['email'])) {
        //     if ($auth-- > resetPassword($db, $_POST['email'])) {
        //         $_SESSION['flash']['success'] = 'les instruction du rappel de mot de passe vous ont été envoyé par email';
        //         header('Location: login.php');
        //     } else {
        //         $_SESSION['flash']['dager'] = 'aucun compte ne correspond a cet adresse';
        //     }
        // }
        $this->view->render('frontoffice/forgetPassword', null);
    }

    // public function register(): void
    // {
    //     $this->view->render('frontoffice/register', null);
    // }

    public function account(): void
    {
        // if (!isset($_SESSION['auth'])) {
        //     $_SESSION['flash']['danger'] = "vous n'avez pas le droit d'accéder a cette page";
        //     exit();
        // }

        // if (!empty($_POST)) {
        //     if (empty(['password']) || $_POST['password'] != $_POST['passwordConfirm']) {
        //         $_SESSION['flash']['danger'] = "Les mots de passe ne correspondent pas";
        //     } else {
        //         $user_id = $_SESSION['auth']->id;
        //         $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        //         $req = $pdo->prepare('update client set password= ? where id = ?')->execute(['password', $user_id]);
        //         $req->execute([$password]);
        //         $_SESSION['flash']['success'] = "votre mot de passe a bien été mis a jour";
        //     }
        // }
        $this->view->render('frontoffice/account', null);
    }

    public function resetPassword(): void
    {
        $this->view->render('frontoffice/resetPassword', null);
    }

    public function changePassword(): void
    {
        $this->view->render('frontoffice/changePassword', null);
    }
}
