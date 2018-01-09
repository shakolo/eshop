<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Product {
        public static function getProducts() {
            $db = Db::getConnection();
            
            $productItem = array();
            
            $result = $db->query('SELECT id, title, parent, image, price  FROM products LIMIT 6');
            
            $i = 0;
            while($row = $result->fetch()){
                $productItem[$i]['id'] = $row['id'];
                $productItem[$i]['title'] = $row['title'];
                $productItem[$i]['parent'] = $row['parent'];
                $productItem[$i]['image'] = $row['image'];
                $productItem[$i]['price'] = $row['price'];
                $i++;
            }
            
            return $productItem;
        }
       public static function getProductByCategory($id) {
            $db = Db::getConnection();
            
            $productItem = array();
            
            $result = $db->query("SELECT id, title, parent, image, price FROM products WHERE parent = '$id' LIMIT 6");
            
            $i = 0;
            while($row = $result->fetch()){
                $productItem[$i]['id'] = $row['id'];
                $productItem[$i]['title'] = $row['title'];
                $productItem[$i]['parent'] = $row['parent'];
                $productItem[$i]['image'] = $row['image'];
                $productItem[$i]['price'] = $row['price'];
                $i++;
            }
            
            return $productItem;
        }
        public static function getProduct($id) {
            $db = Db::getConnection();
            
            $product = array();
            
            $result = $db->query("SELECT id, title, parent, image, price, content  FROM products WHERE id = '$id'");
            $result = $result->fetch();
                $product['id'] = $result['id'];
                $product['title'] = $result['title'];
                $product['parent'] = $result['parent'];
                $product['image'] = $result['image'];
                $product['price'] = $result['price'];
                $product['content'] = $result['content'];

            
            return $product;
        }
    }
    
?>