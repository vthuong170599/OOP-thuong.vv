<?php
require_once 'BaseDemo.php';
class ProductDaoDemo extends BaseDemo{

    public function __construct(ProductDAO $tableDao)
    {
        parent::__construct($tableDao);
    }
}