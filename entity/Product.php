<?php
class Product
{
    // properties
    private $id;
    private $name;
    private $categoryID;
    private $price;
    private $quantity;

    //method
    public function __construct($id,$name,$categoryID,$price,$quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryID = $categoryID;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getID(){
        return $this->id;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getCategoryID(){
        return $this->categoryID;
    }

    public function setCategoryID($categoryID){
        $this->categoryID = $categoryID;
    }
    
    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
}
