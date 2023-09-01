<?php
require_once('../Model/product_model.php'); 
if(isset($_POST['submit'])){
    $quantity=$_POST['quantity'];
    $productid=$_POST['productid'];
    $row=productinfo($productid);
    $id=$_COOKIE['Customer'];
    $productprice=$row['ProductPrice'];
    $totalprice=$quantity*$productprice;
    $result=addcart($productid,$quantity);
    $result1=paymentadd($id,$productid,$totalprice);
    if($result && $result1){
        echo "Purchase Confirm & Payment added for approval";
    }else{
        echo "Failed";
    }
}
?>