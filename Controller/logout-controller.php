<?php
setcookie("flag1","",time()-999999,"/");
setcookie("flag2","",time()-360000,"/");
header('location:../View/signin.html');
?>