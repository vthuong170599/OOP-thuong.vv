<?php 
include 'dao/Database.php';
class DatabaseDemo extends Database{
    protected $databaseTest;

    public function insertTableTest($table,$row){
        return $this->insertTable($table,$row);
    }

    public function selectTableTest($table,$name){
        return $this->selectTable($table,$name);
    }

    public function updateTableTest($table,$row){
        return $this->updateTable($table,$row);
    }

    public function deleteTableTest($table,$row){
        return $this->deleteTable($table,$row);
    }

    public function truncateTableTest($db,$table)
    {
        return $this->truncateTable($db,$table);
    }

    public function getAllTableTest($table){
        return $this->getAllTable($table);
    }
}