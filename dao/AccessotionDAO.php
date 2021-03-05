<?php 
require_once 'dao/Database.php';
require_once 'BaseDao.php';
class AccessotionDAO extends BaseDao implements DaoInterface{
    public function __construct($database)
    {
        parent::__construct($database);
        $this->tableName = 'accessoryTable';
    }
}
