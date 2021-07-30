<!DOCTYPE html>
<html>

<body>
    <h3>QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <table>
            <input  name="id" type="hidden" value="<?=$id?>">
            <tr>
                <th scope="col">HỌ VÀ TÊN</th>
                <td><input name="fullname" type="text" value="<?= $fullname ?>"><label style="color:red"><?= (isset($errors['fullname']) ? $errors['fullname'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Tên đăng nhập</th>
                <td><input name="username" type="text" value="<?= $username ?>"><label style="color:red"><?= (isset($errors['username']) ? $errors['username'] : '') ?></label></td>
            </tr>
            
            <tr>
                <th scope="col">MẬT KHẨU</th>
                <td><input name="password" type="password" value="<?= $password ?>"><label style="color:red"><?= (isset($errors['password']) ? $errors['password'] : '') ?></label></td>
            </tr>            
            <tr>
                <th scope="col">XÁC NHẬN MẬT KHẨU</th>
                <td><input name="password2" type="password" value="<?= $password ?>"><label style="color:red"><?= (isset($errors['password2']) ? $errors['password2'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">ĐỊA CHỈ EMAIL</th>
                <td><input name="email" type="email" value="<?= $email ?>"><label style="color:red"><?= (isset($errors['email']) ? $errors['email'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">HÌNH ẢNH</th>
                <td>
                    <input name="image" type="hidden" value="<?= $image ?>">
                    <input name="image" type="file"> (<?= $image ?>)
                <label style="color:red"><?= (isset($errors['image']) ? $errors['image'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Đia chỉ</th>
                <td><input name="address" type="text" value="<?= $address ?>"><label style="color:red"><?= (isset($errors['address']) ? $errors['address'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Số điện thoại</th>
                <td><input name="phone" type="text" value="<?= $phone ?>"><label style="color:red"><?= (isset($errors['phone']) ? $errors['phone'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="col">Gioi tinh</th>
                <td>
                    <div>
                        <label><input name="gender"<?php if($gender == 1 ){echo"checked";}?>  value="1" type="radio">nam</label>
                        <label><input name="gender"<?php if($gender == 0 ){echo"checked";}?> value="0" type="radio" >nữ</label>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="col">VAI_TRÒ</th>
                <td>
                    <div>
                        <label><input name="role"<?php if($role == 1 ){echo"checked";}?> value="1" type="radio" >KHÁCH HÀNG</label>
                        <label><input name="role"<?php if($role == 0 ){echo"checked";}?> value="0" type="radio">NHÂN VIÊN</label>
                    </div>
                </td>
            </tr>
            <tr><?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                $a = date("Y-m-d"); ?>
                
                <td><input name="created_at" value="<?= $created_at ?>" style="display: none;"></td>
            </tr>
            <tr>
               
                <td><input name="update_at" value="<?php echo "$a" ?>" readonly style="display: none;"></td>
            </tr>
        </table>
        <button name="btn_update">Cập nhật</button>
        <button type="reset">Nhập lại</button>
        <a href="index.php?btn_new">Thêm mới</a>
        <a href="index.php">Danh sách</a>
    </form>
</body>

</html>