<?php
require_once 'BaseDemo.php';
class CategoryDaoDemo extends BaseDemo{

    public function __construct(CategoryDAO $tableDao)
    {
        parent::__construct($tableDao);
    }
}