<?php
//kiểm tra nếu ko có session thì điều hướng về trong login 

if (!isset($_SESSION['user'])) {
    $image2 = "<img src='../../content/images/users/users.jpg' alt='User image' class='dropdown-toggle' data-toggle='user-menu'style=' width: 39px;height: 39px;border-radius: 50%;'>";
    $login = "<a href='>Đăng Ký</a><a href='$SITE_URL/tai-khoan/index.php?login'>Đăng Nhập</a>";
    $login="<a class='dropdown-item d-flex justify-content-start' href='$SITE_URL/tai-khoan/index.php?login'><div><i class='fas fa-sign-out-alt'></i ></div><span>Đăng Nhập</span></a>";
} else if (isset($_SESSION['user']) && ($_SESSION['user']['role']) == 0) {
    $a = $_SESSION['user']['image'];
    $admin="<a class='dropdown-item d-flex justify-content-start' href='$ADMIN_URL/hang-hoa/'><div><i class='fas fa-users-cog'></i></div><span>Admin</span></a>";
    $user="<a class='dropdown-item d-flex justify-content-start' href='$SITE_URL/trang-chinh/index.php?Profile'><div> <i class='fas fa-user-tie'></i> </div><span>Thông tin tài khoản</span></a>";
    $login="<a class='dropdown-item d-flex justify-content-start' href='$ADMIN_URL/hang-hoa/logout.php'><div><i class='fas fa-sign-out-alt'></i ></div><span>Đăng Xuất</span></a>";
    $image2 = "<img src='../../content/images/users/$a' alt='User image' class='dropdown-toggle' data-toggle='user-menu' style=' width: 39px;height: 39px;border-radius: 50%;'>";
} else {
    $user="<a class='dropdown-item d-flex justify-content-start' href='$SITE_URL/trang-chinh/index.php?Profile'><div> <i class='fas fa-user-tie'></i> </div><span>Thông tin tài khoản</span></a>";

    $a = $_SESSION['user']['image'];
    $image2 = "<img src='../../content/images/users/$a' alt='User image' class='dropdown-toggle' data-toggle='user-menu'style=' width: 39px;height: 39px;border-radius: 50%;'>";
    $login="<a class='dropdown-item d-flex justify-content-start' href='$ADMIN_URL/hang-hoa/logout.php'><div><i class='fas fa-sign-out-alt'></i ></div><span>Đăng Xuất</span></a>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop</title>

    <!-- Font awesome -->
    <link rel="stylesheet" type="text/css" href="../../content/fontawesome-free/css/all.min.css">
    <link href="../../content/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../../content/css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../../content/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="../../content/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../../content/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../../content/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="../../content/css/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="../../content/css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="../../content/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="../../content/css/style2.css" rel="stylesheet">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="../../content/css/product.css" rel="stylesheet">
</head>

<body>
    <!-- wpf loader Two -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <!-- start language -->
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="../../content/images/img/flag/vn.jpg">VIET NAM

                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><img src="../../content/images/img/flag/vn.jpg" alt="">VIET NAM</a></li>
                                            <li><a href="#"><img src="../../content/images/img/flag/english.jpg" alt="">ENGLISH</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / language -->

                                <!-- start currency -->
                                <div class="aa-currency">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            VND

                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                            <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / currency -->
                                <!-- start cellphone -->
                                <div class="cellphone hidden-xs">
                                    <p><span class="fa fa-phone"></span>09-76-594-507</p>
                                </div>
                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li>
                                        <div class="dropdown show">
                                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php if (isset($image2)) { echo $image2;} ?>   
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                <?php if (isset($user)) { echo $user;} ?>
                                                <?php if (isset($admin)) { echo $admin;} ?>
                                                <a class="dropdown-item d-flex justify-content-start" href="#">
                                                    <div>
                                                        <i class="fas fa-cog"></i>
                                                    </div>
                                                    <span>Cài đặt</span>
                                                </a>
                                                <?php if (isset($login)) { echo $login;} ?>
                                            </div>
                                        </div>
                                    </li>
                                    <style>
                                        .dropdown-menu {
                                            width: 200px;
                                        }

                                        .dropdown-item span {
                                            margin-left: 10px;
                                        }
                                    </style>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header top  -->

        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href="index.html">
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>Phương<strong>Đình</strong> <span>Phục vụ bạn là hạnh của chúng tôi</span></p>
                                </a>
                                <!-- img based logo -->
                                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class="aa-cartbox">
                                <a class="aa-cart-link" href="#">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">Giỏ Hàng</span>
                                    <span class="aa-cart-notify">2</span>
                                </a>
                                <!-- <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div> -->
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class="aa-search-box">
                                <form action="<?= $SITE_URL ?>/hang-hoa?keywords=<?php $keywords ?>" method="get">
                                    <input type="text" name="keywords" id="" placeholder="Nhập từ khóa sản phẩm">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
    </header>
    <!-- / header section -->





    <?php
    require $VIEW_NAME;
    ?>
    </div>

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li><a href="#"><img src="../../content/images/sipper/viettel-post.jpeg" alt="java img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/giao-hang-tiet-kiem.png" alt="jquery img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/viettel-post.jpeg" alt="html5 img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/tải xuống.png" alt="css3 img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/partner_kerry-768x245.png" alt="wordPress img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/images.jpg" alt="joomla img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/b5-6-600x400.jpg" alt="java img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/viettel-post.jpeg" alt="html5 img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/tải xuống.png" alt="css3 img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/partner_kerry-768x245.png" alt="wordPress img"></a></li>
                            <li><a href="#"><img src="../../content/images/sipper/images.jpg" alt="joomla img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>ĐĂNG KÝ BẢN TIN CỦA CHÚNG TÔI </h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p> -->
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Nhập Email">
                            <input type="submit" value="Đăng kí">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->
    <!-- footer -->
    <footer id="aa-footer">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="aa-footer-widget">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Menu</font>
                                            </font>
                                        </h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Trang Chủ</font>
                                                    </font>
                                                </a></li>
                                            <li><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giới thiệu</font>
                                                    </font>
                                                </a></li>
                                            <li><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Hỏi Đáp</font>
                                                    </font>
                                                </a></li>
                                            <li><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Góp ý</font>
                                                    </font>
                                                </a></li>
                                            <li><a href="#">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Liên hệ chúng tôi</font>
                                                    </font>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--                                <div class="col-md-3 col-sm-6">-->
                                <!--                                    <div class="aa-footer-widget">-->
                                <!--                                        <div class="aa-footer-widget">-->
                                <!--                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kiến thức cơ bản</font></font></h3>-->
                                <!--                                            <ul class="aa-footer-nav">-->
                                <!--                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chuyển</font></font></a></li>-->
                                <!--                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lợi nhuận</font></font></a></li>-->
                                <!--                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dịch vụ</font></font></a></li>-->
                                <!--                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá</font></font></a></li>-->
                                <!--                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đề nghị đặc biệt</font></font></a></li>-->
                                <!--                                            </ul>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Liên kết</font>
                                                </font>
                                            </h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Bản Đồ</font>
                                                        </font>
                                                    </a></li>
                                                <li><a href="#">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Tìm kiếm</font>
                                                        </font>
                                                    </a></li>
                                                <li><a href="#">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Các nhà cung cấp</font>
                                                        </font>
                                                    </a></li>
                                                <li><a href="#">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Câu hỏi thường gặp</font>
                                                        </font>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Liên hệ chúng tôi</font>
                                                </font>
                                            </h3>
                                            <address>
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"> Số 3 Âu Cơ-Tây Hồ-Hà Nội</font>
                                                    </font>
                                                </p>
                                                <p><span class="fa fa-phone"></span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">+84 976-594-507</font>
                                                    </font>
                                                </p>
                                                <p><span class="fa fa-envelope"></span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">phuongddph10045@fpt.edu.vn</font>
                                                    </font>
                                                </p>
                                            </address>
                                            <div class="aa-footer-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-youtube"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="aa-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-bottom-area">
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Được thiết kế bởi </font>
                                </font><a href="http://www.markups.io/">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">PhươngĐinh.ui</font>
                                    </font>
                                </a>
                            </p>
                            <div class="aa-footer-payment">
                                <span class="fa fa-cc-mastercard"></span>
                                <span class="fa fa-cc-visa"></span>
                                <span class="fa fa-paypal"></span>
                                <span class="fa fa-cc-discover"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->

    <!-- Login Modal -->
    <!-- <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog"> -->
    <!-- <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Đăng Nhập</h4>
                    <form class="aa-login-form" action="../../site/tai-khoan/index.php">
                    <label for="">Tên đăng nhập<span>*</span></label>
                                    <input type="text" name="username" placeholder="Tên đăng nhập"value="<?php echo $_POST['username'] ?? '' ?>"><label style="color:red"><?= (isset($err['username']) ? $err['username'] : '') ?></label>
                                    <label for="">Mật khẩu đăng nhập<span>*</span></label>
                                    <input type="password" name="password" placeholder="Mật khẩu">
                                    <button name="btn_login" class="aa-browse-btn">Đăng Nhập</button>
                                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme" name="ghi_nho"> Ghi nhớ </label>
                                    <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                        <div class="aa-register-now">
                            Không có tài khoản?<a href="<?= $SITE_URL ?>/tai-khoan/">Đăng Ký Ngay!</a>
                        </div>
                    </form>
                </div>
            </div>  -->
    <!-- /.modal-content -->
    <!-- </div> -->
    <!-- /.modal-dialog -->
    <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../content/js/bootstrap.js"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="../../content/js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="../../content/js/jquery.smartmenus.bootstrap.js"></script>
    <!-- To Slider JS -->
    <script src="../../content/js/sequence.js"></script>
    <script src="../../content/js/sequence-theme.modern-slide-in.js"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="../../content/js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="../../content/js/jquery.simpleLens.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="../../content/js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="../../content/js/nouislider.js"></script>
    <!-- Custom js -->
    <script src="../../content/js/custom.js"></script>

</body>

</html>






