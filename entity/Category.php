<?php 
class Category{
    // properties
    private $id;
    private $name;
    private $status;

    // method
    public function __construct($id,$name,$status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
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

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
}