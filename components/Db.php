<?php

class Db {
    public static function getConnection(){
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']};charset={$params['charset']}", $params['user'], $params['password']);
        return $db;
    }
}
?>