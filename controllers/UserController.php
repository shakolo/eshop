<?php

class UserController {
    public function actionRegister() {
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            
            if(User::checkEmailExists($email)) {
                echo 'EROORE';
            }
            
            $result = User::register($name, $email, $password);
        }
        
        require_once (ROOT . '/views/user/register.php');
        return true;
    }
}

