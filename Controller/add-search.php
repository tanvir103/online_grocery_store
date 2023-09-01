<?php
require_once('../Model/product_model.php');
$product=$_REQUEST['name'];
$result=searchProduct($product);
echo $product;
?>