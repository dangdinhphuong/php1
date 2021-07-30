<?php
require_once "../../global.php";
session_start();
// cách 1: xóa toàn bộ session tồn tại trong phiên làm việc này
session_destroy();

// cách 2: xóa từng cái session
// unset($_SESSION['role']);

//quay về trang chủ
header("location:$SITE_URL/trang-chinh/");

?>