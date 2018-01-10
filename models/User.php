<?php

class User {
    public static function register($name, $email, $password) {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO user (name, email, password) '
                . 'VALUES ( :name, :email, :password)';
        
        $result = $db->prepare($sql);
        
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        
        return $result->execute();
    }

    public static function checkEmailExists($email) {
        
        $db = Db::getConnection();
        
        
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        
        if($result->fetchColumn())
            return true;
        return false;
        
        
    }

    public static function checkUserData($email, $password) {
        
    }

    public static function auth($userId) {
        
    }

}