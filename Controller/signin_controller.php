<?php
require_once('../Model/userinfo_model.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $row=login($email,$password);

    if($row['Role']=="Customer" && $row['Status']=="Active"){
        header('location:../View/customerDasboard.html');
    }else if($row['Role']=="Admin" && $row['Status']=="Active"){
        header('location:../View/adminDashboard.html');
    }else if($row['Role']=="Sales Person" && $row['Status']=="Active"){
        header('location:../View/saleDashboard.html');
    }else{
        header('location:../View/Wrong.html');
    }
}
?>