<?php
if(isset($_COOKIE['Admin'])){
    header('location:View/adminDashboard.php');
}else if(isset($_COOKIE['Sales'])){
    header('location:View/saleDashboard.php');
}else if(isset($_COOKIE['Customer'])){
    header('location:View/customerDashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
</head>
<body>
    <center>
        <font face="Times New Roman" size="7">Login Page</font>
        <hr width="40%" color="#530f61">
    </center>
   
        <table align="center" width="auto" border="1" cellspacing="0" cellpadding="25" align="center" bordercolor="#91b867">
            <br>
            <tr><td>
                <form action="Controller/signin_controller.php" method="post">
                <font face="Times New Roman">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" name="email" size="25px"><br><br>
                <font face="Times New Roman">Password: </font><input type="password" name="password" size="25px"><br><br>
               <input type="checkbox" name="rememberme"><font face="Times New Roman">Remember Me</font><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button name="submit">Login</button><br>
            </form>
                <hr width="auto" color="#91b867">
                <p align="center"><font face="Times New Roman" align="center">Don't have account ?</font></p>
                <a href="View/registration.html"><button>Create your account</button></a>
            </td></tr>
        </table>
</body>
</html>