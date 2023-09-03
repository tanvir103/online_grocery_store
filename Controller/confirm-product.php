<?php
require_once('../Model/payment-model.php'); 
require_once('../Model/product_model.php');
require_once('../Controller/message-controller.php'); 
if(isset($_POST['submit'])){
    $quantity=$_POST['quantity'];
    $productid=$_POST['productid'];
    $row=productinfo($productid);
    $id=$_COOKIE['Customer'];
    $productprice=$row['ProductPrice'];
    $totalprice=$quantity*$productprice;
    $purchaseDate = date("d-m-Y");

    $result=addcart($productid,$quantity);
    $result1=paymentadd($id,$productid,$totalprice,$purchaseDate);

    if($result && $result1){
        message("Purchase Confirm & Payment added for approval");
    }else{
        message("Failed");
    }
}
?>