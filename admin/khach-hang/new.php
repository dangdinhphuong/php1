<!DOCTYPE html>
<html>

<head>
    <title>ATPro Admin</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/png" href="assets/AT-pro-logo.png" />
    <style>
        /* 
       .btn, button{
            padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px;
        }
        .edit{
            width: 316px;
            margin:0px auto; */
        /* border: 1px solid red; */
        /* }
        input{
            width: 100%;
        } */
    </style>
    <!-- chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Loại', 'Số Lượng'],
                <?php
                foreach ($items as $item) {
                    echo "['$item[name]',     $item[so_luong]],";
                }
                ?>
            ]);

            var options = {
                title: 'TỶ LỆ HÀNG HÓA',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <!-- Import lib -->
    <link rel="stylesheet" type="text/css" href="../../content/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- End import lib -->

    <link rel="stylesheet" type="text/css" href="../../content/css/style.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>






</head>

<body>


    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <div class="card-header">
        <h3>
            THÊM NGƯỜI DÙNG
        </h3>
        <i class="fas fa-ellipsis-h"></i>
    </div>
    <form action="index.php" method="post" enctype="multipart/form-data">

        <table>
            <tr>
                <th scope="col">HỌ VÀ TÊN</th>
                <td><input name="fullname" type="text" value="<?php echo $_POST['fullname'] ?? '' ?>"><label style="color:red"><?= (isset($errors['fullname']) ? $errors['fullname'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Tên đăng nhập</th>
                <td><input name="username" type="text" value="<?php echo $_POST['username'] ?? '' ?>"><label style="color:red"><?= (isset($errors['username']) ? $errors['username'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">MẬT KHẨU</th>
                <td><input name="password" type="password" value="<?php echo $_POST['password'] ?? '' ?>"><label style="color:red"><?= (isset($errors['password']) ? $errors['password'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">XÁC NHẬN MẬT KHẨU</th>
                <td><input name="password2" type="password" value="<?php echo $_POST['password2'] ?? '' ?>"><label style="color:red"><?= (isset($errors['password2']) ? $errors['password2'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">ĐỊA CHỈ EMAIL</th>
                <td><input name="email" type="email" value="<?php echo $_POST['email'] ?? '' ?>"><label style="color:red"><?= (isset($errors['email']) ? $errors['email'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">HÌNH ẢNH</th>
                <td><input name="image" type="file"><label style="color:red"><?= (isset($errors['image']) ? $errors['image'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Đia chỉ</th>
                <td><input name="address" type="text" value="<?php echo $_POST['address'] ?? '' ?>"><label style="color:red"><?= (isset($errors['address']) ? $errors['address'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Số điện thoại</th>
                <td><input name="phone" type="text" value="<?php echo $_POST['phone'] ?? '' ?>"><label style="color:red"><?= (isset($errors['phone']) ? $errors['phone'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Gioi tinh</th>
                <td>
                    <div>
                        <label><input name="gender" value="1" type="radio">nam</label>
                        <label><input name="gender" value="0" type="radio" checked>nữ</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="col">VAI_TRÒ</th>
                <td>
                    <div>
                        <label><input name="role" value="1" type="radio" checked>KHÁCH HÀNG</label>
                        <label><input name="role" value="0" type="radio">NHÂN VIÊN</label>
                    </div>
                </td>
            </tr>
            <tr><?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                $a = date("Y-m-d"); ?>
                <th scope="col">created_at</th>
                <td><input name="created_at" value="<?php echo "$a" ?>" style="display: none;"></td>
            </tr>
            <tr>
                <th scope="col">update_at</th>
                <td><input name="update_at" type="hidden" value="00/00/0000" readonly style="display: none;"></td>
            </tr>
        </table>
        <div>
            <button name="btn_insert" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Thêm mới</button>
            <button type="reset" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập lại</button>
            <a href="index.php" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Danh sách</a>
        </div>

    </form>

</body>

</html>