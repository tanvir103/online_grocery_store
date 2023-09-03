<?php require_once('../Model/payment-model.php'); 
if(!isset($_COOKIE['Customer'])){
    message("You can't access this page");
}
$id=$_COOKIE['Customer'];
$result=viewpayment($id); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Payment History</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Payment History</font>
        <hr width="40%" color="#530f61">
    </center>
    <?php
    if(mysqli_num_rows($result) > 0) {
        echo"<br><br><table align=\"center\" width=\"50%\" border=\"1\" cellpadding=\"7\" cellspacing=\"0\">
        <tr><td align=\"center\">Payment ID</td>
            <td align=\"center\">Product ID</td>
            <td align=\"center\">Amount</td>
            <td align=\"center\">Payment Date</td>
            </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            $PaymentID=$row['PaymentID'];
            $ProductID=$row['ProductID'];
            $Amount=$row['Amount'];
            $PaymentDate=$row['PaymentDate'];
            echo"
            <tr><td align=\"center\">$PaymentID</td>
            <td align=\"center\">$ProductID</td>
            <td align=\"center\">$Amount</td>
            <td align=\"center\">$PaymentDate</td>
        </tr>";
        }
        echo" </table>";
    }else{
        echo "<center><br><br><br><br><font face=\"times new roman\" size=\"8\">No Payment Found<font></center>";
    }
    ?>
</body>
</html>

 