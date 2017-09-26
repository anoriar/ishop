<?php

class Category {

    private $id;
    private $name;
    private $sort_order;
    private $status;

    function __construct($id, $name, $sort_order, $status) {
        $this->id = $id;
        $this->name = $name;
        $this->sort_order = $sort_order;
        $this->status = $status;
    }

    function getName() {
        return $this->name;
    }
    
    function getId() {
        return $this->id;
    }

}
