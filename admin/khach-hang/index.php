<?php
require "../../global.php";
require "../../dao/khach-hang.php";
//--------------------------------//

check_login();

extract($_REQUEST);
$hinh = "$IMAGE_DIR/users/";
//     echo "<pre>";
// print_r($hinh);
if (exist_param("btn_insert")) {
    $errors = ['fullname' => '', 'username' => '', 'email' => '', 'password' => '', 'password2' => '', 'address' => '', 'phone' => '', 'image' => ''];
    $pattern = ['fullname' => '', 'email' => '' ,'phone' => ''];
    if (isset($_POST) & !empty($_POST)) {

        extract($_REQUEST);
        $pattern['fullname'] = "/([^\d]*)\s([^\d]*)/i";
        $pattern['email'] = "/^(\w+@\gmail)(\.\w{2,})$/i";
        $pattern['phone'] = "/^[0-9]{10,11}$/i";

        if ($fullname == "") {
            $errors['fullname'] = "Mời nhập họ và tên";
        } else if ( preg_match($pattern['fullname'], $fullname)== 0) {
            $errors['fullname'] = "nhap ten ko dung";
        }  

        if ($username == "") {
            $errors['username'] = "Mời nhập tên đăng nhập";
        }
        if ($phone == "") {
            $errors['phone'] = "Mời nhập số điện thoại";
        } else if (preg_match($pattern['phone'], $phone) == 0) {
            $errors['phone'] = "Nhập số điện thoại không đúng";
        }
        if ($email == "") {
            $errors['email'] = "Mời nhập email";
        } else if (preg_match($pattern['email'], $email) == 0) {
            $errors['email'] = "nhap email ko dung";
        }
        if ($password == "") {
            $errors['password'] = "Mời nhập password";
        }
        if ($password2 == "") {
            $errors['password2'] = "Mời nhập password xác nhận";
        } else if ($password2 != $password) {
            $errors['password2'] = " Password xác nhận không đúng";
        }
        if ($address == "") {
            $errors['address'] = "Mời nhập dịa chỉ";
        }
        if (
            $_FILES['image']['type'] === 'image/jpg' ||
            $_FILES['image']['type'] === 'image/png' ||
            $_FILES['image']['type'] === 'image/jpeg'
        ) {

            if ($_FILES['image']['size'] <= 2097152 ) {
                $image = $_FILES['image']['name'];
            } 
            
            else {

                $errors['image'] = " Ảnh kích thước không quá 2mb";
            }
        }
        else if( $_FILES['image']['size']<=0){
            $errors['image'] = " Mời chọn file ảnh";
        }
        else {
            $errors['image'] = " Hệ thống chỉ nhận file .jpg .png .jpeg";
        }

        if (!array_filter($errors)) {

            $up_hinh = save_file("image", "$IMAGE_DIR/users/");
            $image = strlen($up_hinh) > 0 ? $up_hinh : 'users.jpg';

            try {
                khach_hang_insert($fullname, $username, $email, $password, $address, $phone, $gender, $created_at, $update_at, $image, $role);
                unset($fullname, $username, $email, $password, $address, $phone, $gender, $created_at, $update_at, $image, $role);
                $MESSAGE = "Thêm mới thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
            }
            // $items = hang_hoa_select_all()
            // $VIEW_NAME = "hang-hoa/list.php";
            // die;
        }
    }
    $VIEW_NAME = "khach-hang/new.php";
} 

else if (exist_param("btn_update")) {

    $errors = ['fullname' => '', 'username' => '', 'email' => '', 'password' => '', 'password2' => '', 'address' => '', 'phone' => '', 'image' => ''];
    $pattern = ['fullname' => '', 'username' => '', 'email' => '', 'password' => '', 'password2' => '', 'address' => '', 'phone' => '', 'image' => ''];
    if (isset($_POST) & !empty($_POST)) {

        extract($_REQUEST);
        $pattern['fullname'] = "/([^\d]*)\s([^\d]*)/i";
        $pattern['email'] = "/^(\w+@\gmail)(\.\w{2,})$/i";
        $pattern['phone'] = "/^[0-9]{10,11}$/i";
        if ($fullname == "") {
            $errors['fullname'] = "Mời nhập họ và tên";
        } else if (preg_match($pattern['fullname'], $fullname) == 0) {
            $errors['fullname'] = "nhap ten ko dung";
        }
        if ($username == "") {
            $errors['username'] = "Mời nhập tên đăng nhập";
        }
        if ($phone == "") {
            $errors['phone'] = "Mời nhập số điện thoại";
        } else if (preg_match($pattern['phone'], $phone) == 0) {
            $errors['phone'] = "Nhập số điện thoại không đúng";
        }
        if ($email == "") {
            $errors['email'] = "Mời nhập email";
        } else if (preg_match($pattern['email'], $email) == 0) {
            $errors['email'] = "nhap email ko dung";
        }
        if ($password == "") {
            $errors['password'] = "Mời nhập password";
        }
        if ($password2 == "") {
            $errors['password2'] = "Mời nhập password xác nhận";
        } else if ($password2 != $password) {
            $errors['password2'] = " Password xác nhận không đúng";
        }
        if ($address == "") {
            $errors['address'] = "Mời nhập dịa chỉ";
        }
        if (
            $_FILES['image']['type'] === 'image/jpg' ||
            $_FILES['image']['type'] === 'image/png' ||
            $_FILES['image']['type'] === 'image/jpeg'
        ) {

            if ($_FILES['image']['size'] <= 2097152 ) {
                $image = $_FILES['image']['name'];
            } 
            
            else {

                $errors['image'] = " Ảnh kích thước không quá 2mb";
            }
        }
        if (!array_filter($errors)) {
    $up_hinh = save_file("image", "$IMAGE_DIR/users/");
    $image = strlen($up_hinh) > 0 ? $up_hinh : $image;
    try {
        khach_hang_update($id, $fullname, $username, $email, $password, $address, $phone, $gender, $created_at, $update_at, $image, $role);
        // unset($id,$fullname,$username,$email,$password,$address,$phone,$gender,$created_at,$update_at,$image,$role);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
}
}
    $VIEW_NAME = "khach-hang/edit.php";
}

else if (exist_param("btn_delete")) {
    try {
        khach_hang_delete($id);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
    }
    $VIEW_NAME = "khach-hang/list.php";
} else if (exist_param("btn_edit")) {
    $item = khach_hang_select_by_id($id);
    extract($item);
    $VIEW_NAME = "khach-hang/edit.php";
} else if (exist_param("btn_new")) {
    $VIEW_NAME = "khach-hang/new.php";
} else {
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
}

require "../layout.php";


