<?php
declare(strict_types=1);

namespace Oc\Tools;

use Oc\Tools\DbConnect;
use Oc\Tools\Request;
use Oc\Tools\Session;

class Fonction
{
    private $data;
    private $session;
    private $request;
    private $db;

    public function __construct($data)
    {
        $this->db = (new DbConnect())->connectToDb();
        $this->data = $data;
        $this->session = new session();
        $this->request = new Request();
    }

    // génère une clef de 60 charactères
    public function str_random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return mb_substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

    private function getField($field)
    {
        if (!isset($this->data[$field])) {
            return null;
        }
        return $this->data[$field];
    }

    public function isAlphanum($field): void
    {
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $this->getField([$field]))) {
            $this->session->setFlash('danger', 'Tout les champs ne sont pas remplis correctement');
        }
    }

    public function isEmail($field): void
    {
        if (!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)) {
            $this->session->setFlash('danger', 'Cet email est déjà utilisé pour un autre compte');
        }
    }

    public function isConfirmed($field): void
    {
        if (empty($this->getField($field)) || $this->getField($field) !== $this->getField($field, 'passwordConfirm')) {
            $this->session->setFlash('danger', 'Vous devez rentrer un mot de passe valide');
        }
    }

    public function isValid()
    {
        return empty($this->session);
    }

    public function isUniq($field): void
    {
        $req = $this->db->query('SELECT id_client FROM client WHERE $field = ?', [$this->getField($field)]);
        $user = $req->fetch();
        if ($user) {
            $this->session->setFlash('danger', 'Ce pseudo est déja pris');
        }
    }

    public function confirm($userId, $token): void
    {
        $user = $this->db->query('SELECT * from client where id_client = :idClient', [$userId])->fetch();
        if ($user && $user->confirmation_token === $token) {
            $this->db->query('UPDATE client set confirmation_token = null, confirmed_at = now() where id_client = :idClien', [$userId])->fetch();
        }
    }

    public function confirmEmail($userId)
    {
        $req = $this->db->prepare('SELECT confirmation_token from client where id_client = :idClient');
        $req->execute(['userId'=>$userId]);

        $user = $req->fetch();
        return $user;
    }

    public function confirmAccount(): void
    {
        // $userConfirm = $this->registerManager->confirm();
        if ($this->request->confirm()) {
            $this->session->setFlash('success', "Votre compte a bien été validé ");
            header('Location: index.php');
            exit();
        }
        $this->session->setFlash('danger', 'Validation incorrecte');
        header('Location: index.php');
        exit();
    }
}
