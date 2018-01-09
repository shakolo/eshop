<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Product {
        public static function getProduct() {
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
    }
    
?>