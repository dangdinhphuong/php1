<?php
//tên severname:
$hostname='localhost';
//username truy cập vào database của mysql
$username='root';
//pass của username
$password='';
//Tên database truy cập.
$dbname='ass';
try{
    //tạo đối tượng liên kết PDO
    $conn= new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8",$username,$password);
    
}
catch(PDOException $e){
    echo"Lỗi kết nối cơ sở dữ liệu<br>".$e->getMessage();
}

?>