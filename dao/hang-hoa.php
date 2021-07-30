<?php
Require_once 'pdo.php';


function hang_hoa_insert($name,$cate_id,$description,$image,$detail,$price,$sale,$status,$view,$created_at,$updated_at){
    $sql = "INSERT INTO products(name,cate_id,description,image,detail,price,sale,status,view,created_at,updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $name,$cate_id,$description,$image,$detail,$price,$sale,$status,$view,$created_at,$updated_at);
}

    function hang_hoa_update($id,$name,$cate_id,$description,$image,$detail,$price,$sale,$status,$view,$created_at,$updated_at){
    $sql = "UPDATE products SET name=?,cate_id=?,description=?,image=?,detail=?,price=?,sale=?,status=?,view=?,created_at=?,updated_at=? WHERE id=?";
    pdo_execute($sql, $name,$cate_id,$description,$image,$detail,$price,$sale,$status,$view,$created_at,$updated_at,$id);

}
    function hang_hoa_delete($id){
    $sql = "DELETE FROM products WHERE  id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }

}
function count_id_all(){
    $sql="SELECT COUNT(*) so_luong FROM products";
    return pdo_query($sql);
}
    function hang_hoa_select_all(){
    $sql = "SELECT * FROM products";
    return pdo_query($sql);

}
    function hang_hoa_select_by_id($id){
    $sql = "SELECT * FROM products WHERE id=?";
    return pdo_query_one($sql, $id);


    }
    function hang_hoa_exist($id){
    $sql = "SELECT count(*) FROM products WHERE id=?";
    return pdo_query_value($sql, $id) > 0;


    }
    function hang_hoa_tang_view($id){
    $sql = "UPDATE products SET view = view + 1 WHERE id=?";
    pdo_execute($sql, $id);


    }
    function hang_hoa_select_top10(){
        global $slsp10;
    $sql = "SELECT * FROM products WHERE view > 0 ORDER BY view DESC LIMIT 0, $slsp10";
    return pdo_query($sql);

    }
    function hang_hoa_select_top8(){
        global $slsp8;
        $sql = "SELECT * FROM `products` WHERE sale >=20 ORDER BY sale DESC LIMIT 0,$slsp8";
        return pdo_query($sql);
    
    
        }
        function hang_hoa_select_top(){
            $sql = "SELECT * FROM `products` WHERE sale >=20 ORDER BY sale DESC ";
            return pdo_query($sql);
        
        
            }
    function hang_hoa_select_dac_biet(){
    $sql = "SELECT * FROM products WHERE cate_id=1";
    return pdo_query($sql);


    }
    function hang_hoa_select_by_loai($cate_id){
    $sql = "SELECT * FROM products WHERE cate_id=?";
    return pdo_query($sql, $cate_id);


    }

    function hang_hoa_select_page(){
    global $row_per;
    $row_per_page=$row_per; //so ban ghi
    $current_page=exist_param("page_no")?$_REQUEST['page_no']:1;
    $total_row=pdo_query_value("SELECT count(*) FROM products WHERE sale >=20");//Dem so ban ghi
    $total_page=ceil($total_row/$row_per_page);// tinh ra so luong trang
    if($current_page<1){
        $current_page=1;
    }
    if($current_page>$total_row){
        $current_page=$total_page;
    }
    $start=($current_page -1)*$row_per_page;
    $sql = "SELECT * FROM products WHERE sale >=20 ORDER BY sale DESC LIMIT {$start},{$row_per_page}";
//===== cho cac thiet lap vaof session co the dung
$_SESSION['total_page']= $total_page;
$_SESSION['prev_page']=($current_page>1)? ($current_page-1):1;
$_SESSION['next_page']=($current_page<$total_page)?($current_page+1):$total_page;
    return pdo_query($sql);
}

function hang_hoa_select_page_hot_view(){
    global $row_per;
    $row_per_page=$row_per; //so ban ghi
    $current_page=exist_param("page_no")?$_REQUEST['page_no']:1;
    $total_row=pdo_query_value("SELECT count(*) FROM products WHERE view >=1");//Dem so ban ghi
    $total_page=ceil($total_row/$row_per_page);// tinh ra so luong trang
    if($current_page<1){
        $current_page=1;
    }
    if($current_page>$total_row){
        $current_page=$total_page;
    }
    $start=($current_page -1)*$row_per_page;
    $sql = "SELECT * FROM products WHERE view >=1 ORDER BY view  DESC LIMIT {$start},{$row_per_page}";
//===== cho cac thiet lap vaof session co the dung
$_SESSION['total_page']= $total_page;
$_SESSION['prev_page']=($current_page>1)? ($current_page-1):1;
$_SESSION['next_page']=($current_page<$total_page)?($current_page+1):$total_page;
    return pdo_query($sql);
}

function hang_hoa_select_by_loai_page($cate_id){
    global $row_per;
    $row_per_page=$row_per; //so ban ghi
    $current_page=exist_param("page_no")?$_REQUEST['page_no']:1;
    $total_row=pdo_query_value("SELECT count(*) FROM products WHERE cate_id=$cate_id");//Dem so ban ghi
    $total_page=ceil($total_row/$row_per_page);// tinh ra so luong trang
    if($current_page<1){// lui lại
        $current_page=1;
    }
    if($current_page>$total_row){ // tien lên
        $current_page=$total_page;
    }
    $start=($current_page -1)*$row_per_page;
    $sql = "SELECT * FROM products WHERE cate_id=? ORDER BY id LIMIT {$start},{$row_per_page}";

//===== cho cac thiet lap vaof session co the dung
$_SESSION['total_page_loai']= $total_page;
$_SESSION['prev_page_loai']=($current_page>1)? ($current_page-1):1;
$_SESSION['next_page_loai']=($current_page<$total_page)?($current_page+1):$total_page;
    return pdo_query($sql,$cate_id);
}



function hang_hoa_select_page_select_keyword($keyword){
    global $row_per;
    $row_per_page=$row_per; //so ban ghi
    $current_page=exist_param("page_no")?$_REQUEST['page_no']:1;
    $total_row=pdo_query_value("SELECT count(*) FROM products hh JOIN categories lo ON lo.id=hh.cate_id WHERE hh.name LIKE '%$keyword%' OR lo.name LIKE '%$keyword%'");//Dem so ban ghi
    $total_page=ceil($total_row/$row_per_page);// tinh ra so luong trang
    if($current_page<1){
        $current_page=1;
    }
    if($current_page>$total_row){
        $current_page=$total_page;
    }
    $start=($current_page -1)*$row_per_page;
    $sql = "SELECT hh.name,hh.image,hh.price,hh.sale ,hh.id,hh.cate_id FROM products hh JOIN categories loai ON hh.cate_id=loai.id WHERE hh.name LIKE ? OR loai.name LIKE ? ORDER BY price DESC LIMIT {$start},{$row_per_page}";
//===== cho cac thiet lap vaof session co the dung
$_SESSION['total_page']= $total_page;
$_SESSION['prev_page']=($current_page>1)? ($current_page-1):1;
$_SESSION['next_page']=($current_page<$total_page)?($current_page+1):$total_page;
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}









function hang_hoa_select_keyword($keyword){
    $sql = "SELECT hh.name,hh.image,hh.price,hh.sale ,hh.id,hh.cate_id FROM products hh "
            . " JOIN categories lo ON lo.id=hh.cate_id "
            . " WHERE hh.name LIKE ? OR lo.name LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');

    // SELECT hh.name, loai.name FROM products hh JOIN categories loai ON hh.cate_id=loai.id WHERE hh.name LIKE '%a%' OR loai.name LIKE '%a%'
    // SELECT COUNT(*) so_luong FROM products hh JOIN categories lo ON lo.id=hh.cate_id WHERE hh.name LIKE '%a%' OR lo.name LIKE '%a%'
    }
?>