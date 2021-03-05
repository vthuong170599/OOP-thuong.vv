<?php 
// include 'entity/Product.php';
class ProductDemo{
    protected $productDemo;
    public function createProductTest(&$id,$name,$categoryID){
        // create data from product class
        return $this->productDemo = new Product($id++,$name,$categoryID);
    }

    public function PrintProduct(){
        echo 'ID: '. $this->productDemo->getID().' name: ' . $this->productDemo->getName(). ' categoryID: '. $this->productDemo->getCategoryID();
    }
}