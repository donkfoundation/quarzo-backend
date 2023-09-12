<?php

//mi ruta absoluta PERSONAL (cambiar)
require_once 'C:/xampp/htdocs/quarzo-backend/app/model/User/User.php';
    
class UserController{
    private $modelUser;

    public function registerUser(){
        //Llamar al metodo de mi clase User del modelo
        $this->modelUser = new User();
        $userObject = $this->modelUser;

        $user = '"camilo"';
        $email = '"camilo@email.com"';
        $password = '"231231"';

        $result = $userObject->registerUser($user, $email, $password);

        return $result;

        //Tiene que devolver un JSON con un "1"
    }
}