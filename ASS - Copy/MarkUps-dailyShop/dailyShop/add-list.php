<?php
require_once "connection.php";
if (isset($_POST['btn'])) {
    extract($_REQUEST);
    if ($_FILES['pro_image']['size'] > 0) {
        $pro_image = $_FILES['pro_image']['name'];
    } else {
        $pro_image = '';
    }
    $detail = str_replace('\'', '', $detail);
    $sql = "INSERT INTO products set pro_name='$pro_name', cate_id='$cate_id', pro_image='$pro_image', intro='$intro', detail='$detail',price_start='$price_start', price=$price, quantity=$quantity";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        if ($pro_image != '') {
            move_uploaded_file($_FILES['pro_image']['tmp_name'], "../images/" .$pro_image);
        }
        header("Location:Administration.php?message=Thêm dữ liệu thành công");
    } else {
        echo "Thêm dữ liệu thất bại";
    }
}
$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<?php
require_once "connection.php";
if (isset($_POST['save'])) {
    $cate_name = $_POST['cate_name'];
    $description = $_POST['description'];
    //Kiểm tra xem người dùng có đưa file vào form không
    if ($_FILES['cate_image']['size']) {
        //Lưu lại tên file
        $cate_image = $_FILES['cate_image']['name'];
    } else {
        $cate_image = "";
    }
    //Câu lệnh SQL insert
    $sql = "INSERT INTO categories(cate_name, cate_image, description) VALUES('$cate_name', '$cate_image', '$description')";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Nếu Thực thi thành công
    if ($stmt->execute()) {
        //Upload ảnh lên server
        if (!empty($cate_image)) {
            move_uploaded_file($_FILES['cate_image']['tmp_name'], '../images/' . $cate_image);
        }
        header("location:Administration.php?message=Thêm dữ liệu thành công");
        die;
    } else {
        echo "Thêm dữ liệu thất bại";
    }
}

