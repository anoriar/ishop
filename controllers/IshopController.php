<?php

include_once ROOT. '/models/Category.php';

class IshopController{
    
    public function actionIndex(){
        $catList = $this -> getCategoriesList();
        require_once '/views/index.php';
        return true;
    }
    
    
     private function getCategoriesList() {
        $con = Db::getConnection();
        $catList = array();
        $queryString = "SELECT * FROM category WHERE status = 1";
        $result = $con->query($queryString);
        while ($row = $result->fetch()) {
            $category = new Category($row['id'], $row['name'], $row['sort_order'],  $row['status']);
            $catList[] = $category;
        }
        return $catList;
    }
}