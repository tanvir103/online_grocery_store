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
    <script src="../script.js"></script>
    <title>Add Sales Person</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Add Sales Person</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" width="auto" cellspacing="0" cellpadding="25px" border="1" bordercolor="#91b867">
    <br>
    <tr><td>
        <form action="../Controller/add-sales-person.php" method="post">
        <font face="times new roman">Username:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="username" id="username" size="40px" onkeyup="checksalesusername()"><br>
        <font face="times new roman" color="red" id="nameerror"></font><br>
        <font face="times new roman">Email: </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="email" id="email" size="40px" onkeyup="checkEmail()"><br>
        <font face="times new roman" color="red" id="emailerror"></font><br>
        <font face="times new roman">Phone Number: </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="phone" id="phone" size="40px" onkeyup="checksalesphone()"><br>
        <font face="times new roman" color="red" id="phoneerror"></font><br>
        <font face="times new roman">Password: </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" name="password" id="password" size="40px"><br>
        <font face="times new roman" color="red" id="passworderror"></font><br>
        <font face="times new roman">Re-enter Password: </font>
        <input type="password" name="repassword" id="repassword" size="40px" onkeyup="checksalespassword()"><br>
        <font face="times new roman" color="red" id="repassworderror"></font><br>
        <button name="submit" id="submit">Add Sales Person</button>
    </td></tr>
</form>
    </table>
</body>
</html>