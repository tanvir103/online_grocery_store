<?php
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['Admin'])){
    message("You can't access this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Admin Dashboard</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" border="1" width="auto" cellspacing="0" cellpadding="25"  bordercolor="#91b867">
        <br>
        <tr><td>
            <font face="times new roman" size="4"><a href="addproduct.php">Add Product</a></font><br><br>
            <font face="times new roman" size="4"><a href="view-all-product.php">View All Product</a></font><br><br>
            <font face="times new roman" size="4"><a href="view-all-sales.php">View All Sales History</a></font><br><br>
            <font face="times new roman" size="4"><a href="payment-approval.php">Payment Approval</a></font><br><br>
            <font face="times new roman" size="4"><a href="block-customer.php">Block Customer</a></font><br><br>
            <font face="times new roman" size="4"><a href="recover-customer.php">Recover Customer</a></font><br><br>
            <font face="times new roman" size="4"><a href="block-sales-person.php">Block Sales Person</a></font><br><br>
            <font face="times new roman" size="4"><a href="recover-sales-person.php">Recover Sales Person</a></font><br><br>
            <font face="times new roman" size="4"><a href="add-sales-person.php">Add Sales Person</a></font><br><br>
            <font face="times new roman" size="4"><a href="view-profile-info.php">View Profile Information</a></font><br><br>
        </td></tr>
    </table>
    <table align="right" width="30%">
        <br><br><br><br>
        <tr><td><a href="logout-controller.php"><button>Logout</button></a></td></tr>
    </table>
</body>
</html>