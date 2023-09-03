<?php
require_once('../Model/userinfo_model.php');
require_once('../Controller/message-controller.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    if(uniqueEmail($email)=="true") {
        message("Email already exists!");
    }else{
    $result=addSalesPersonal($username,$email,$phone,$password);
    }
        if($result){
            message("Sales Person Account Created");
        }else{
            message("Failed");
        }
        
}
?>