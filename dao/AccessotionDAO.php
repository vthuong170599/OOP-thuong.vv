<?php 
require_once 'dao/Database.php';
class AccessotionDAO{
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
       return $this->database->insertTable('accessoryTable',$row);
    }

    public function update($row)
    {
        return $this->database->updateTable('accessoryTable', $row);
    }

    public function findAllCategory()
    {
        $accessoryTable = $this->database->getAllTable('accessoryTable');
        return $accessoryTable;
    }

    public function Delete($id){
        $checkDelete = $this->database->deleteTable('accessoryTable',$id);
        return $checkDelete ? false : true;
    }

    public function findByIDCategory($id){
        return $this->database->findByID('accessoryTable',$id);
    }

    public function findByName($name){
        return $this->database->selectTable('accessoryTable',$name);
    }
}
