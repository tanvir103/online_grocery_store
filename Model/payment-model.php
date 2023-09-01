<?php
 function paymentadd($userid,$productID,$amount,$purchaseDate){
    $conn=dbConnection();
    $sql="INSERT INTO paymentinfo VALUES ('','$userid','$productID','$amount','$purchaseDate','Inactive')";
    $result=mysqli_query($conn,$sql);
    return $result;
}
?>