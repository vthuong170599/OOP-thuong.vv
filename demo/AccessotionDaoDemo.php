<?php
require_once 'BaseDemo.php';
class AccessoionDaoDemo extends BaseDemo{
    public function __construct(AccessotionDAO $tableDao)
    {
        parent::__construct($tableDao);
    }
}