<?php

include_once ROOT. '/models/CategoryManager.php';
include_once ROOT. '/models/ProductManager.php';

class CatalogController{
    
    public function actionIndex(){
        $catList = CategoryManager::getCategoriesList();
        $lastProductList = ProductManager::getLatestProductList(20);
        require_once '/views/catalog/index.php';
        return true;
    }
    
    public function actionCategory($category){
        $catList = CategoryManager::getCategoriesList();
        $productsByCategory = ProductManager::getProductsByCategory($category);
        require_once '/views/catalog/category.php';
        return true;
    }
}

