<?php
if(isset($_POST['submit'])){
    session_start();
    $user=$_POST['quantity'];
    $id=$_SESSION['id'];
    echo $user.", Product ID: ".$id;
}
?>