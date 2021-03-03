<?php
class Database
{
    private $productTable;
    private $categoryTable;
    private $accessoryTable;
    public function insertTable($table, $row)
    {
        // insert data row into the table with tablename = table
        return $this->$table[] = $row;
    }

    public function selectTable($table, $name)
    {
        $product = array();
        foreach ($this->$table as $value) {
            // get data has name = $name
            if ($value->getName() == $name) {
                $product[] = $value;
            }
        }
        return $product;
    }

    public function updateTable($table, $row)
    {
        $id = $row->getID();
        foreach ($this->$table as $key => $value) {
            if ($value->getID() == $id) {
                // find id of row = id of data
                return $this->$table[$key] = $row;
            }
        }
        return false;
    }

    public function deleteTable($table, $row)
    {
        $product = array();
        foreach ($this->$table as $key => $value) {
            if ($value->getID() == $row->getID()) {
                unset($this->$table[$key]);
            }
        }
        return $product;
    }

    public function truncateTable($db, $table)
    {
        foreach($db as $item){
            foreach ($this->$table as $item) {
                unset($this->$table);
            }
        }
        // return true;
    }

    public function getAllTable($table)
    {
        $product = array();
        foreach ($this->$table as $value) {
            $product[] = $value;
        }
        return $product;
    }
}
