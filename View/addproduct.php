<?php
require_once('../Controller/message-controller.php');
if(isset($_COOKIE['Admin'])){}else if(isset($_COOKIE['Sales'])){}
else{
    message("You can't access this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script.js"></script>
    <title>Add Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Add product</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" cellpadding="25" cellspacing="0" width="auto" border="1" bordercolor="#91b867">
        <br>
        <form action="../Controller/add-product-controller.php" method="post" enctype="multipart/form-data">
        <tr><td>
            <font face="times new roman" size="4">Product Name:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="name" name="name" onkeyup="productname()"><br>
            <font face="times new roman" color="red" id="nameerror"></font><br>
            <font face="times new roman" size="4">Product Category:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select id="category" name="category">
                <option selected>Select Category</option>
                <option value="Personal Care">Personal Care</option>
                <option value="Frozen Foods">Frozen Foods</option>
                <option value="Snacks">Snacks</option>
                <option value="Dairy">Dairy</option>
                <option value="Baby Items">Baby Items</option>
            </select><br>
            <font face="times new roman" color="red" id="categoryerror"></font><br>
            <font face="times new roman" size="4">Product Price:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" name="price" id="price" onkeyup="productprice()"><br>
            <font face="times new roman" color="red" id="priceerror"></font><br>
            <font face="times new roman" size="4">Product Quantity:</font>
            <input type="number" name="quantity" id="quantity" onkeyup="productquantity()"><br>
            <font face="times new roman" color="red" id="quantityerror"></font><br>
            <font face="times new roman" size="4">Product Picture:</font>&nbsp;&nbsp;
            <input type="file" name="picture" id="picture" accept=".jpeg,.jpg,.png,.gif" required><br>
            <font face="times new roman" color="red" id="pictureerror"></font><br>
            <button name="submit" id="submit">Add Product</button>
        </form>
        </td></tr>
    </table>
</body>
</html>