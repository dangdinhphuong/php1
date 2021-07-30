<!DOCTYPE html>
<html>
    <body>
        <div>
            <div>TÀI KHOẢN</div>
            <div>
                <div>
                    <img src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>'>
                    <br>
                    <?= $_SESSION['user']['username']?>
                </div>
                <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['role'] == TRUE){
                        echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>        
    </body>
</html>
