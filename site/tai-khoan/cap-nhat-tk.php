<?php
require '../../global.php';
require '../../dao/khach-hang.php';

check_login();

extract($_REQUEST);

if(exist_param("btn_update")){
    $file_name = save_file("image", "$IMAGE_DIR/users/");
    $image = $file_name?$file_name:$image;
    try {
        khach_hang_update($id,$fullname,$username,$email,$password,$address,$phone,$gender,$created_at,$update_at,$image,$role);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = khach_hang_select_by_id($id);
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
}
else{
    extract($_SESSION['user']);
}

$VIEW_NAME="tai-khoan/cap-nhat-tk-form.php";
require '../layout.php';
