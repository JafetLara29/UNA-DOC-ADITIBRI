<?php
include './userbusiness.php';

if (isset($_POST['entrar'])) {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (strlen($username) > 0 && strlen($password) > 0) {

            if (!is_numeric($username)) {
                $userbusiness = new UserBusiness();
                $user = new User(0, $username, $password);
                //$result = $userbusiness->validateUsernamePassword($user);
                
                if ($user->getUsernameTBUser() == "admin" && $user->getPasswordTBUser() == "admin") {
                    header('Location:../view/localview.php'); 
                   
                } else {
                    header("location: ../view/loginview.php?error=userinvalid");
                }
            }
        } else {
            header("location: ../view/loginview.php?error=emptyField");
        }
    } else {
        header("location: ../view/loginview.php?error=error");
    }
}
