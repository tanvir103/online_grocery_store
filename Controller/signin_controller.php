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
           setcookie("flag1",$row['UserID'],time()+99999,"/"); 
        }else{
            setcookie("flag2",$row['UserID'],time()+3600,"/"); 
        }
        header('location:../View/customerDasboard.html');
       
    }else if($row['Role']=="Admin" && $row['Status']=="Active"){
        if($remember=="true"){
            setcookie("flag1",$row['UserID'],time()+99999,"/"); 
         }else{
             setcookie("flag2",$row['UserID'],time()+3600,"/"); 
         }
        header('location:../View/adminDashboard.html');
    }else if($row['Role']=="Sales Person" && $row['Status']=="Active"){
        if($remember=="true"){
            setcookie("flag1",$row['UserID'],time()+99999,"/"); 
         }else{
             setcookie("flag2",$row['UserID'],time()+3600,"/"); 
         }
        header('location:../View/saleDashboard.html');
    }else{
        header('location:../View/Wrong.html');
    }
}
?>