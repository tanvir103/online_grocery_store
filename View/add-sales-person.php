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
        <input type="text" name="username" size="40px"><br><br>
        <font face="times new roman">Email: </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="email" size="40px"><br><br>
        <font face="times new roman">Phone Number: </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="phone" size="40px"><br><br>
        <font face="times new roman">Password: </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" name="password" size="40px"><br><br>
        <font face="times new roman">Re-enter Password: </font>
        <input type="password" name="repassword" size="40px"><br><br>
        <button name="submit">Add Sales Person</button>
    </td></tr>
</form>
    </table>
</body>
</html>