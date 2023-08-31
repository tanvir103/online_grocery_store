<?php
require_once('../Model/userinfo_model.php');
require_once('../Controller/message-controller.php');
if(isset($_COOKIE['Admin'])){
    $id=$_COOKIE['Admin'];
}else if(isset($_COOKIE['Sales'])){
    $id=$_COOKIE['Sales'];
}else if(isset($_COOKIE['Customer'])){
    $id=$_COOKIE['Customer'];
}else{
    message("You can't access this page");
}

$result=viewprofileinfo($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Profile Information</font>
        <hr width="40%" color="#530f61">
    </center>
    <?php
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $username=$row['Username'];
            $email=$row['Email'];
            $phone=$row['Phone'];
            $userid=$row['UserID'];
        }
    }
    ?>
    <table align="center" width="auto" cellspacing="0" cellpadding="25px" border="1" bordercolor="#91b867">
    <br><br>
    <tr><td>
        <font face="times new roman">User ID :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman"><?php echo $userid ?></font><br><br>
        <font face="times new roman">Username :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman"><?php echo $username ?></font><br><br>
        <font face="times new roman">Email :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman"><?php echo $email ?></font><br><br>
        <font face="times new roman">Phone Number :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman"><?php echo $phone ?></font><br><br>
    </td></tr>
    </table>
</body>
</html>