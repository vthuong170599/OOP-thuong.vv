<?php 
require_once 'baseRow.php';
class Accessotion extends BaseRow{
    // properties
    protected $id;
    protected $name;
    protected $description;

    // method
    public function __construct($id,$name,$description)
    {
        parent::__construct($id,$name);
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }
}