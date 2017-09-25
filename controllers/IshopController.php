<?php

class IshopController{
    
    public function actionIndex(){
        require_once '/views/index.php';
        return true;
    }
}