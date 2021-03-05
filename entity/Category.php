<?php 
require_once 'baseRow.php';
class Category extends BaseRow{
    // properties
    protected $id;
    protected $name;
    protected $status;

    // method
    public function __construct($id,$name,$status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
}