<?php
require_once "./dao/hang-hoa.php";
    $count = count_id_all();
  
    
//    if((int)$count['so_luong']<=4){
// $MESSAGE=" Ban không thể xóa khi số lượng nhở hơn hoặc bằng 4";
//    }
//    else if((int)$count['so_luong']>4){
//     try {
//         hang_hoa_delete($id);
//         $items = hang_hoa_select_page();
//         $MESSAGE = "Xóa thành công!";
//     } catch (Exception $exc) {
//         $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
//     }
    $VIEW_NAME = "site/hang-hoa/list.php";



    // viết cho delete hàng hóa




