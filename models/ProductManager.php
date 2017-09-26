<?php

include_once ROOT. '/components/QueryManager.php';
include_once ROOT. '/models/Product.php';

class ProductManager{
    
    const LATEST_LIMIT_BY_DEFAULT = 9;
    
    public static function getProductList($queryResult){
        while ($row = $queryResult->fetch()) {
            $productList[] = new Product($row['id'], $row['name'], $row['category_id'],  $row['code'],
                    $row['price'], $row['availability'], $row['brand'], $row['image'], 
                    $row['description'], $row['is_new'], $row['is_recommended'], $row['status']);
        }
        return $productList;
    }
    
    public static function getProductById($id){
        $queryResult = QueryManager::getQueryResult("SELECT * FROM product WHERE id = " . $id . " LIMIT 1");
        $resultList = self::getProductList($queryResult);
        if(count($resultList) == 1)
            return $resultList[0];
        else
            return null;
    }
      
    public static function getLatestProductList($count = self::LATEST_LIMIT_BY_DEFAULT) {
        $queryResult = QueryManager::getQueryResult("SELECT * FROM product WHERE status = 1 ORDER BY id DESC LIMIT " . $count);
        return (self::getProductList($queryResult));
    }
    
    public static function getRecommendedProductList() {
        $queryResult = QueryManager::getQueryResult("SELECT * FROM product WHERE status = 1 AND is_recommended = 1");
        return (self::getProductList($queryResult));
    }
    
    public static function getProductsByCategory($category) {
        $queryResult = QueryManager::getQueryResult("SELECT * FROM product WHERE category_id = " . $category . " AND status = 1 ORDER BY id DESC");
        return (self::getProductList($queryResult));
    }
}

