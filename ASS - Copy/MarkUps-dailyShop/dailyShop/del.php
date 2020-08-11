<?php
require_once "connection.php";
// lấy id trên thanh URL
$pro_id = $_GET['id'];
// câu lênh sql theo điều kiện pro_id 
$sql= "DELETE FROM `products` WHERE `products`.`pro_id`= $pro_id";
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
