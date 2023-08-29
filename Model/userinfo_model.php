<?php
require_once('db_connection.php');
function addCustomer($username,$email,$phone,$password){
    $conn=dbConnection();
    $sql="INSERT INTO userinfo VALUES ('','$password','$email','$username','$phone','Customer','Active')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>