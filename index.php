<?php 
// include 'entity/Product.php';
include 'demo/ProductDemo.php';
include 'demo/DatabaseDemo.php';

$dbDemo = new DatabaseDemo();
$productDemo = new ProductDemo();
$product = new Product(2,'as',1,2222,2);
$id =1;
// $product = array();
// $product->setName('thuong');
$data = $productDemo->createProductTest($id,'thuong',2,1000,1);
$data2 = $productDemo->createProductTest($id,'abc',2,1000,1);
$data3 = $productDemo->createProductTest($id,'abasdasdsadc',2,2000,1);
// $productDemo->PrintProduct();

$table = $dbDemo->insertTableTest('productTable',$data);
$table = $dbDemo->insertTableTest('productTable',$data2);
$table = $dbDemo->insertTableTest('productTable',$data3);
// var_dump($db->selectTable('productTable','thuong'));

// var_dump($table);

// var_dump($dbDemo->updateTable('productTable','abc'));

echo '<pre>';
print_r($dbDemo->getAllTableTest('productTable'));
echo '<pre>';

var_dump($dbDemo->truncateTableTest($dbDemo,'productTable'));

echo '<pre>';
print_r($dbDemo->getAllTableTest('productTable'));
echo '<pre>';

// var_dump($db->getAllProduct('productTable'));

echo '<pre>';
var_dump($dbDemo);
echo '<pre>';