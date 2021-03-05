<?php 
require_once 'entity/baseRow.php';
require_once 'Database.php';
require_once 'DaoInterface.php';
abstract class BaseDao implements DaoInterface{
    protected $tableName;
    protected $database;

    public function __construct(Database &$database)
    {
        $this->database = $database;
    }

    public function getDatabase(){
        return $this->database;
    }

    public function setDatabase($database){
        $this->database = $database;
    }

    public function getTableName(){
        return $this->tableName;
    }

    public function setTableName($tableName){
        $this->tableName = $tableName;
    }

    public function insert(BaseRow $row){
        return $this->database->insertTable($this->tableName, $row);
    }

    public function update($row)
    {
        return $this->database->updateTable($this->tableName, $row);
    }

    public function findAll()
    {
        $categoryTable = $this->database->getAllTable($this->tableName);
        return $categoryTable;
    }

    public function Delete($id){
        $checkDelete = $this->database->deleteTable($this->tableName,$id);
        return $checkDelete ? false : true;
    }

    public function findByID($id){
        return $this->database->findByID($this->tableName,$id);
    }

    public function findByName($name){
        return $this->database->selectTable($this->tableName,$name);
    }
}