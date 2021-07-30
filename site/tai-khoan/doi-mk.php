<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require "../../dao/loai.php";
require "../../dao/binh-luan.php";
require_once '../../dao/hang-hoa.php';

extract($_REQUEST);
$loai_hang = loai_select_all();
if (exist_param("btn_change")) {
    $errors = ['password' => '','password2' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {
        extract($_REQUEST);
        if ($password == "") {
            $errors['password'] = "Mời nhập mật khẩu mới!";
           
        }
       elseif ($password2 == "") {
            $errors['password2'] = "Mời nhập xác nhận mật khẩu!";
           
        } 
        elseif($password !=$password2){
            $errors['password2'] = " Xác nhận mật khẩu sai!";
        }
        if (!array_filter($errors)) {
            khach_hang_change_password($_SESSION['email_user'], $password);
            header("location:$SITE_URL/tai-khoan/index.php?login");
        }
    }
}
$VIEW_NAME = "doi-mk-from.php";
require '../layout.php';
