<?php
require_once 'baseRow.php';
class Product extends BaseRow
{
    // properties
    protected $id;
    protected $name;
    protected $categoryID;

    //method
    public function __construct($id,$name,$categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryID = $categoryID;
    }

    public function getCategoryID(){
        return $this->categoryID;
    }

    public function setCategoryID($categoryID){
        $this->categoryID = $categoryID;
    }
    
}
