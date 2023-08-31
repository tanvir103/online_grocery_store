<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <br><br><br><br><br><br><br><br>
    <img src="../Image/logout.gif" alt="Logout Immage" width="500px" height="400px">
    </center>
</body>
</html>

<?php
setcookie("Sales","",time()-9999999999,"/");
setcookie("Sales","",time()-36000,"/");
setcookie("Admin","",time()-9999999999,"/");
setcookie("Admin","",time()-36000,"/");
setcookie("Customer","",time()-9999999999,"/");
setcookie("Customer","",time()-36000,"/");
session_destroy();
header("refresh:2;url=../View/signin.html");
?>

