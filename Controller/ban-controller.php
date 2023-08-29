<?php
require_once('../Model/userinfo_model.php');
    $id=$_GET['id'];
    if(banUser($id)){
        echo "User Banned Successfully";
    }else{
        echo "Your can not ban user";
    }
?>