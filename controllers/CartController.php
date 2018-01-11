<?php

class CartController {
    public function actionAdd($id) {
        Cart::addProduct($id);
        return true;
    }
}