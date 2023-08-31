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
?>