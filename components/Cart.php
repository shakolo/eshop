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
//        $_SESSION['products'][$id] = 1;
        $_SESSION['products'] = $productsInCart;
        // Возвращаем количество товаров в корзине
//        unset($_SESSION['products']);
//        echo '<pre>';print_r($_SESSION);die();
        return self::countItems();
    }
    
     public static function countItems()
    {
        // Проверка наличия товаров в корзине
        if (isset($_SESSION['products'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
    }

}

