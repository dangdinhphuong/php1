<!DOCTYPE html>
<html>
    <body>
        <h3>CẬP NHẬT TÀI KHOẢN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$image?>" style="max-width: 95%">
                </div>
                <div>
                    <div>
                    <div>
            <div>
                <label>HỌ VÀ TÊN</label>
                <input name="fullname" type="text" value="<?= $fullname ?>">
            </div>
        </div>
        <div>
            <div>
                <label>Tên đăng nhập</label>
                <input name="username" type="text" value="<?= $username ?>">
            </div>
        </div>
        <div>
            <div>
                <label>ĐỊA CHỈ EMAIL</label>
                <input name="email" type="email" value="<?= $email ?>">
            </div>
        </div>
        <div>
            <div>
                <label>Đia chỉ</label>
                <input name="address" type="text" value="<?= $address ?>">
            </div>
        </div>
        <div>
            <div>
                <label>Số điện thoại</label>
                <input name="phone" type="text" value="<?= $phone ?>">
            </div>
        </div>
        <div>
            <div>
                <label>Gioi tinh</label>
                <div>
                    <label><input <?= !$gender ? 'checked' : '' ?> name="gender" value="0" type="radio">nam</label>
                    <label><input <?= !$gender ? 'checked' : '' ?> name="gender" value="1" type="radio">nữ</label>
                </div>
            </div>
            <div>
                <div>
                    <label>update_at</label>
                    <input name="update_at" type="date" value="<?= $update_at ?>">
                </div>
            </div>
        </div>
        <div>
            <div>
                <button name="btn_update">Cập nhật</button>
                <button type="reset">Nhập lại</button>
                <a href="index.php">Thêm mới</a>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
                    <div>
                        <button name="btn_update">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="role" value="<?=$role?>" type="hidden">
                    <input name="created_at" value="<?=$created_at?>" type="hidden">
                    <input name="password" value="<?=$password?>" type="hidden">
                    <input name="image" value="<?=$image?>" type="hidden">
                </div>
            </div>
        </form>
    </body>
</html>
