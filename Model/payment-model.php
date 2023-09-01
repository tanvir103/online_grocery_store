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
?>