<?php
session_start();
require_once "connection.php";
if(isset($_POST['login'])){
    extract($_REQUEST);
    $sql=" select * from users WHERE usersname='$usersname'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users=$stmt->fetch(PDO::FETCH_ASSOC);
    if($users != false){
        if(password_verify($password,$users['password'])){
            $_SESSION['users']['name']= $usersname;
            header("location:index.php");
           
        }
        else{
            header("location:index.php");
        }
    }
    else{
        header("location:index.php");
     
    }
}

?>