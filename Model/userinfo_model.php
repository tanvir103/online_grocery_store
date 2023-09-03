<?php
require_once('db_connection.php');

function addCustomer($username,$email,$phone,$password){
    $conn=dbConnection();
    $sql="INSERT INTO userinfo VALUES ('','$password','$email','$username','$phone','Customer','Active')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function addSalesPersonal($username,$email,$phone,$password){
    $conn=dbConnection();
    $sql="INSERT INTO userinfo VALUES ('','$password','$email','$username','$phone','Sales Person','Active')";
    $result=mysqli_query($conn,$sql);
    return $result;
}

function login($email,$password){
    $conn=dbConnection();
    $sql="select * from userinfo where Email='$email' and Password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);

    if($count == 1) 
    {
    $row = mysqli_fetch_assoc($result);
    return $row;
    }else{
        header('location:../View/Wrong.html');
    }
   
}

function viewCustomer(){
    $conn=dbConnection();
    $sql="select * from Userinfo where Role='Customer' and Status='Active'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function viewSalesPerson(){
    $conn=dbConnection();
    $sql="select * from Userinfo where Role='Sales Person' and Status='Active'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function viewbannedCustomer(){
    $conn=dbConnection();
    $sql="select * from Userinfo where Role='Customer' and Status='Inactive'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function viewbannedSalesPerson(){
    $conn=dbConnection();
    $sql="select * from Userinfo where Role='Sales Person' and Status='Inactive'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function banUser($id){
    $conn=dbConnection();
    $sql="update Userinfo set Status='Inactive' where UserID='$id'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function recoverUser($id){
    $conn=dbConnection();
    $sql="update Userinfo set Status='Active' where UserID='$id'";
    $result=mysqli_query($conn,$sql);
    return $result;
}

function viewprofileinfo($id){
    $conn=dbConnection();
    $sql="select * from userinfo where UserID='$id'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function uniqueEmail($email){
    $conn=dbConnection();
    $sql="select Email from userinfo where Email='$email' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count>0){
        return "true";
    }else{
        return "false";
    }
}

?>