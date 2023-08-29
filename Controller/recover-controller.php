<?php
require_once('../Model/userinfo_model.php');
$id=$_GET['id'];

if(recoverUser($id)){
    echo "User Recover Successfully";
}else{
    echo "Your can not recover user";
}
?>