<?php 
// include 'entity/Product.php';
include 'demo/ProductDemo.php';
include 'demo/DatabaseDemo.php';
require_once 'dao/Database.php';
require_once 'demo/CategoryDaoDemo.php';
require_once 'entity/Product.php';
require_once 'demo/CategoryDaoDemo.php';
require_once 'dao/CategoryDAO.php';


$dbDemo = new DatabaseDemo();
$db = new Database();
$categoryDaoDemo = new CategoryDaoDemo($db);
$productDemo = new ProductDemo();
$category = new CategoryDAO($db);
// $product = new Product(2,'as',1,2222,2);
$id =1;
// $product = array();
// $product->setName('thuong');
// $data = $productDemo->createProductTest($id,'thuong',2,1000,1);
// $data2 = $productDemo->createProductTest($id,'abc',2,1000,1);
// $data3 = $productDemo->createProductTest($id,'abasdasdsadc',2,2000,1);
// $productDemo->PrintProduct();

// $table = $db->insertTable('productTable',$data);
// $table = $db->insertTable('productTable',$data2);
// $table = $db->insertTable('productTable',$data3);
// var_dump($db->findAll('productTable',3));

// var_dump($table);

// var_dump($dbDemo->updateTable('productTable','abc'));

// $dbDemo->initDatabase();

// echo '<pre>';
// print_r($dbDemo->printTableTest('accessoryTable'));
// echo '<pre>';

// var_dump($dbDemo->truncateTableTest('productTable'));

// echo '<pre>';
// print_r($dbDemo);
// echo '<pre>';


// var_dump($category->insertRow(new Category(1,'sa',1)));
// echo '<br>';
// var_dump($category->insertRow(new Category(2,'thuong',3)));
// echo '<br>';
// var_dump($category->insertRow(new Category(3,'agsdahsbzxvcjh',10)));
// echo '<br>';

$category->insertRow(new Category(1,'sa',1));
$category->insertRow(new Category(2,'thuong',3));
$category->insertRow(new Category(3,'agsdahsbzxvcjh',10));

echo '<pre>';
var_dump($category);
echo '<pre>';

// var_dump($category->Delete(2));

// echo '<pre>';
// var_dump($category);
// echo '<pre>';
// echo '<pre>';
// var_dump($category);
// echo '<pre>';

// var_dump($category->findByIDCategory(2));

// echo '<pre>';
// var_dump($category);
// echo '<pre>';
// echo $db->deleteTable('productTable',1);

// $categoryDaoDemo->insertTest(new Category(1,'asd',1));
// var_dump($categoryDaoDemo);