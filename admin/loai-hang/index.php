<?php
require "../../global.php";
require "../../dao/loai.php";
//--------------------------------//

check_login();

extract($_REQUEST);

if (exist_param("btn_insert")) {
    $errors = ['name' => ''];
    $pattern = ['name' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        $name1 = $name;
        extract($_REQUEST);
        $pattern['name'] = "/([^\d]*)\s([^\d]*)/i";
        if ($name == "") {
            $errors['name'] = "Mời nhập tên loại";
        } else if (preg_match($pattern['name'], $name) == 0) {
            $errors['name'] = "Tên loại tối thiểu hai chữ";
        }

        $items2 = loai_select_all();
        foreach ($items2 as $item) {
            if ($name1 == $item['name']) {
                $errors['name'] = "Tên loại đã tồn tại";
            }
        }
        if (!array_filter($errors)) {
            try {
                loai_insert($name);
                unset($name);
                $MESSAGE = "Thêm mới thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
            }
        }
    }
    // $items = loai_select_all();
    $VIEW_NAME = "loai-hang/new.php";
} else if (exist_param("btn_update")) {
    $errors = ['name' => ''];
    $pattern = ['name' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        $name1 = $name;
        extract($_REQUEST);
        $pattern['name'] = "/([^\d]*)\s([^\d]*)/i";
        if ($name == "") {
            $errors['name'] = "Mời nhập tên loại";
        } else if (preg_match($pattern['name'], $name) == 0) {
            $errors['name'] = "Tên loại tối thiểu hai chữ";
        }
        $loai_id = loai_select_by_id($id);
        $items2 = loai_select_all();
        // if($name1 == $loai_id['name']){
        //     $errors['name'] = "Tên loại đã tồn tại";
        // }
        foreach ($items2 as $item) {
            if ($name1 == $item['name'] && $name1 != $loai_id['name']) {
                $errors['name'] = "Tên loại đã tồn tại";
            }
        }
        if (!array_filter($errors)) {
            try {
                loai_update($id, $name);
                $MESSAGE = "Cập nhật thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Cập nhật thất bại!" . $exc->getMessage();
            }
        }
    }
    // $items = loai_select_all();
    $VIEW_NAME = "loai-hang/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        loai_delete($id);
        $items = loai_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
    }
    $VIEW_NAME = "loai-hang/list.php";
} else if (exist_param("btn_edit")) {
    $item = loai_select_by_id($id);
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
} else if (exist_param("btn_new")) {

    $VIEW_NAME = "loai-hang/new.php";
} else {
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
}

require "../layout.php";
