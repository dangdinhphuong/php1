<?php
session_start();
//kiểm tra nếu ko có session thì điều hướng về trong login
if(!isset($_SESSION['users'])){
    header("location:account.php");
   
}
else{
    
    header("location:Administration.php");
}


?>
