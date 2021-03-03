<?php 
// include 'entity/Product.php';
include 'demo/ProductDemo.php';
include 'dao/Database.php';
$productDemo = new ProductDemo();
$product = new Product(2,'as',1,2222,2);
$db = new Database();
$id =1;
$product = array();
// $product->setName('thuong');
$data = $productDemo->createProductTest($id,'thuong',2,1000,1);
$data2 = $productDemo->createProductTest($id,'abc',2,1000,1);
$data3 = $productDemo->createProductTest($id,'abasdasdsadc',2,2000,1);
// $productDemo->PrintProduct();

$table = $db->insertTable('product',$data);
$table = $db->insertTable('productTable',$data2);
$table = $db->insertTable('productTable',$data3);
// var_dump($db->selectTable('productTable','thuong'));

echo '<pre>';
print_r($db);
echo '<pre>';

var_dump($db->updateTable('productTable',$product));

// echo '<pre>';
// print_r($db->getAllProduct('productTable'));
// echo '<pre>';

// var_dump($db->getAllProduct('productTable'));