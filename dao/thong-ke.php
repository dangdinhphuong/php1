<?php
Require_once 'pdo.php';
function thong_ke_hang_hoa(){
$sql = "SELECT lo.id, lo.name,"
        . " COUNT(*) so_luong,"
        . " MIN(hh.price) gia_min,"
        . " MAX(hh.price) gia_max,"
        . " AVG(hh.price) gia_avg"
        . " FROM products hh "
        . " JOIN categories lo ON lo.id=hh.cate_id "
        . " GROUP BY lo.id, lo.name";
return pdo_query($sql);
}

function thong_ke_binh_luan(){
$sql = "SELECT hh.id, hh.name,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.created_at) cu_nhat,"
        . " MAX(bl.created_at) moi_nhat"
        . " FROM comments bl "
        . " JOIN products hh ON hh.id=bl.product_id "
        . " GROUP BY hh.id, hh.name"
        . " HAVING so_luong > 0"
        ;
return pdo_query($sql);
}

?>