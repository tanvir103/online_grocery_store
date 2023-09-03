<?php
require_once('../Model/userinfo_model.php');
require_once('../Controller/message-controller.php');
    if(isset($_POST['submit'])){
        $username=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        
        if(uniqueEmail($email)=="true") {
            message("Email already exists!");
        }else{
            $result=addCustomer($username,$email,$phone,$password);
        }
        if($result){
            echo "Account Created";
        }else{
            echo "Failed";
        }
        
    }
?>