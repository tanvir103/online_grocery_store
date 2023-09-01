<?php
require_once('../Model/product_model.php'); 
if(isset($_POST['submit'])){
    session_start();
    $quantity=$_POST['quantity'];
    $id=$_SESSION['id'];
    $result=addcart($id,$quantity);
    if($result){
        echo "Purchase Confirm";
    }else{
        echo "Failed";
    }
}
?>