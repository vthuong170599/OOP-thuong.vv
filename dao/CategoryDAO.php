<?php
require_once 'entity/Category.php';
require_once 'dao/Database.php';
class CategoryDAO
{
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
       return $this->database->insertTable('categoryTable',$row);
    }

    public function update($row)
    {
        return $this->database->updateTable('categoryTable', $row);
    }

    public function findAllCategory()
    {
        $categoryTable = $this->database->getAllTable('categoryTable');
        return $categoryTable;
    }

    public function Delete($id){
        $checkDelete = $this->database->deleteTable('categoryTable',$id);
        return $checkDelete ? false : true;
    }

    public function findByIDCategory($id){
        return $this->database->findByID('categoryTable',$id);
    }
    
}
