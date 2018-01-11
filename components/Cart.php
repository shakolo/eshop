<?php

class Cart {
public static function addProduct($id)
    {
        // Приводим $id к типу integer
        $id = intval($id);
        // Пустой массив для товаров в корзине
        $productsInCart = array();
        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }
        // Проверяем есть ли уже такой товар в корзине 
        if (array_key_exists($id, $productsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $productsInCart[$id] ++;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1
            $productsInCart[$id] = 1;
        }
        // Записываем массив с товарами в сессию
        $_SESSION['products'] = $productsInCart;
        // Возвращаем количество товаров в корзине
//        unset($_SESSION['products']);
        echo '<pre>';print_r($_SESSION);die();
    }
}

