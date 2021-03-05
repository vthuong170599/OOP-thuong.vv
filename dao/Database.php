<?php
require_once 'common/AutoLoad.php';
class Database
{
    private static $database;
    protected $productTable;
    protected $categoryTable;
    protected $accessoryTable;

    public static function createDatabase(){
        if(self::$database !== null){
            return self::$database;
        }
        self::$database = new Database();
        return self::$database;
    }

    public function insertTable($table, BaseRow $row)
    {
        // insert data row into the table with tablename = table
        if(!isValidTableName($table)){
            return false;
        }
        return $this->$table[] = $row;
    }

    public function selectTable($table, $name)
    {
        if(!isValidTableName($table)){
            return false;
        }
        $tableName = [];
        foreach ($this->$table as $item) {
            // get data has name = $name
            if ($item->getName() == $name) {
                $tableName[] = $item;
            }
        }
        return $tableName;
    }

    public function updateTable($table, BaseRow $row)
    {
        if(!isValidTableName($table) || !isValidEntity($row)){
            return false;
        }
        $id = $row->getID();
        foreach ($this->$table as $key => $item) {
            if ($item->getID() == $id) {
                // find id of row = id of data
                return $this->$table[$key] = $row;
            }
        }
        return false;
    }

    public function deleteTable($table, $id)
    {
        if(!isValidTableName($table)){
            return false;
        }
        // $tableName = array();
        foreach ($this->$table as $key => $item) {
            if ($item->getID() == $id) {
                unset($this->$table[$key]);
            }
        }
        return false;
    }

    public function truncateTable($table)
    {
        if(!isValidTableName($table)){
            return false;
        }
        $this->$table = [];
    }

    public function printTable($table)
    {
        foreach ($this->$table as $item) {
            echo 'ID: ' . $item->getID() . ' Name: ' . $item->getName() . '<br>';
        }
    }

    public function getAllTable($table)
    {
        if(!isValidTableName($table)){
            return false;
        }
        $tableName = array();
        foreach ($this->$table as $item) {
            $tableName[] = $item;
        }
        return $tableName;
    }

    public function updateTableByID($id, BaseRow $row, $table)
    {
        if(!isValidTableName($table) || !isValidEntity($row)){
            return false;
        }
        foreach ($this->$table as $key => $item) {
            if($item->getID() == $id){
                $this->$table[$key] = $row;
                return true;
            }
        }
        return false;
    }

    public function findByID($table, $id)
    {
        if(!isValidTableName($table)){
            return false;
        }
        foreach ($this->$table as $item) {
            if ($item->getID() == $id) {
                return $item;
            }
        }
        return false;
    }
}
