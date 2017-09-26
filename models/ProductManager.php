<?php

include_once ROOT. '/components/QueryManager.php';
include_once ROOT. '/models/Product.php';

class ProductManager{
    
    const LATEST_LIMIT_BY_DEFAULT = 9;
    
    public static function getProductList($query){
        while ($row = $query->fetch()) {
            $productList[] = new Product($row['id'], $row['name'], $row['category_id'],  $row['code'],
                    $row['price'], $row['availability'], $row['brand'], $row['image'], 
                    $row['description'], $row['is_new'], $row['is_recommended'], $row['status']);
        }
        return $productList;
    }
      
    public static function getLatestProductList($count = self::LATEST_LIMIT_BY_DEFAULT) {
        $result = QueryManager::getQueryResult("SELECT * FROM product WHERE status = 1 ORDER BY id DESC LIMIT " . $count);
        return (self::getProductList($result));
    }
    
    public static function getRecommendedProductList() {
        $result = QueryManager::getQueryResult("SELECT * FROM product WHERE status = 1 AND is_recommended = 1");
        return (self::getProductList($result));
    }
    
    public static function getProductsByCategory($category) {
        $result = QueryManager::getQueryResult("SELECT * FROM product WHERE category_id = " . $category . " AND status = 1 ORDER BY id DESC");
        return (self::getProductList($result));
    }
}

