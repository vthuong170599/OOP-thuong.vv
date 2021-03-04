<?php 
require_once 'dao/Database.php';
class ProductDAO{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getDatabase():Database{
        return $this->database;
    }
    public function setDatabase($database){
        $this->database = $database;
    }

    public function insertRow($row)
    {
       return $this->database->insertTable('productTable',$row);
    }

    public function update($row)
    {
        return $this->database->updateTable('productTable', $row);
    }

    public function findAllCategory()
    {
        $productTable = $this->database->getAllTable('productTable');
        return $productTable;
    }

    public function Delete($id){
        $checkDelete = $this->database->deleteTable('productTable',$id);
        return $checkDelete ? false : true;
    }

    public function findByIDCategory($id){
        return $this->database->findByID('productTable',$id);
    }
}