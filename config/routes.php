<?php
return array( 
   
    'category/([0-9]+)/page-([0-9]+)' => 'category/index/$1/$2',
    'category/([0-9]+)' => 'category/index/$1',
    'view/([0-9]+)' => 'site/view/$1',
     'catalog/page-([0-9]+)' => 'site/catalog/$1',
     'page-([0-9]+)' => 'site/catalog/$1',
    'user/register' => 'user/register', 
    'user/login' => 'user/login', 
    'user/logout' => 'user/logout', 
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cabinet' => 'cabinet/index', 
     '' => 'site/catalog',
//    'test2/news/([0-9]+)' => 'news/view/$1',
//    'test2/news' => 'news/index',
//    'news' => 'news/index',
    
//    'test2/products' => 'product/list',
//    'test2' => 'test2/index'
);

?>