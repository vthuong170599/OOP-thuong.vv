<?php 
include 'entity/Product.php';
class ProductDemo{
    protected $productDemo;
    public function createProductTest(&$id,$name,$categoryID,$price,$quantity){
        // create data from product class
        return $this->productDemo = new Product($id++,$name,$categoryID,$price,$quantity);
    }

    public function PrintProduct(){
        echo 'ID: '. $this->productDemo->getID().' name: ' . $this->productDemo->getName(). ' categoryID: '. $this->productDemo->getCategoryID(). ' price: '.$this->productDemo->getPrice().' quantity: '.$this->productDemo->getQuantity();
    }
}