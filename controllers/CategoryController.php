<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
class CategoryController {
    
    public function actionIndex($id) {
        $categories = array();
        $categories = Category::getCategoryList();
        
        $products = array();
        $products = Product::getProductByCategory($id);
        require_once ROOT.'/views/category/index.php';
        
        return true;
    }
}
?>