<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Category {
        public static function getCategoryList() {
            $db = Db::getConnection();
            
            $categoryList = array();
            
            $result = $db->query('SELECT id, title FROM categories');
            
            $i = 0;
            while($row = $result->fetch()){
                $categoryList[$i]['id'] = $row['id'];
                $categoryList[$i]['title'] = $row['title'];
                $i++;
            }
            
            return $categoryList;
        }
    }
    
?>