<?php

declare(strict_types=1);

namespace Oc\Controller;

// use Oc\Tools\Session;
// use Oc\Model\UserManager;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    // private $session;
    // private $user;
    private $request;

    // public function __construct(Request $request, Session $session, UserManager $user)
    // {
    //     $this->session = $session;
    //     $this->request = $request;
    //     $this->user = $user;
    // }
    public function __construct()
    {
        // $this->request = $request;
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request): Response
    {
        if($request->getMethod() === 'POST'){
            // dd($request->request->all());
            return $this->redirectToRoute('homepage');
        }
        // $messageError = null;
        // if ($this->user->user() !== null) {
        //     header('Location: index.php');
        //     exit();
        // }
        // if (!empty($this->request->postItem) && !empty($request->request->get('username') && !empty($request->request->get('password'))) {
        //     $user = $this->user->auth(htmlspecialchars($request->request->get('username'), $request->request->get('password'), isset($request->request->get('remember'))));
        //     if ($user) {
        //         $this->session->setFlash('succes', 'vous etes maintenant connecté');

        //         return $this->redirectToRoute('homepage');
        //         header('Location: index.php?login=1');
        //         exit();
        //     }
        //     $this->session->setFlash('danger', 'identifiant ou de passe incorrect');
        // }

        return $this->render('frontoffice/login.html.twig', [
            'messageError' => 'toto'
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request): Response
    {
        $token = 'toto'; // $this->fonction->str_random(60);
        $clientId = null;
        if ($request->server->get('HTTP_HOST')) {
            if (
                empty($request->request->all()) ||
                !preg_match('/^[a-zA-Zéèàï0-9._]+$/', $request->request->get('username'))
            ) {
                $this->session->setFlash('danger', 'Tout les champs ne sont pas remplis');
            }
            // else {
            // $user = $this->userManager->validation($request->request->get('username'));
            // $userEmail = $this->userManager->validationEmail($request->request->get('email'));
            //         if ($utilisateur === false) {
            //             $this->session->setFlash('danger', 'Impossible d\'éffectuer l\'inscription !');
            //         } elseif ($request->request->get('username') === $user) {
            //             $this->session->setFlash('danger', 'Ce nom est déjà pris');
            //         } elseif (empty($request->request->get('email')) || !filter_var($request->request->get('email'), FILTER_VALIDATE_EMAIL)) {
            //             $this->session->setFlash('danger', 'Votre email n\'est pas valide');
            //         } elseif ($request->request->get('email') === $userEmail) {
            //             $this->session->setFlash('danger', 'Cet email est déjà utilisé pour un autre compte');
            //         } elseif (empty($request->request->get('password'))) {
            //             $this->session->setFlash('danger', 'Vous devez rentrer un mot de passe valide');
            //         } elseif ($request->request->get('password') !== $post['passwordConfirm']) {
            //             $this->session->setFlash('danger', 'Vos mot de passe ne corresponde pas');
            //         } elseif (empty($request->request->get('phone')) || !preg_match('#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#', $post['phone'])) {
            //             $this->session->setFlash('danger', 'Vous devez rentrer un numéro de téléphone valide');
            //         } else {
            //         $utilisateur = $this->userManager->register(
            //             $request->request->get('username'),
            //             $request->request->get('name'),
            //             $request->request->get('adresse'),
            //             $request->request->get('adress_supp'),
            //             $request->request->get('postal'),
            //             $request->request->get('ville'),
            //             $request->request->get('pays'),
            //             $request->request->get('phone'),
            //             $request->request->get('societe'),
            //             $request->request->get('email'),
            //             $request->request->get('password')
            //         );
            //             $clientId = $this->userManager->lastInsertId();
            //             mail($request->request->get('email'), 'Confirmation de votre compte', "Afin de valider votre compte, merci de cliquer sur ce lien\n\nhttp://localhost:8000/index.php?action=confirm&id=$clientId&token=$token");
            //             $this->session->setFlash('success', "un email de confirmation vous a été envoyé pour validé votre compte ");
            //             
            //             return $this->redirectToRoute('homepage');
            //             header('Location: index.php');
            //             exit();
            //         }
            //     }
        }
        // $this->session->setFlash('success', "un email de confirmation vous a été envoyé pour validé votre compte ");
        // $this->session->setFlash('success', "toto");
        // $this->session->setFlash('danger', "tata");
        // var_dump($this->session->getFlashes());die();
        return $this->render('frontoffice/register.html.twig', [
            'messages' => $this->session->hasFlashes() ? $this->session->getFlashes() : null,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): Response
    {
        $this->session->logout();
        header('Location: index.php');
        exit();
    }

    /**
     * @Route("/forgetpassword", name="forgetpassword")
     */
    public function forgetPassword(): Response
    {
        // if (!empty($request->request->get('')) && !empty($request->request->get('email'))) {
        //     if ($auth-- > resetPassword($db, $request->request->get('email'))) {
        //         $_SESSION['flash']['success'] = 'les instruction du rappel de mot de passe vous ont été envoyé par email';
        //         
        //         return $this->redirectToRoute('login');
        //         header('Location: login.php');
        //     } else {
        //         $_SESSION['flash']['dager'] = 'aucun compte ne correspond a cet adresse';
        //     }
        // }
        return $this->render('frontoffice/forgetPassword.html.twig');
    }

    /**
     * @Route("/account", name="account")
     */
    public function account(): Response
    {
        // if (!isset($_SESSION['auth'])) {
        //     $_SESSION['flash']['danger'] = "vous n'avez pas le droit d'accéder a cette page";
        //     exit();
        // }

        // if (!empty($_POST)) {
        //     if (empty(['password']) || $request->request->get('password') != $request->request->get('passwordConfirm')) {
        //         $_SESSION['flash']['danger'] = "Les mots de passe ne correspondent pas";
        //     } else {
        //         $user_id = $_SESSION['auth']->id;
        //         $password = password_hash($request->request->get('password'), PASSWORD_BCRYPT);
        //         $req = $pdo->prepare('update client set password= ? where id = ?')->execute(['password', $user_id]);
        //         $req->execute([$password]);
        //         $_SESSION['flash']['success'] = "votre mot de passe a bien été mis a jour";
        //     }
        // }
        return $this->render('frontoffice/account.html.twig');
    }

    /**
     * @Route("/resetpassword", name="resetpassword")
     */
    public function resetPassword(): Response
    {
        return $this->render('frontoffice/resetPassword.html.twig');
    }

    /**
     * @Route("/changepassword", name="changepassword")
     */
    public function changePassword(): Response
    {
        return $this->render('frontoffice/changePassword.html.twig');
    }
}
