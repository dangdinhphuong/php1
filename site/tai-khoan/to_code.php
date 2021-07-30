<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require "../../dao/loai.php";
require "../../dao/binh-luan.php";
require_once '../../dao/hang-hoa.php';

extract($_REQUEST);
$loai_hang = loai_select_all();
if(exist_param("btn_code")){
    $errors = ['number_code' => ''];
    $pattern = ['number_code' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {
        extract($_REQUEST);
        if ($number_code == "") {
            $errors['number_code'] = "Mời nhập mã";
           
        }
        elseif($number_code!= $_SESSION['code']){
            $errors['number_code'] = "Ma sai moi nhap lai";
        }
        if (!array_filter($errors)) {
            header("location: $SITE_URL/tai-khoan/doi-mk.php");
        }
    }
}
$VIEW_NAME = "tai-khoan/code_form.php";
require '../layout.php';
