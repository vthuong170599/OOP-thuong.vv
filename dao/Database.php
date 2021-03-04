<?php
class Database
{
    private $productTable;
    private $categoryTable;
    private $accessoryTable;

    public function setCategoryTable($categoryTable){
        $this->categoryTable = $categoryTable;
    }

    public function insertTable($table, $row)
    {
        // insert data row into the table with tablename = table
        return $this->$table[] = $row;
    }

    public function selectTable($table, $name)
    {
        $tableName = array();
        foreach ($this->$table as $item) {
            // get data has name = $name
            if ($item->getName() == $name) {
                $tableName[] = $item;
            }
        }
        return $tableName;
    }

    public function updateTable($table, $row)
    {
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
        unset($this->$table);
    }

    public function printTable($table){
        foreach($this->$table as $item){
            echo 'ID: '.$item->getID().' Name: '.$item->getName().'<br>';
        }
    }

    public function getAllTable($table)
    {
        $tableName = array();
        foreach ($this->$table as $item) {
            $tableName[] = $item;
        }
        return $tableName;
    }

    public function updateTableByID($id,$row){
            
    }

    public function findByID($table,$id){
        foreach($this->$table as $item){
            if($item->getID() == $id){
                return $item;
            }
        }
        return false;
    }
}
