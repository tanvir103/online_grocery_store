<?php
require_once('../Controller/message-controller.php');
if(isset($_COOKIE['Admin'])){}else if(isset($_COOKIE['Sales'])){}else if(isset($_COOKIE['Customer'])){}
else{
    message("You can't access this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script.js"></script>
    <title>Search Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Search Product</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center">
        <br>
        <tr><td><input type="text" size="40px" id="search" onkeyup="liveSearch(this.value)" placeholder="Search By Product Name"></td></tr>
        <tr><td><font face="times new roman" id="message" ><br>Please type product name</font></td></tr>
    </table>
</body>
</html>