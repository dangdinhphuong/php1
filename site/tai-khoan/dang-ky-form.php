<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<!-- catg header banner section -->
<!-- <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Account Page</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
    </div>
</section> -->
<!-- / catg header banner section -->

<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="<?= $SITE_URL ?>/trang-chinh">Home</a></li>
                        <?php
                        foreach ($loai_hang as $item) {
                            extract($item);
                        ?>
                            <li><a href="<?= $SITE_URL ?>/hang-hoa/index.php?product&cate_id=<?= $id ?>"><?= $item['name'] ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
<!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-12 " style="border: 1px solid gray;box-shadow: 0px 10px 20px #515050; padding:5px 10px;  border-radius: 5px;">
                            <div class="aa-myaccount-register">
                                <h4>Đăng Ký</h4>
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

                                        <tr style="display: none;">
                                            <th scope="col">VAI_TRÒ</th>
                                            <td  >
                                                <div>
                                                    <label><input name="role" value="1" type="radio" checked>KHÁCH HÀNG</label>
                                                    <label><input name="role" value="0" type="radio">NHÂN VIÊN</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                                            $a = date("Y-m-d"); ?>
                                            <td><input name="created_at" value="<?php echo "$a" ?>" style="display: none;"></td>
                                        </tr>
                                        <tr>
                                            
                                            <td><input name="update_at" type="hidden" value="00/00/0000" readonly style="display: none;"></td>
                                        </tr>
                                    </table>
                                    <div>
                                        <button name="btn_insert" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Thêm mới</button>
                                        <button type="reset" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập lại</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->