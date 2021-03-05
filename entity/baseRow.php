<?php 
require_once 'EntityInterface.php';
abstract class BaseRow{
    protected $id;
    protected $name;

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

}