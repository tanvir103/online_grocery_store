<?php
require_once('../Model/payment-model.php');
require_once('../Controller/message-controller.php');
$id=$_GET['id'];

if(approvepayment($id)){
    message("Payment Approve Successfully");
}else{
    message("Your can not approve payment");
}
?>