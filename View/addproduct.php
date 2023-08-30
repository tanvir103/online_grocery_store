<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <center>
        <font face="times new roman" size="7">Add product</font>
        <hr width="40%" color="#530f61">
    </center>
    <table align="center" cellpadding="25" cellspacing="0" width="auto" border="1" bordercolor="#91b867">
        <form action="../Controller/add-product-controller.php" method="post">
        <tr><td>
            <font face="times new roman" size="4">Product Name:</font>
            <input type="text" name="name"><br><br>
            <font face="times new roman" size="4">Product Category:</font>
            <select name="category">
                <option selected>Select Category</option>
                <option value="Personal Care">Personal Care</option>
                <option value="Frozen Foods">Frozen Foods</option>
                <option value="Snacks">Snacks</option>
                <option value="Dairy">Dairy</option>
                <option value="Baby Items">Baby Items</option>
            </select><br><br>
            <font face="times new roman" size="4">Product Price:</font>
            <input type="number" name="price"><br><br>
            <font face="times new roman" size="4">Product Quantity:</font>
            <input type="number" name="quantity"><br><br>
            <font face="times new roman" size="4">Product Picture:</font>
            <input type="file" name="picture" accept=".jpg,.png"><br><br>
            <button name="submit">Add Product</button>
        </form>
        </td></tr>
    </table>
</body>
</html>