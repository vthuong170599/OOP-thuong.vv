<?php 
abstract class BaseDemo{
    protected $tableDao;

    public function __construct($tableDao)
    {
        $this->tableDao = $tableDao;
    }
    
    public function insertTest($row){
        return $this->tableDao->insert($row);
    }

    public function findAllTest(){
        return $this->tableDao->findAll();
    }

    public function updateTest($row){
        return $this->tableDao->update($row);
    }

    public function DeleteTest($id){
        return $this->tableDao->Delete($id);
    }

    public function findByIDTest($id){
        return $this->tableDao->findByID($id);
    }

    public function findByNameTest($name)
    {
        return $this->tableDao->findByName($name);
    }
}