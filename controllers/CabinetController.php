<?php

class CabinetController {
    public function actionIndex() {
        
        $userId = User::checkLogged();
        echo 'xe? '. $userId;
        require_once ROOT . '/views/cabinet/index.php';
        return true;
    }
}

