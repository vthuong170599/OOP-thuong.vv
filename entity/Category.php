<?php 
class Category{
    // properties
    private $id;
    private $name;
    private $status;

    // method
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