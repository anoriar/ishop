<?php

include_once ROOT. '/models/CategoryManager.php';
include_once ROOT. '/models/ProductManager.php';

class ProductController{
    
    public function actionDetails($productId){
        $catList = CategoryManager::getCategoriesList();
        $product = ProductManager::getProductById($productId);
        require_once '/views/product/details.php';
        return true;
    }
}