<?php

//mi ruta absoluta PERSONAL (cambiar)
require_once 'C:/xampp/htdocs/quarzo-backend/app/model/User/User.php';
    
class UserController{
    private $modelUser;

    public function registerUser(){
        //Llamar al metodo de mi clase User del modelo
        $this->modelUser = new User();
        $userObject = $this->modelUser;

        $username = '"camilo_nuevo"';
        $email = '"camilo@email.com"';
        $password = '"11111"';

        $result = $userObject->registerUser($username, $email, $password);
        return $result;

        //Tiene que devolver un JSON con un "1"
    }

    public function searchUser() {

        $this->modelUser = new User();
        $userObject = $this->modelUser;

        $username = '"camilo"';
        $password = '"231231"';

        $result = $userObject->searchUser($username, $password);

        if ($result) {
            return $result;
        } else {
            return "user or password doesn't exist";
        }
        
    }
}