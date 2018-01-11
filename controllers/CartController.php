<?php

class CartController {
    public function actionAdd($id) {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
        return true;
    }
    public function actionAddAjax($id) {
        echo Cart::addProduct($id);

        return true;
    }
}