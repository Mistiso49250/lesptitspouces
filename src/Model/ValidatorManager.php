<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;
use Oc\Tools\Session;

class ValidatorManager
{
    private $db;
    private $data;
    private $session;
    // private $errors = [];

    public function __construct($data)
    {
        $this->db = (new DbConnect())->connectToDb();
        $this->data = $data;
        $this->session = new session();
        // $this->error = $errors;
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
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $this->getField[$field])) {
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
}
