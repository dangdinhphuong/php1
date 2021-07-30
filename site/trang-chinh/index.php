<?php
require '../../global.php';
require "../../dao/khach-hang.php";
require_once '../../dao/hang-hoa.php';
require_once '../../dao/binh-luan.php';
require "../../dao/loai.php";
$loai_hang = loai_select_all();

if(exist_param("gioi-thieu")){
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";
}
else if(exist_param("lien-he")){
    $VIEW_NAME = "trang-chinh/lien-he.php";
}
else if(exist_param("Profile")){
    $id=$_SESSION['user']['id'];
    $kh=khach_hang_select_by_id($id);
    $VIEW_NAME = "trang-chinh/Profile.php";
}
else if(exist_param("gop-y")){
    $VIEW_NAME = "trang-chinh/gop-y.php";
}
else if(exist_param("hoi-dap")){
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
}
// else if(exist_param("product")){
//     $items =hang_hoa_select_by_loai($cate_id);
//     $VIEW_NAME = "../../hang-hoa/liet-ke.php";
// }
else{
     $binh_luan=binh_luan_select_hang_hoa_all();
     $slsp8=4;
     $slsp10=4;
    $top8 = hang_hoa_select_top8();
    $top10=hang_hoa_select_top10();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}
require '../layout.php';



