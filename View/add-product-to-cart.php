<?php
require_once('../Controller/message-controller.php');
require_once('../Model/product_model.php'); 
if(!isset($_COOKIE['Customer'])){
    message("You can't access this page");
}
$result=viewallproduct();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Add product to cart</font>
        <hr width="40%" color="#530f61">
    </center>
    <?php
    if(mysqli_num_rows($result) > 0) {
        echo"<br><br><table align=\"center\" width=\"60%\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tr><td align=\"center\"><font face=\"times new roman\" size=\"4\">Product Name</font></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\">Product Price</font></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\">Product Quantity</font></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\">Product Picture</font></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\">Action</font></td>
            </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            $productID=$row['ProductID'];
            $productname=$row['ProductName'];
            $productprice=$row['ProductPrice'];
            $productquantity=$row['ProductQuantity'];
            $picture=$row['ProductPicture'];

            echo"
            <tr><td align=\"center\"><font face=\"times new roman\" size=\"4\">$productname</font></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\">$productprice</font></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\">$productquantity</font></td>
            <td ><img src=\"$picture\"width=\"250px\"></td>
            <td align=\"center\"><font face=\"times new roman\" size=\"4\"><a href=\"../Controller/purchase-controller.php?id={$productID}\"><button class=\"round-button\">Purchase Product</button></font></a></td>
        </tr>";
        }
        echo" </table>";
    }else{
        echo "<br><br><font face=\"times new roman\" size=\"8\">No Product Found<font>";
    }
    ?>
</body>
</html>