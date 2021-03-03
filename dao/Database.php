<?php
class Database
{
    private $productTable;
    private $categoryTable;
    private $accessoryTable;
    public function insertTable($table, $row)
    {
        return $this->$table[] = $row;
    }

    public function selectTable($table, $name)
    {
        $product = array();
        foreach ($this->$table as $value) {
            if ($value->getName() == $name) {
                $product[] = $value;
            }
        }
        return $product;
    }

    public function updateTable($table, $row)
    {
        $id = $row->getID();
        foreach($this->$table as $key => $value){
            if($value->getID() == $id){
               return $this->$table[$key] = $row;
            }
        }
        return false;
    }

    public function deleteTable($table, $row)
    {
    }

    public function truncateTable($table)
    {
    }
    
    public function getAllProduct($table){
        $product = array();
        foreach($this->$table as $value){
            $product[] = $value;
        }
        return $product;
    }
}
