<?php 
interface DaoInterface{
    public function insert(BaseRow $row);
    public function update(BaseRow $row);
    public function findAll();
    public function Delete($id);
    public function findByID($id);
    public function findByName($name);
}