<?php
require_once "connection.php";
// lấy id trên thanh URL
$cate_id = $_GET['id'];
// câu lênh sql theo điều kiện pro_id 
$sql= "DELETE FROM `categories` WHERE `categories`.`cate_id`= $cate_id";
// chuẩn bị

$stmt = $conn->prepare($sql);
//thực thi
if($stmt->execute()){
     header("location:Administration.php?messger= 'xóa dữ liệu thành công'");
        die;
}
else{
    header("location:Administration.php?messger= 'xóa dữ liệu thất bại");
    die;
}



?>