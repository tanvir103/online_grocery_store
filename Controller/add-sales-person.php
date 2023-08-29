<?php
require_once('../Model/userinfo_model.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $result=addSalesPersonal($username,$email,$phone,$password);
        if($result){
            echo "Account Created";
        }else{
            echo "Failed";
        }
        
}
?>