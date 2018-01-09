<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController {
    
    public function actionIndex() {
        
        $categories = array();
        $categories = Category::getCategoryList();
        
        $products = array();
        $products = Product::getProduct();
        
        require_once ROOT.'/views/site/index.php';
        
        return true;
    }
}
?>