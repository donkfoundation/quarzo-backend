<?php
require_once '../connection/DataBase.php';

class User {
    private $id;
    private $username;
    private $email;
    private $password;

    //Getters y Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    //Función para obtener los datos de un usuario en concreto
    public function registerUser($user, $email ,$password){
        $database = new DataBase(); //Ponen los datos de la base de datos
        $database->executeQuery("Consulta");

        //Resultado de la consulta se tiene que retornar
    }
}