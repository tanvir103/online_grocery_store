<?php
require_once('../Model/product_model.php');
if(isset($_POST['submit'])){
    $productname=$_POST['name'];
    $category=$_POST['category'];
    $productprice=$_POST['price'];
    $productamount=$_POST['quantity'];

    $src=$_FILES['picture']['tmp_name'];
    $fileName='../Image/Product Picture/'.$_FILES['picture']['name'];
    $des='../Image/Product Picture/'.$_FILES['picture']['name'];
    move_uploaded_file($src,$des);

    $result=insertProduct($productname,$category,$productprice,$productamount,$fileName);

    if($result){
        echo "Product Added Successfully";
    }else{
        echo "Add product operation failled";
    }
}
?>