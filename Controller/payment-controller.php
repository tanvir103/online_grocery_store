<?php
require_once('../Model/payment-model.php');
$id=$_GET['id'];

if(approvepayment($id)){
    echo "Payment Approve Successfully";
}else{
    echo "Your can not approve payment";
}
?>