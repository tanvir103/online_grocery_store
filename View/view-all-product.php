<?php require_once('../Model/product_model.php'); $result=viewallproduct(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">View All Product</font>
        <hr width="40%" color="#530f61">
    </center>
    <?php
    if(mysqli_num_rows($result) > 0) {
        echo"<br><br><table align=\"center\" width=\"60%\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tr><td align=\"center\">Product Name</td>
            <td align=\"center\">Product Price</td>
            <td align=\"center\">Product Quantity</td>
            <td align=\"center\">Product Picture</td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            $productname=$row['ProductName'];
            $productprice=$row['ProductPrice'];
            $productquantity=$row['ProductQuantity'];
            $picture=$row['ProductPicture'];

            echo"
            <tr><td align=\"center\">$productname</td>
            <td align=\"center\">$productprice</td>
            <td align=\"center\">$productquantity</td>
            <td ><img src=\"$picture\"width=\"250px\"></td>
        </tr>";
        }
        echo" </table>";
    }else{
        echo "<br><br><font face=\"times new roman\" size=\"8\">No Product Found<font>";
    }
    ?>
</body>
</html>