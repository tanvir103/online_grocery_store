<?php
require_once('../Model/userinfo_model.php');
require_once('../Controller/message-controller.php');
    $id=$_GET['id'];
    if(banUser($id)){
        message("User Banned Successfully");
    }else{
        message("Your can not ban user");
    }
?>