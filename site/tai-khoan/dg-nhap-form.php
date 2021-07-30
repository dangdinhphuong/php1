
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
        <div class="row" >
            <div class="col-md-4 col-md-offset-4">
                <div class="aa-myaccount-area">
                    <div class="row" >
                        <div class="col-md-12 "style="border: 1px solid gray;box-shadow: 0px 10px 20px #515050; padding:5px 10px;  border-radius: 5px;">
                            <div class="aa-myaccount-login">
                                <h4>Đăng Nhập</h4><?php if (strlen($MESSAGE)) {echo "<h5 style='color: red;'>$MESSAGE</h5>";}?>
                                <form action="index.php" method="post" class="aa-login-form">
                                    <label for="">Tên đăng nhập<span>*</span></label>
                                    <input type="text" name="username" placeholder="Tên đăng nhập"value="<?php echo $_POST['username'] ?? '' ?>"><label style="color:red"><?= (isset($err['username']) ? $err['username'] : '') ?></label>
                                    <label for="">Mật khẩu đăng nhập<span>*</span></label>
                                    <input type="password" name="password" placeholder="Mật khẩu">
                                    <button name="btn_login" class="aa-browse-btn">Đăng Nhập</button>
                                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme" name="ghi_nho"> Ghi nhớ </label>
                                    <p class="aa-lost-password"><a href="<?=$SITE_URL ?>/tai-khoan/index.php?registration">Đăng ký</a>/<a href="index.php?Forgot_pass">Quên mật khẩu?</a></p>
                                    
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