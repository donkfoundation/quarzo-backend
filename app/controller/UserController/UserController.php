<?php
require_once '../model/User.php';

class UserController{
    private $user;

    public function registerUser(){
        //Llamar al metodo de mi clase User del modelo
        $this->user = new User();
        $userObject = $this->user;

        $user = "felipe";
        $email = "email@email.com";
        $password = "123456";

        $result = $userObject->registerUser($user, $email, $password);

        //Tiene que devolver un JSON con un "1"
        
    }
}