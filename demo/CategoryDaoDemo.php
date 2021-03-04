<?php
require_once 'dao/CategoryDAO.php';
class CategoryDaoDemo extends CategoryDAO{
    public function insertTest($row){
        return $this->insertRow($row);
    }
}