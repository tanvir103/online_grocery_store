<?php
require_once('../Model/userinfo_model.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $remember;

    if(isset($_POST['rememberme'])){
        $remember="true";
    }
    if(!isset($_POST['rememberme'])){
        $remember="false";
    }


    $row=login($email,$password);

    if($row['Role']=="Customer" && $row['Status']=="Active"){
        if($remember=="true"){
           setcookie("Customer",$row['UserID'],time()+99999999,"/"); 
        }else{
            setcookie("Customer",$row['UserID'],time()+3600,"/"); 
        }
        header('location:../View/customerDasboard.php');
       
    }else if($row['Role']=="Admin" && $row['Status']=="Active"){
        if($remember=="true"){
            setcookie("Admin",$row['UserID'],time()+99999999,"/"); 
         }else{
             setcookie("Admin",$row['UserID'],time()+3600,"/"); 
         }
        header('location:../View/adminDashboard.php');
    }else if($row['Role']=="Sales Person" && $row['Status']=="Active"){
        if($remember=="true"){
            setcookie("Sales",$row['UserID'],time()+99999999,"/"); 
         }else{
             setcookie("Sales",$row['UserID'],time()+3600,"/"); 
         }
        header('location:../View/saleDashboard.php');
    }else{
        header('location:../View/Wrong.html');
    }
}
?>