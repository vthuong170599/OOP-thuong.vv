<?php 
include 'demo/DatabaseDemo.php';
require_once 'common/kenel.php';


$dbDemo = new DatabaseDemo();
$db = Database::createDatabase();
$productDemo = new ProductDemo();
$productDao = new ProductDAO($db);
$category = new CategoryDAO($db);
$accessotionDao = new AccessotionDAO($db);
$categoryDaoDemo = new CategoryDaoDemo($category);
$productDaoDemo = new ProductDaoDemo($productDao);
$accessotionDaoDemo = new AccessoionDaoDemo($accessotionDao);
// $product = new Product(2,'as',1,2222,2);
$id =1;


// $category->insert(new Category(1,'asd',2));
// $category->insert(new Category(2,'thuong',2));
// $category->insert(new Category(3,'ahdshas',2));
// echo '<pre>';
// var_dump($category->findAll());
// echo '<pre>';

// $category->update(new Category(2,'uuxgaxgjaia',484848));

// echo '<pre>';
// var_dump($category->findAll());
// echo '<pre>';

$categoryDaoDemo->insertTest(new Category(1,'as',1));
echo '<pre>';
var_dump($categoryDaoDemo->findAllTest());
echo '<pre>';
