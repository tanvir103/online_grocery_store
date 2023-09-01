<?php
require_once('../Model/product_model.php'); 
require_once('../Model/userinfo_model.php');
$id=$_GET['id'];
$cid=$_COOKIE['Customer'];
$user=viewprofileinfo($cid);
$result=search($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script.js"></script>
    <title>Purchase Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Purchase Product</font>
        <hr width="40%" color="#530f61">
    </center>
    <?php
    if(mysqli_num_rows($user)>0){
        while($row1=mysqli_fetch_assoc($user)){
            $username=$row1['Username'];
            $phone=$row1['Phone'];
        }
    }
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $productname=$row['ProductName'];
            $productquantity=$row['ProductQuantity'];
            $productprice=$row['ProductPrice'];
            $productid=$row['ProductID'];
        }
    }
    ?>
    <table align="center" width="auto" cellspacing="0" cellpadding="25px" border="1" bordercolor="#91b867">
    <br><br>
    <form action="../Controller/confirm-product.php" method="post">
    <tr><td>
        <font face="times new roman">Username :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman" name="phone" ><?php echo $username ?></font><br><br>
        <font face="times new roman">Phone Number :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman" name="phone" ><?php echo $phone ?></font><br><br>
        <font face="times new roman">Product Name :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman" name="productname"><?php echo $productname ?></font><br><br>
        <input type="hidden" name="productid" value="<?php echo $productid ?>">
        <font face="times new roman">Available Quantity :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman" name="productquantity"><?php echo $productquantity ?></font><br><br>
        <font face="times new roman">Product Price :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="ProductPrice" value="<?php echo $productprice ?>"><br><br>
        <font face="times new roman">Purchase Quantity :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" id="quantity" name="quantity" onkeyup="getprice()"><br><br>
        <font face="times new roman">Total Price :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <font face="times new roman" id="totalprice"></font><br><br>
        <button name="submit">Confirm Purchase</button>
    </td></tr>
    </form>
    </table>
</body>
</html>