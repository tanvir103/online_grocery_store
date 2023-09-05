<?php
require_once('../Controller/message-controller.php');
require_once('../Model/product_model.php');
require_once('../Model/payment-model.php');
require_once('../Model/userinfo_model.php');
if(!isset($_COOKIE['Admin'])){
    message("You can't access this page");
}
$result=viewallpayment();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all sales history</title>
</head>
<body>
    <center>
        <font face="Times New Roman" size="7">View All Sales History</font>
        <hr width="40%" color="#530f61">
    </center><?php
    if(mysqli_num_rows($result) > 0) {
        echo"<br><br><table align=\"center\" width=\"50%\" border=\"1\" cellpadding=\"10\" cellspacing=\"0\">
        <tr><td align=\"center\">Payment ID</td>
            <td align=\"center\">User Name</td>
            <td align=\"center\">Product Name</td>
            <td align=\"center\">Amount</td>
            <td align=\"center\">Payment Date</td>
            </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            $PaymentID=$row['PaymentID'];
            $UserID=$row['UserID'];
            $row3=userName($UserID);
            $Username=$row3['Username'];
            $ProductID=$row['ProductID'];
            $row1=productinfo($ProductID);
            $productName=$row1['ProductName'];
            $Amount=$row['Amount'];
            $PaymentDate=$row['PaymentDate'];
            echo"
            <tr><td align=\"center\">$PaymentID</td>
            <td align=\"center\">$Username</td>
            <td align=\"center\">$productName</td>
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