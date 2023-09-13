<?php

//mi ruta absoluta PERSONAL (cambiar)
require_once 'C:/xampp/htdocs/quarzo-backend/app/connection/DataBase.php';

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
    public function registerUser($username, $email, $password){
        $database = new DataBase(); //Ponen los datos de la base de datos
        $result = $database->executeQuery("INSERT INTO Users(username, email, password) VALUES($username, $email, $password)");
        return $result;
        //Resultado de la consulta se tiene que retornar
    }

    public function searchUser($username, $password) {
        $database = new DataBase();
        $result = $database->executeQuery("SELECT user_id from Users where username=$username AND password=$password");
        return $result->fetch_assoc();
    }
}