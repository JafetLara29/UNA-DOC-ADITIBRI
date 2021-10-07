<?php

class User{

    private $idTBUser;
    private $usernameTBUser;
    private $passwordTBUser;

    public function __construct($idTBUser,$usernameTBUser,$passwordTBUser)
    {
        $this->idTBUser = $idTBUser;
        $this->usernameTBUser = $usernameTBUser;
        $this->passwordTBUser = $passwordTBUser;
    }

    public function getIdTBUser(){
        return $this->idTBUser;
    }
  
    public function setUsernameTBUser($usernameTBUser){
        $this->usernameTBUser = $usernameTBUser;
    }

    public function getUsernameTBUser(){
        return $this->usernameTBUser;
    }

    public function setPasswordTBUser($passwordTBUser){
        return $this->passwordTBUser = $passwordTBUser;
    }

    public function getPasswordTBUser(){
        return $this->passwordTBUser;
    }

}