<?php
require_once 'dao/CategoryDAO.php';
class CategoryDaoDemo extends CategoryDAO{

    public function insertTest($row){
        return $this->insertRow($row);
    }

    public function findAllTest(){
        return $this->findAllCategory();
    }

    public function updateTest($row){
        return $this->update($row);
    }

    public function DeleteTest($id){
        return $this->Delete($id);
    }

    public function findByIDTest($id){
        return $this->findByIDCategory($id);
    }
}