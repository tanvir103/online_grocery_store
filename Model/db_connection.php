<?php
function dbConnection(){
    $conn=mysqli_connect('localhost','root','','onlineStore');
    return $conn;
}
?>