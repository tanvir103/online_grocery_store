<?php
    require_once('../Model/product_model.php');
    $product=$_REQUEST['name'];
    $result=searchProduct($product);
    if(mysqli_num_rows($result) > 0) {
        echo"<br><br><table width=\"120%\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
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
        echo "<br><br>No Product Found";
    }
?>