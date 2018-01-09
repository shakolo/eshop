<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController {
    
    public function actionCatalog($page = 1) {
        
        $categories = array();
        $categories = Category::getCategoryList();
        
        $products = array();
        $products = Product::getProducts($page);
        
        require_once ROOT.'/views/site/index.php';
        
        return true;
    }
    
    public function actionView($id) {
        
        $categories = array();
        $categories = Category::getCategoryList();
        
        $product = array();
        $product = Product::getProduct($id);
        
        require_once ROOT.'/views/site/view.php';
        
        return true;
    }
}
?>