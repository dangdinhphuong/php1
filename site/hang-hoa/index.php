<?php
require '../../global.php';
require_once '../../dao/hang-hoa.php';
require "../../dao/binh-luan.php";
require_once '../../dao/loai.php';
require_once '../../dao/pdo.php';
//-------------------------------//

extract($_REQUEST);

if (exist_param("product")) {
   
    $loai_hang = loai_select_all();
    $banner2 =loai_select_by_id($cate_id);
    $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page =  hang_hoa_select_by_loai_page($cate_id);
    $VIEW_NAME = "hang-hoa/liet-ke.php";
} 


elseif (exist_param("sale_soc")) {
    $loai_hang = loai_select_all();
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page_sale_soc =  hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/sale_soc.php";
} elseif (exist_param("hot_view")) {
    $loai_hang = loai_select_all();
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 4; //so ban ghi
    $hang_hoa_select_page_hot_view =  hang_hoa_select_page_hot_view();
    $VIEW_NAME = "hang-hoa/hot_view.php";
} 



else if (exist_param("detail")) {
    $items = hang_hoa_select_by_id($id);
    $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $binh_luan = binh_luan_select_by_hang_hoa($id);
    hang_hoa_tang_view($id);

    $VIEW_NAME = "hang-hoa/chi-tiet.php";
} else if (exist_param("add-binh-luan")) {

    if (isset($_POST) & !empty($_POST)) {
        check_login();
        extract($_REQUEST);
        if ($content != "") {
            binh_luan_insert($product_id, $content, $created_at, $user_id);
        }
        $items = hang_hoa_select_by_id($id);
        $hh_cate_id = hang_hoa_select_by_loai($cate_id);
        $binh_luan = binh_luan_select_by_hang_hoa($id);
        // hang_hoa_tang_view($id);

        $VIEW_NAME = "hang-hoa/chi-tiet.php";
    } else {
        $items = hang_hoa_select_by_id($id);
        $hh_cate_id = hang_hoa_select_by_loai($cate_id);
        $binh_luan = binh_luan_select_by_hang_hoa($id);
        hang_hoa_tang_view($id);

        $VIEW_NAME = "hang-hoa/chi-tiet.php";
    }
} else if (exist_param("keywords")) {
    $_SESSION['keyword']=$keywords;
    $count_sp=hang_hoa_select_keyword($_SESSION['keyword']);
    $row_per = 12;
    $items = hang_hoa_select_page_select_keyword($_SESSION['keyword']);
    $VIEW_NAME = "hang-hoa/seach.php";
}
 else if (exist_param("btn_list")) {
    $loai_hang = loai_select_all();
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page =  hang_hoa_select_by_loai_page($cate_id);
    $VIEW_NAME = "hang-hoa/liet-ke.php";
} else if (exist_param("btn_list_soc")) {
    $loai_hang = loai_select_all();
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page_sale_soc =  hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/sale_soc.php";
}
else if (exist_param("btn_list_view")) {
    $loai_hang = loai_select_all();
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 4; //so ban ghi
    $hang_hoa_select_page_hot_view =  hang_hoa_select_page_hot_view();
    $VIEW_NAME = "hang-hoa/hot_view.php";
}
else if (exist_param("btn_list_keywords")) {
    $count_sp=hang_hoa_select_keyword($_SESSION['keyword']);
    $row_per = 12;
    $items = hang_hoa_select_page_select_keyword($_SESSION['keyword']);
    $VIEW_NAME = "hang-hoa/seach.php";
}
$loai_hang = loai_select_all();
require '../layout.php';
