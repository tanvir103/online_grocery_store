<?php
    require_once('db_connection.php');
    
    function insertProduct($name,$category,$price,$quantity,$picture){
        $conn=dbConnection();
        $sql="INSERT INTO productinfo VALUES ('','$name','$category','$price','$quantity','$picture','')";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function searchProduct($name){
        $conn=dbConnection();
        $sql="SELECT * FROM productinfo WHERE ProductName LIKE'%$name%'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function viewallproduct(){
        $conn=dbConnection();
        $sql="SELECT * FROM productinfo ORDER BY ProductName ASC";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function search($id){
        $conn=dbConnection();
        $sql="SELECT * FROM productinfo WHERE ProductID='$id'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    function addcart($id,$quantity){
        $conn=dbConnection();
        $sql="UPDATE productinfo SET ProductQuantity = ProductQuantity - '$quantity' WHERE ProductID = '$id'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    
    function productinfo($id){
        $conn=dbConnection();
        $sql="SELECT * FROM productinfo WHERE ProductID='$id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

    function paymentadd($userid,$productID,$amount,$purchaseDate){
        $conn=dbConnection();
        $sql="INSERT INTO paymentinfo VALUES ('','$userid','$productID','$amount','$purchaseDate','Inactive')";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
?>