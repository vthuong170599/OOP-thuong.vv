<?php 
class Accessotion{
    // properties
    private $id;
    private $name;
    private $description;

    // method
    public function __construct($id,$name,$description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
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

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }
}