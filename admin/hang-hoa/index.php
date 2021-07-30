<?php
require "../../global.php";
require "../../dao/hang-hoa.php";
//--------------------------------//
require "../../dao/loai.php";

check_login();
extract($_REQUEST);

if (exist_param("btn_insert")) {
    $errors = ['name' => '', 'cate_id' => '', 'image' => '', 'price' => '', 'sale' => ''];
    $pattern = ['name' => '', 'cate_id' => '', 'image' => '', 'price' => '', 'sale' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        extract($_REQUEST);

        $pattern['name'] = "/([^\d]*)\s([^\d]*)/i";
        if ($name == "") {
            $errors['name'] = " Mời nhập họ và tên";
        } elseif (preg_match($pattern['name'], $name) == 0) {
            $errors['name'] = " nhap ten ko dung";
        }
        if ($cate_id == "") {
            $errors['cate_id'] = " chon loai hang";
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

        if($price<0){
            $errors['price'] = " Giá tiền không được số âm";
        }
        if($sale<0 || $sale>100){
            $errors['sale'] = " Tỉ lệ sale trong khoảng 0% ==> 100%";
        }
        // var_dump($dc);
        if (!array_filter($errors)) {
            // $_SESSION["name"] = "$name";

            $up_hinh = save_file("image", "$IMAGE_DIR/products/");
            $image = strlen($up_hinh) > 0 ? $up_hinh : 'products.jpg';
            try {
                hang_hoa_insert($name, $cate_id, $description, $image, $detail, $price, $sale, $status, $view, $created_at, $updated_at);
                unset($name, $cate_id, $description, $image, $detail, $price, $sale, $status, $view, $created_at, $updated_at);
                $MESSAGE = "Thêm mới thành công!";
                header("location: $ADMIN_URL/hang-hoa/");
            } catch (Exception $exc) {
                $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
            }
            // $items = hang_hoa_select_all()
            // $VIEW_NAME = "hang-hoa/list.php";
            // die;
        }
    }

    $row_per=4; //so ban ghi
    $items =  hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/new.php";
} 


else if (exist_param("btn_update")) {
    $errors = ['name' => '', 'cate_id' => '', 'image' => '', 'price' => '', 'sale' => ''];
    $pattern = ['name' => '', 'cate_id' => '', 'image' => '', 'price' => '', 'sale' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        extract($_REQUEST);

        $pattern['name'] = "/([^\d]*)\s([^\d]*)/i";
        if ($name == "") {
            $errors['name'] = " Mời nhập họ và tên";
        } elseif (preg_match($pattern['name'], $name) == 0) {
            $errors['name'] = " nhap ten ko dung";
        }
        if ($cate_id == "") {
            $errors['cate_id'] = " chon loai hang";
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
        // else {
        //     $errors['image'] = " Hệ thống chỉ nhận file .jpg .png .jpeg";
        // }

        if($price<0){
            $errors['price'] = " Giá tiền không được số âm";
        }
        if($sale<0 || $sale>100){
            $errors['sale'] = " Tỉ lệ sale trong khoảng 0% ==> 100%";
        }
        // var_dump($dc);
        if (!array_filter($errors)) {
            // $_SESSION["name"] = "$name";
    $up_hinh = save_file("image", "$IMAGE_DIR/products/");
    $image = strlen($up_hinh) > 0 ? $up_hinh : $image;
    try {
        hang_hoa_update($id, $name, $cate_id, $description, $image, $detail, $price, $sale, $status, $view, $created_at, $updated_at);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        echo $exc->getMessage();
        $MESSAGE = "Cập nhật thất bại!" . $exc->getMessage();
    }
} 
}
$row_per=4; //so ban ghi
$items =  hang_hoa_select_page();
$VIEW_NAME = "hang-hoa/edit.php";
} 

else if (exist_param("chi-tiet")) {
    $items = hang_hoa_select_by_id($id);
    $VIEW_NAME = "hang-hoa/chi_tiet.php";
}
else if (exist_param("description")) {
    $items = hang_hoa_select_by_id($id);
    $VIEW_NAME = "hang-hoa/description.php";
}
else if (exist_param("btn_delete")) {

    try {
        hang_hoa_delete($id);
        $row_per=4; //so ban ghi
        $items =  hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
    }
    $VIEW_NAME = "hang-hoa/list.php";
} else if (exist_param("btn_edit")) {
    $item = hang_hoa_select_by_id($id);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("btn_new")) {

    $VIEW_NAME = "hang-hoa/new.php";
} 
else if (exist_param("btn_list")) {
    $loai_hang = loai_select_all();
    $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 4; //so ban ghi
    $items =  hang_hoa_select_by_loai_page($cate_id);
    $VIEW_NAME = "hang-hoa/list.php";
} 
else if (exist_param("product")) {
    $loai_hang = loai_select_all();
    $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 4; //so ban ghi
    $items =  hang_hoa_select_by_loai_page($cate_id);
    $VIEW_NAME = "hang-hoa/list.php";
}
else {
    $loai_hang = loai_select_all();
    $row_per=4; //so ban ghi
    $items =  hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
}

if ($VIEW_NAME == "hang-hoa/new.php" || $VIEW_NAME == "hang-hoa/edit.php") {
    $loai_select_list = loai_select_all();
}


require "../layout.php";
