<?php
declare(strict_types=1);

namespace Oc\Controller;

use Oc\Model\RegisterManager;
use Oc\View\View;

class RegisterController
{
    private $view;
    private $registerManager;

    public function __construct()
    {
        $this->view = new View('../templates/frontoffice');
        $this->registerManager = new RegisterManager();
    }

    public function register($post): void
    {
        $user = $this->registerManager->validation($post['username']);
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (empty($post['username']) || empty($post['name']) || empty($post['adresse']) || empty($post['adSup']) || empty($post['postal'])
            || empty($post['ville']) || empty($post['pays']) || empty($post['societe'])  || !preg_match('/^[a-zA-Zéèàï0-9._]+$/', $post['username'])) {
                $this->session->setFlash('danger', 'Tout les champs ne sont pas remplis');
            } elseif ($post['username'] === $user) {
                $this->session->setFlash('danger', 'Ce nom est déjà pris');
            } elseif (empty($post['email']) || !filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                $this->session->setFlash('danger', 'Votre email n\'est pas valide');
            } elseif (empty($post['password']) || $post['password'] !== $post['passwordConfirm']) {
                $this->session->setFlash('danger', 'Vous devez rentrer un mot de passe valide');
            } elseif (empty($post['phone']) || !preg_match('#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#', $post['phone'])) {
                $this->session->setFlash('danger', 'Vous devez rentrer un numéro de téléphone valide');
            }
        } else {
            $utilisateur = $this->registerManager->register(
                $post['username'],
                $post['name'],
                $post['adresse'],
                $post['adress_supp'],
                $post['postal'],
                $post['ville'],
                $post['pays'],
                $post['phone'],
                $post['societe'],
                $post['email'],
                $post['password']
            );
            if ($utilisateur === false) {
                $this->session->setFlash('danger', 'Impossible d\'éffectuer l\'inscription !');
            } else {
                $this->session->setFlash('success', "un email de confirmation vous a été envoyé pour validé votre compte ");
            }
            header('Location: index.php');
            exit();
        }

        $this->view->render('frontoffice/register', [
            'session'=> $this->session,
        ], null);
    }

    // génère une clef de 60 charactères
    public function string_random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return mb_substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }
}
