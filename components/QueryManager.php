<?php

class QueryManager{
     public static function getQueryResult($queryString) {
        $con = Db::getConnection();
        $result = $con->query($queryString);
        return $result;
    }
}

