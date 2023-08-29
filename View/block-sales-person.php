<?php
require_once('../Model/userinfo_model.php');
$result=viewSalesPerson();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Add Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Block Sales Person</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" cellpadding="25" cellspacing="0">
    <?php
    if(mysqli_num_rows($result)>0){
       echo" <tr><td><font face=\"times new roman\" size=\"5\">Sales ID</font></td>
        <td><font face=\"times new roman\" size=\"5\">Saler's Name</font></td>
        <td><font face=\"times new roman\" size=\"5\">Saler's Email</font></td>
        <td><font face=\"times new roman\" size=\"5\">Action</font></td>
        </tr>";
    while($row=mysqli_fetch_assoc($result)){
        $userid=$row['UserID'];
        $username=$row['Username'];
        $email=$row['Email'];

        echo"<tr>
        <td><font face=\"times new roman\" size=\"5\">$userid</font></td>
        <td><font face=\"times new roman\" size=\"5\">$username</font></td>
        <td><font face=\"times new roman\" size=\"5\">$email</font></td>
        <td><font face=\"times new roman\" size=\"5\"><a href=\"../Controller/ban-controller.php?id={$userid}\"><button class=\"round-button\">Ban Sales Person</button></font></a></td>
        </tr>";
    }}else{
        echo"<tr><td><font face=\"times new roman\" size=\"5\">No Sales Person Found</font></td></tr>";
    }
    ?>
</body>
</html>