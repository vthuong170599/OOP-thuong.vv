<?php
include 'dao/Database.php';
require_once 'entity/Product.php';
include 'entity/Category.php';
include 'entity/Accessotion.php';
class DatabaseDemo extends Database
{
    protected $databaseTest;

    public function insertTableTest($table, $row)
    {
        return $this->insertTable($table, $row);
    }

    public function selectTableTest($table, $name)
    {
        return $this->selectTable($table, $name);
    }

    public function updateTableTest($table, $row)
    {
        return $this->updateTable($table, $row);
    }

    public function deleteTableTest($table, $row)
    {
        return $this->deleteTable($table, $row);
    }

    public function truncateTableTest($table)
    {
        return $this->truncateTable($table);
    }

    public function getAllTableTest($table)
    {
        return $this->getAllTable($table);
    }

    public function initDatabase()
    {
        $amountRecord = 10;
        for ($i = 0; $i < $amountRecord; $i++) {
            $this->insertTableTest('productTable', new Product($i, uniqid(), rand(1,10)));
            $this->insertTableTest('categoryTable', new Category($i,  uniqid(), rand(1,10)));
            $this->insertTableTest('accessoryTable', new Accessotion($i,  uniqid(), rand(1,10)));
        }
    }

    public function printTableTest($table)
    {
        $tableName = $this->getAllTable($table);
        foreach ($tableName as $item) {
            echo 'ID: ' . $item->getID() . ' Name: ' . $item->getName() . '<br>';
        }
    }
}
