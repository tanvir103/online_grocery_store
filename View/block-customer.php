<?php
require_once('../Model/userinfo_model.php');
require_once('../Controller/message-controller.php');
if(!isset($_COOKIE['Admin'])){
    message("You can't access this page");
}
$result=viewCustomer();
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
        <font face="times new roman" size="7">Block Customer</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" cellpadding="15" cellspacing="15">
    <?php
    if(mysqli_num_rows($result)>0){
       echo" <tr><td><font face=\"times new roman\" size=\"5\">Customer ID</font><hr width=\"160px\" color=\"#33c47c\" align=\"left\"></td>
        <td><font face=\"times new roman\" size=\"5\">Customer Name</font><hr width=\"160px\" color=\"#33c47c\" align=\"left\"></td>
        <td><font face=\"times new roman\" size=\"5\">Customer Email</font><hr width=\"160px\" color=\"#33c47c\" align=\"left\"></td>
        <td><font face=\"times new roman\" size=\"5\">Action</font><hr width=\"160px\" color=\"#33c47c\" align=\"left\"></td>
        </tr>";
    while($row=mysqli_fetch_assoc($result)){
        $userid=$row['UserID'];
        $username=$row['Username'];
        $email=$row['Email'];

        echo"<tr>
        <td><font face=\"times new roman\" size=\"5\">$userid</font></td>
        <td><font face=\"times new roman\" size=\"5\">$username</font></td>
        <td><font face=\"times new roman\" size=\"5\">$email</font></td>
        <td><font face=\"times new roman\" size=\"5\"><a href=\"../Controller/ban-controller.php?id={$userid}\"><button class=\"round-button\">Ban Customer</button></font></a></td>
        </tr>";
    }
    }else{
        echo"<tr><td><font face=\"times new roman\" size=\"5\">No Customer Found</font></td></tr>";
    }
    
      
    ?>
    </table>
</body>
</html>