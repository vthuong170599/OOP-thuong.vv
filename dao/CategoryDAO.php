<?php
require_once 'BaseDao.php';
require_once 'dao/Database.php';
class CategoryDAO extends BaseDao implements DaoInterface
{
    public function __construct($database)
    {
        parent::__construct($database);
        $this->tableName = 'categoryTable';
    }
    
}
