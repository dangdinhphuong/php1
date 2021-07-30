<?php
Require_once 'pdo.php';

function khach_hang_insert($fullname,$username,$email,$password,$address,$phone,$gender,$created_at,$update_at,$image,$role){
    $sql = "INSERT INTO users(fullname,username,email,password,address,phone,gender,created_at	,update_at,image,role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $fullname,$username,$email,$password,$address,$phone,$gender,$created_at,$update_at,$image,$role==1);
}

function khach_hang_update($id,$fullname,$username,$email,$password,$address,$phone,$gender,$created_at,$update_at,$image,$role){
    $sql = "UPDATE users SET fullname=?,username=?,email=?,password=?,address=?,phone=?,gender=?,created_at=?,update_at=?,image=?,role=? WHERE id=?";
    pdo_execute($sql, $fullname,$username,$email,$password,$address,$phone,$gender,$created_at,$update_at,$image,$role, $id);
}

function khach_hang_delete($id){
    $sql = "DELETE FROM users  WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function khach_hang_select_all(){
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}

function khach_hang_select_by_id($id){
    $sql = "SELECT * FROM users WHERE id=?";
    return pdo_query_one($sql, $id);
}
function khach_hang_select_by_user($usersname){
    $sql = "SELECT * FROM users WHERE username=?";
    return pdo_query_one($sql, $usersname);
}
function khach_hang_exist($id){
    $sql = "SELECT count(*) FROM users WHERE $id=?";
    return pdo_query_value($sql, $id) > 0;
}

function khach_hang_select_by_role($role){
    $sql = "SELECT * FROM users WHERE role=?";
    return pdo_query($sql, $role);
}

function khach_hang_change_password($email, $password){
    $sql = "UPDATE `users` SET `password` = ? WHERE `users`.`email` = ?";
    pdo_execute($sql, $password, $email);
}
?>