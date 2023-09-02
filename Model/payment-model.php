<?php
require_once('db_connection.php');
 function paymentadd($userid,$productID,$amount,$purchaseDate){
    $conn=dbConnection();
    $sql="INSERT INTO paymentinfo VALUES ('','$userid','$productID','$amount','$purchaseDate','Inactive')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function pendingpayment(){
        $conn=dbConnection();
        $sql="SELECT * FROM paymentinfo WHERE PaymentStatus='Inactive'";
        $result=mysqli_query($conn,$sql);
        return $result;
    
}
function approvepayment($id){
    $conn=dbConnection();
    $sql="update paymentinfo set PaymentStatus='Active' where PaymentID='$id'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function viewpayment($id){
    $conn=dbConnection();
    $sql="select * from paymentinfo where UserID='$id' and PaymentStatus='Active'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
function viewallpayment(){
        $conn=dbConnection();
        $sql="SELECT * FROM paymentinfo WHERE PaymentStatus='Active'";
        $result=mysqli_query($conn,$sql);
        return $result;
}
?>