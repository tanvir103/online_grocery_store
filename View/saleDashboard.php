<?php
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['Sales'])){
    message("You can't access this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sales Personal Dashboard</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Sales Person Dashboard</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" border="1" cellpadding="25" cellspacing="0" width="auto" bordercolor="#91b867">
        <br>
    <tr><td>
        <font face="times new roman" size="4"><a href="addproduct.php">Add Product</a></font><br><br>
        <font face="times new roman" size="4"><a href="payment-approval.php">Payment Approval</a></font><br><br>
        <font face="times new roman" size="4"><a href="view-profile-info.php">View Profile Information</a></font><br><br>
        <font face="times new roman" size="4"><a href="searchproduct.php">Search Product</a></font><br><br>
        <font face="times new roman" size="4"><a href="view-all-product.php">View All Product</a></font><br>
    </td></tr>
    </table>
    <table align="right" width="30%">
        <br><br><br><br>
        <tr><td><a href="logout-controller.php"><button>Logout</button></a></td></tr>
    </table>
</body>
</html>