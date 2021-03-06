<?php
declare(strict_types=1);
namespace Oc\Controller;
use Oc\Model\RegisterManager;
use Oc\Tools\Fonction;
use Oc\Tools\Request;
use Oc\Tools\Session;
use Oc\View\View;
class RegisterController
{
    private $view;
    private $session;
    private $registerManager;
    private $fonction;
    private $request;
    public function __construct()
    {
        $this->view = new View('../templates/frontoffice');
        $this->session = new session();
        $this->registerManager = new RegisterManager();
        $this->fonction = new Fonction($_POST);
        $this->request = new Request();
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
            'messages'=>$this->session->hasFlashes() ? $this->session->getFlashes() : null,
        ]);
    }
}
