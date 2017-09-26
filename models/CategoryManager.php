<?php

include_once ROOT. '/components/QueryManager.php';
include_once ROOT. '/models/Category.php';

class CategoryManager{
    
    public static function getCategoriesList() {
        $result = QueryManager::getQueryResult("SELECT * FROM category WHERE status = 1");
        while ($row = $result->fetch()) {
            $catList[] = new Category($row['id'], $row['name'], $row['sort_order'],  $row['status']);
        }
        return $catList;
    }
   
}
