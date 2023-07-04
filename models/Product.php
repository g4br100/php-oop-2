<?php

class Product {

    public $productName;
    public $productPrice;
    public $categories; # Cane/Gatto
    public $productImage ;

    function __construct($_productName){
        $this->productName   = $_productName;
    }

    #SETTER
    public function setPrice($_price){
        $this->productPrice = $_price;
    }

    public function setCategories($_categories){
        $this->categories = $_categories;
    }

    public function setProductImg($_img){
        $this->productImage = $_img;
    }

    #GETTER
    public function getPrice(){
        return $this->productPrice;
    }
    public function getCategories(){
        return $this->categories;
    }
    public function getProductImg(){
        return $this->productImage;
    }
}