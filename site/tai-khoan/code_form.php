<?php

var_dump($_SESSION['code']);
?>
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
                                <form action="to_code.php" method="post" class="aa-login-form">
                                    <label for="">Nhập mã chúng tôi giửi vào email của bạn<span>*</span></label>
                                    <input type="number" name="number_code" value="<?php echo $_POST['number_code'] ?? '' ?>">
                                    <label style="color:red"><?= (isset($errors['number_code']) ? $errors['number_code'] : '') ?></label>
                                    <button name="btn_code" class="aa-browse-btn">Giửi</button>
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