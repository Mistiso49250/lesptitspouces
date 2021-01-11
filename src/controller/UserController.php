<?php

declare(strict_types=1);

namespace Oc\Controller;

use Oc\Tools\Request;
use Oc\Tools\Session;
use Oc\Tools\Fonction;
use Oc\Model\UserManager;
use Oc\Model\ArticleManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    private $session;
    private $fonction;
    private $request;
    private $user;

    public function __construct(Request $request, Session $session, UserManager $user)
    {
        $this->session = $session;
        $this->fonction = new Fonction($_POST);
        $this->request = $request;
        $this->user = $user;
    }

    /**
     * @Route("/", name="login")
     */
    public function login(): Response
    {
        $messageError = null;
        if ($this->user->user() !== null) {
            header('Location: index.php');
            exit();
        }
        if (!empty($this->request->postItem) && !empty($this->request->postItem['username']) && !empty($this->request->postItem['password'])) {
            $user = $this->user->auth(htmlspecialchars($this->request->postItem['username'], $this->request->postItem['password'], isset($this->request->postItem['remember'])));
            if ($user) {
                $this->session->setFlash('succes', 'vous etes maintenant connecté');

                header('Location: index.php?login=1');
                exit();
            }
            $this->session->setFlash('danger', 'identifiant ou de passe incorrect');
        }

        return $this->render('frontoffice/login', ['messageError' => $messageError]);
    }

    /**
     * @Route("/", name="register")
     */
    public function register($post): Response
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
            // $user = $this->userManager->validation($post['username']);
            // $userEmail = $this->userManager->validationEmail($post['email']);
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
            //         $utilisateur = $this->userManager->register(
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
            //             $clientId = $this->userManager->lastInsertId();
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
        return $this->render('frontoffice/register', [
            'messages' => $this->session->hasFlashes() ? $this->session->getFlashes() : null,
        ]);
    }

    /**
     * @Route("/", name="logout")
     */
    public function logout(): Response
    {
        $this->session->logout();
        header('Location: index.php');
        exit();
    }

    /**
     * @Route("/", name="forgetpassword")
     */
    public function forgetPassword(): Response
    {
        // if (!empty($_POST) && !empty($_POST['email'])) {
        //     if ($auth-- > resetPassword($db, $_POST['email'])) {
        //         $_SESSION['flash']['success'] = 'les instruction du rappel de mot de passe vous ont été envoyé par email';
        //         header('Location: login.php');
        //     } else {
        //         $_SESSION['flash']['dager'] = 'aucun compte ne correspond a cet adresse';
        //     }
        // }
        return $this->render('frontoffice/forgetPassword');
    }

    /**
     * @Route("/", name="account")
     */
    public function account(): Response
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
        return $this->render('frontoffice/account');
    }

    /**
     * @Route("/", name="resetpassword")
     */
    public function resetPassword(): Response
    {
        return $this->render('frontoffice/resetPassword');
    }

    /**
     * @Route("/", name="changepassword")
     */
    public function changePassword(): Response
    {
        return $this->render('frontoffice/changePassword');
    }
}
