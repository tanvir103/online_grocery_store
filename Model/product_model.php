<?php
    require_once('db_connection.php');
    function insertProduct($name,$category,$price,$quantity,$picture){
        $conn=dbConnection();
        $sql="insert into productinfo values('',$name,$category,$price,$quantity,$picture,'')";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
?>