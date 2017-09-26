<?php


class Product{
    
    private $id;
    private $name;
    private $category_id;
    private $code;
    private $price;
    private $availability;
    private $brand;
    private $image;
    private $description;
    private $is_new;
    private $is_recommended;
    private $status;
    
    function __construct($id, $name, $category_id, $code, $price, $availability, $brand, $image, $description, $is_new, $is_recommended, $status) {
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->code = $code;
        $this->price = $price;
        $this->availability = $availability;
        $this->brand = $brand;
        $this->image = $image;
        $this->description = $description;
        $this->is_new = $is_new;
        $this->is_recommended = $is_recommended;
        $this->status = $status;
    }
    
    function getId() {
        return $this->id;
    }

        
    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getAvailability() {
        return $this->availability;
    }
    
    function getCode() {
        return $this->code;
    }

    function getBrand() {
        return $this->brand;
    }

    function getImage() {
        return $this->image;
    }

    function getDescription() {
        return $this->description;
    }

    function is_new() {
        return $this->is_new;
    }

    function is_recommended() {
        return $this->is_recommended;
    }

}
