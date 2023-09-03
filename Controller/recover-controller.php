<?php
require_once('../Model/userinfo_model.php');
require_once('../Controller/message-controller.php');
$id=$_GET['id'];

if(recoverUser($id)){
    message("User Recover Successfully");
}else{
    message("Your can not recover user");
}
?>