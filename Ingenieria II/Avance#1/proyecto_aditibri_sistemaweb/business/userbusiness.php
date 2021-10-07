<?php
include '../data/userdata.php';
class UserBusiness{

    private $userdata;

    public function __construct()
    {
        $this->userdata = new UserData();
    }

    public function  validateUsernamePassword($user){
        return $this->userdata->validateUsernamePassword($user);
    }
}