<?php
declare(strict_types=1);

namespace Oc\Model;

use Oc\Tools\DbConnect;

class Validator
{
    // private $db;
    // private $data;
    // private $errors = [];

    // public function __construct($data){
    //     $this->db = (new DbConnect())->connectToDb();
    //     $this->data = $data;
    //     $this->error = $errors;
    // }

    // private function getField($field){
    //     if(!isset($this->data[$field])){
    //         return null;
    //     }
    //     return $this->data[$field];
    // }

    // public function isAlphanum($field, $errorMsg){
    //     if(!preg_match('/^[a-zA-Z0-9_]+$/', $this->getField[$field])){
    //         $this->$errors[$field] = $errorMsg;
    //     }
    // }

    // public function isUniq($field, $db, $table, $errorMsg){
    //     $req = $this->db->query('SELECT id FROM client WHERE $field = ?',[$this->getField[$field]]);
    //     $user = $req->fetch();
    //     if($user){
    //         $errors['username'] = 'Ce pseudo est déja pris';
    //     }
    // }

    // public function isEmail($field, $errorMsg){
    //     if(!filter_var($_Post['email'], FILTER_VALIDATE_EMAIL)){
    //         $this->$error[$field] = $errorMsg;
    //     }
    // }

    // public function isConfirmed($field, $errorMsg){
    //     if(empty($this->getField($field)) || $this->getField($field) != $this->getField($field, '_comfirmed')){
    //         $this->$error[$field] = $errorMsg;
    //     }
    // }

    // public function isValid(){
    //     return empty($this->errors);
    // }

    // public function getErrors(){
    //     return $this->errors;
    // }


}