<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require "../../dao/loai.php";
require "../../dao/binh-luan.php";
require_once '../../dao/hang-hoa.php';

extract($_REQUEST);
$loai_hang = loai_select_all();
if (exist_param("btn_submit")) {
    $errors = ['email' => ''];
    $pattern = ['email' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {
        extract($_REQUEST);
        
        $pattern['email'] = "/^(\w+@\gmail)(\.\w{2,})$/i";
        if ($email == "") {
            $errors['email'] = "Mời nhập email";
           
        } else if (preg_match($pattern['email'], $email) == 0) {
            $errors['email'] = "Email sai định dạng";
            
        } 
        $items2 = khach_hang_select_all();
        foreach ($items2 as $item) {
            if ($email == $item['email']) {
                $_SESSION['mai']='aaaa';
                $_SESSION['name_code']=$item['fullname'];
            }
        }
        
        if(!isset($_SESSION['mai'])){           
            $errors['email'] = "Tên loại ko tồn tại";
        } unset($_SESSION['mai']);
       
        if (!array_filter($errors)) {
            unset( $_SESSION['code']);
            if(isset($_SESSION['name_code'])){
                $name_code=$_SESSION['name_code'];
            }
            $receiver=$email;
            include_once "email-to-code.php";
            unset( $_SESSION['name_code']);
            header("location:$SITE_URL/tai-khoan/to_code.php");
        }
    }
}
// else{
//     $binh_luan=binh_luan_select_hang_hoa_all();
//     $loai_hang = loai_select_all();
//     $items = hang_hoa_select_all();
//     $VIEW_NAME = "trang-chinh/trang-chu.php";
// }


$VIEW_NAME = "tai-khoan/quen-mk-form.php";
require '../layout.php';
