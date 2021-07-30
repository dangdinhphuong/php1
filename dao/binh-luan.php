<?php
Require_once 'pdo.php';


function binh_luan_insert($product_id, $content, $created_at,$user_id){
    $sql = "INSERT INTO comments( product_id, content, created_at,user_id) VALUES (?,?,?,?)";
    pdo_execute($sql,  $product_id, $content, $created_at,$user_id);
}

function binh_luan_update($id,$user_id, $product_id, $content, $created_at){
    $sql = "UPDATE comments SET user_id=? product_id=? content=? created_at=? WHERE id=?";
    pdo_execute($sql,$user_id, $product_id, $content, $created_at,$id);
}

function binh_luan_delete($id){
    $sql = "DELETE FROM comments WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function binh_luan_select_all(){
    $sql = "SELECT * FROM comments bl ORDER BY created_at DESC";
    return pdo_query($sql);
}

function binh_luan_select_by_id($id){
    $sql = "SELECT * FROM comments WHERE id=?";
    return pdo_query_one($sql, $id);
}

function binh_luan_exist($id){
    $sql = "SELECT count(*) FROM comments WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

function binh_luan_select_by_hang_hoa($product_id){
    $sql = "SELECT b.*,b.id, h.name,u.fullname,u.image FROM comments b JOIN products h ON h.id=b.product_id JOIN users u ON b.user_id=u.id WHERE b.product_id=? ORDER BY created_at DESC";
    return pdo_query($sql, $product_id);

}
function binh_luan_select_hang_hoa_all(){
    $sql = "SELECT b.*, h.name,u.fullname,u.image FROM comments b JOIN products h ON h.id=b.product_id JOIN users u ON b.user_id=u.id ORDER BY created_at DESC";
    return pdo_query($sql);

}
?>