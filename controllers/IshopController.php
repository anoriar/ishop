<?php

include_once ROOT. '/components/QueryManager.php';
include_once ROOT. '/models/Category.php';
include_once ROOT. '/models/Product.php';

class IshopController{
    
    public function actionIndex(){
        $catList = $this -> getCategoriesList();
        $lastProductList = $this ->getLastProductList();
        $recommendedProductList = $this ->getRecommendedProductList();
        require_once '/views/index.php';
        return true;
    }
    
    
    private function getCategoriesList() {
        $result = QueryManager::getQueryResult("SELECT * FROM category WHERE status = 1");
        while ($row = $result->fetch()) {
            $catList[] = new Category($row['id'], $row['name'], $row['sort_order'],  $row['status']);
        }
        return $catList;
    }
    
    private function getLastProductList() {
        $result = QueryManager::getQueryResult("SELECT * FROM product WHERE status = 1");
        while ($row = $result->fetch()) {
            $productList[] = new Product($row['id'], $row['name'], $row['category_id'],  $row['code'],
                    $row['price'], $row['availability'], $row['brand'], $row['image'], 
                    $row['description'], $row['is_new'], $row['is_recommended'], $row['status']);
        }
        return $productList;
    }
    
    private function getRecommendedProductList() {
        $result = QueryManager::getQueryResult("SELECT * FROM product WHERE status = 1 AND is_recommended = 1");
        while ($row = $result->fetch()) {
            $productList[] = new Product($row['id'], $row['name'], $row['category_id'],  $row['code'],
                    $row['price'], $row['availability'], $row['brand'], $row['image'], 
                    $row['description'], $row['is_new'], $row['is_recommended'], $row['status']);
        }
        return $productList;
    }
    
}