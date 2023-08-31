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
setcookie("id","",time()-999999,"/");
setcookie("id","",time()-360000,"/");
header("refresh:2;url=../View/signin.html");
?>

