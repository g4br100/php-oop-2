
<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {

private $productType   = 'Alimenti';
private $categoryIcon  = 'icona.png';
private $descripiton ; 


public function getType(){
    return $this->productType;
}
public function getIcon(){
    return $this->categoryIcon;
}
public function getDescription(){
    return $this->descripiton;
}

public function setDescription($_description){
    $this->descripiton = $_description;
}
}