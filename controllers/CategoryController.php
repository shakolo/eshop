<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
class CategoryController {
    
    public function actionIndex($id, $page = 1) {
        echo $id;
        echo '<br>'.$page;
        $categories = array();
        $categories = Category::getCategoryList();
        
        $products = array();
        $products = Product::getProductByCategory($id, $page);
        require_once ROOT.'/views/category/index.php';
        
        return true;
    }
}
?>