<?php
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['Customer'])){
    message("You can't access this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Customer Dashboard</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Customer Dashboard</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" width="auto" border="1" cellspacing="0" cellpadding="25" align="center" bordercolor="#91b867">
    <br>
    <tr><td>
        <font face="times new roman" size="4"><a href="add-product-to-cart.php">Add Product to cart</a></font><br><br>
        <font face="times new roman" size="4"><a href="approved-payment.php">View Payment History</a></font><br><br>
        <font face="times new roman" size="4"><a href="searchproduct.php">Search Product</a></font><br><br>
        <font face="times new roman" size="4"><a href="view-profile-info.php">View Profile Information</a></font><br><br>
    </td></tr>
    </table>
    <table align="right" width="30%">
        <br><br><br><br>
        <tr><td><a href="logout-controller.php"><button>Logout</button></a></td></tr>
    </table>
</body>
</html>