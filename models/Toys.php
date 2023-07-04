<?php
require_once __DIR__ . '/Product.php';

class Toys extends Product {

private $productType   = 'Giocattoli';
private $categoryIcon  = 'icona.png';


public function getType(){
    return $this->productType;
}
public function getIcon(){
    return $this->categoryIcon;
}


}