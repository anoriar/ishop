<?php

include_once ROOT. '/models/CategoryManager.php';
include_once ROOT. '/models/ProductManager.php';

class IshopController{
    
    public function actionIndex(){
        $catList = CategoryManager::getCategoriesList();
        $lastProductList = ProductManager::getLatestProductList();
        $recommendedProductList = ProductManager::getRecommendedProductList();
        require_once '/views/index.php';
        return true;
    }
}