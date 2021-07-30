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
                           <li><a href="<?= $SITE_URL ?>/trang-chinh">Tiết kiệm </a></li>
                           <li><a href="<?= $SITE_URL ?>/trang-chinh">Bán hàng cùng PhuongDinh</a></li>
                           <li><a href="<?= $SITE_URL ?>/trang-chinh">Kiểm tra hóa đơn</a></li>
                           <li><a href="<?= $SITE_URL ?>/trang-chinh">Hoàn tiền 30 ngày</a></li>
                           <li><a href="<?= $SITE_URL ?>/trang-chinh">Sản phẩm được ưa thích</a></li>
                       </ul>
                   </div>
                   <!--/.nav-collapse -->
               </div>
           </div>
       </div>
   </section>
   <!-- / menu -->
   <!-- Start slider -->

   <!-- / slider -->
   <!-- Start Promo section -->
   <section id="aa-promo">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="aa-promo-area">
                       <div class="row">
                           <!-- promo left -->
                           <!-- <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <div class="aa-promo-banner">
                                    <img src="../../content/images/img/promo-banner-1.jpg" alt="img">
                                    <div class="aa-prom-content">
                                        <span>75%5555 Off</span>
                                        <h4><a href="#">For Women</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                           <!-- promo right -->


                           <div class="col-md-2 no-padding">
                               <div class="aa-promo-left menu">
                                   <div class=" aa-promo-banner2">

                                       <ul class="ul_menu nav flex-column" style=" padding-left:10px">
                                           <?php
                                            foreach ($loai_hang as $item) {
                                                extract($item);
                                            ?>
                                               <a class="nav-link" href="<?= $SITE_URL ?>/hang-hoa/index.php?product&cate_id=<?= $id ?>">
                                                   <li class="nav-item d-flex justify-content-start">
                                                       <img src="../../content/images/icon/<?= $item['icon'] ?>" width="32px" height="32px"> <span> <?= $item['name'] ?> </span>
                                                   </li>
                                               </a>
                                           <?php
                                            } ?>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <style>
                               .text {
                                   font-size: 85%;
                               }

                               html {
                                   background-color: #F4F4F4 !important;
                               }

                               .menu {
                                   border: 1px solid #80808045;
                                   background-color: #fff;
                               }

                               .aa-promo-banner:before {
                                   background: #ffffff00 !important;
                               }

                               #aa-promo .aa-promo-area .aa-promo-banner:hover img {
                                   height: 110% !important;
                                   width: 110% !important;
                                   margin-left: -5% !important;
                                   margin-top: -2% !important;
                                   -webkit-transform: scale(1);
                                   transform: scale(1);
                               }

                               .aa-single-promo-right {
                                   width: 50% !important;
                               }

                               .aa {
                                   position: absolute;
                                   top: -170px;
                               }

                               .aa .aa-single-promo-right {
                                   width: 33.3% !important;
                               }

                               .aa-promo-left {
                                   height: 520px !important;
                               }

                               .aa-promo-right {
                                   height: 350px !important;
                               }

                               .aa-promo-banner,
                               .aa-promo-banner2 {

                                   padding-left: 2.5px;
                                   padding-bottom: 2.5px;
                               }

                               .carousel-item img {
                                   width: 100%;
                                   height: 350px;
                               }
                           </style>
                           <div class="col-md-6 no-padding">
                               <div class="aa-promo-left">
                                   <div class="aa-promo-banner2">
                                       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                           <div class="carousel-inner">
                                               <?php
                                                foreach ($loai_hang as $item) {
                                                    extract($item);
                                                ?>
                                                   <div class="carousel-item <?= $acitve ?>" style="background:<?= $background ?>">
                                                       <a href="<?= $SITE_URL ?>/hang-hoa/index.php?product&cate_id=<?= $id ?>">
                                                           <img class="d-block  " style="  margin: auto;" src="../../content/images/banner/<?= $banner ?>" alt="Second slide">
                                                       </a>
                                                   </div>
                                               <?php
                                                }
                                                ?>
                                           </div>
                                           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Previous</span>
                                           </a>
                                           <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Next</span>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4 no-padding">
                               <div class="aa-promo-right">

                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[0]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>
                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[1]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>


                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[2]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>

                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[5]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>

                               </div>
                           </div>
                           <div class="col-md-10 no-padding col-md-offset-2">
                               <div class="aa-promo-right aa">

                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[4]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>

                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[3]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>


                                   <div class="aa-single-promo-right ">
                                       <div class="aa-promo-banner">
                                           <img src="../../content/images/voucher/<?= $loai_hang[1]['voucher_img'] ?>" alt="img">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- / Promo section -->
   <!-- Products section -->
   <section id="aa-product">
       <div class="container">
           <div class="row">
               <div class="col-md-12 col-12">
                   <div class="row ">
                       <div class="aa-product-area">
                           <div class="aa-product-inner">
                               <!-- Tab panes -->
                               <div class="tab-content ">
                                   <!-- Start men product category -->
                                   <div class="tab-pane fade in active aa1" id="men">
                                       <div class="col-md-12 col-12" style="border-bottom:1px solid #80808052;">
                                           <div class="row">
                                           <div style="padding: 10px;">
                                               <img src="https://frontend.tikicdn.com/_desktop-next/static/img/giasoc.svg" alt="flash deal">
                                               <img src="https://frontend.tikicdn.com/_desktop-next/static/img/flash.gif" alt="flash deal">
                                               <img src="https://frontend.tikicdn.com/_desktop-next/static/img/homnay.svg" alt="flash deal">
                                            </div>
                                           </div>
                                       </div>
                                       <ul class="aa-product-catg ">
                                           <!-- start single product item -->
                                           <?php
                                            foreach ($top8 as $item) {
                                                extract($item);
                                            ?>
                                               <li style="width: 20%; box-shadow: 0px 10px 20px #515050; ">
                                                   <figure>
                                                       <a class="aa-product-img" href="<?= $SITE_URL ?>/hang-hoa/index.php?detail&id=<?= $id ?>&cate_id=<?= $cate_id ?>"><img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="polo shirt img" width="250px" height="300px"></a>
                                                       <a class="aa-add-card-btn" href="<?= $SITE_URL ?>/hang-hoa/index.php?detail&id=<?= $id ?>&cate_id=<?= $cate_id ?>"><span class="fa fa-shopping-cart"></span>Mua</a>
                                                       <figcaption style="border-top: 1px solid #515050;">
                                                           <h4 class="aa-product-title"><a href="#"><?= $name ?></a></h4>
                                                           <?php
                                                            $toll_sale = 100 - $sale;
                                                            $tich = $toll_sale * $price;
                                                            $price_sale = number_format($tich / 100);
                                                            $price_fomat = number_format($price);
                                                            ?>
                                                           <span class="aa-product-price"><?= $price_sale ? "$price_sale VNĐ" : "Miễn phí" ?></span><span class="aa-product-price" style="color: gray; font-size:13px;"><del><?= $sale ? "$price_fomat" : "" ?></del></span>
                                                       </figcaption>
                                                   </figure>
                                                   <div class="aa-product-hvr-content">
                                                       <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                       <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                       <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                   </div>
                                                   <!-- product badge -->
                                                   <span class="aa-badge aa-sale" href="#">-<?= $sale ?>%</span>
                                               </li>

                                           <?php
                                            }
                                            ?>
                                           <!-- start single product item -->
                                       </ul>
                                       <a class="aa-browse-btn" href="<?= $SITE_URL ?>/hang-hoa/index.php?sale_soc">Xem Thêm<span class="fa fa-long-arrow-right"></span></a>
                                   </div>

                               </div>
                               <!-- quick view modal -->

                               <!-- / quick view modal -->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- / Products section -->
   
   


      <!-- Products section -->
      <section id="aa-product">
       <div class="container">
           <div class="row">
               <div class="col-md-12 col-12">
                   <div class="row ">
                       <div class="aa-product-area">
                           <div class="aa-product-inner">
                               <!-- Tab panes -->
                               <div class="tab-content ">
                                   <!-- Start men product category -->
                                   <div class="tab-pane fade in active aa1" id="men">
                                       <div class="col-md-12 col-12" style="border-bottom:1px solid #80808052;">
                                           <div class="row">
                                           <div style="padding: 10px;">
                                               <label for="" style="font-size: 22px; font-family: Roboto, Helvetica, Arial, sans-serif;">TOP SẢN PHẨM HÓT</label>
                                            </div>
                                           </div>
                                       </div>
                                       <ul class="aa-product-catg ">
                                           <!-- start single product item -->
                                           <?php
                                            foreach ($top10 as $item) {
                                                extract($item);
                                            ?>
                                               <li style="width: 20%; box-shadow: 0px 10px 20px #515050; ">
                                                   <figure>
                                                       <a class="aa-product-img" href="<?= $SITE_URL ?>/hang-hoa/index.php?detail&id=<?= $id ?>&cate_id=<?= $cate_id ?>"><img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="polo shirt img" width="250px" height="300px"></a>
                                                       <a class="aa-add-card-btn" href="<?= $SITE_URL ?>/hang-hoa/index.php?detail&id=<?= $id ?>&cate_id=<?= $cate_id ?>"><span class="fa fa-shopping-cart"></span>Mua</a>
                                                       <figcaption style="border-top: 1px solid #515050;">
                                                           <h4 class="aa-product-title"><a href="#"><?= $name ?></a></h4>
                                                           <?php
                                                            $toll_sale = 100 - $sale;
                                                            $tich = $toll_sale * $price;
                                                            $price_sale = number_format($tich / 100);
                                                            $price_fomat = number_format($price);
                                                            ?>
                                                           <span class="aa-product-price"><?= $price_sale ? "$price_sale VNĐ" : "Miễn phí" ?></span><span class="aa-product-price" style="color: gray; font-size:13px;"><del><?= $sale ? "$price_fomat" : "" ?></del></span>
                                                       </figcaption>
                                                   </figure>
                                                   <div class="aa-product-hvr-content">
                                                       <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                       <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                       <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                   </div>
                                                   <!-- product badge -->
                                                   <span class="aa-badge aa-sale" href="#">-<?= $sale ?>%</span>
                                               </li>

                                           <?php
                                            }
                                            ?>
                                           <!-- start single product item -->
                                       </ul>
                                       <a class="aa-browse-btn" href="<?= $SITE_URL ?>/hang-hoa/index.php?hot_view">Xem Thêm<span class="fa fa-long-arrow-right"></span></a>
                                   </div>

                               </div>
                               <!-- quick view modal -->

                               <!-- / quick view modal -->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- / Products section -->

   <!-- Support section -->
   <section id="aa-support">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="aa-support-area">
                       <!-- single support -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="aa-support-single">
                               <span class="fa fa-truck"></span>
                               <h4>Giao hàng miễn phí</h4>
                               <P> Áp dụng cho mọi loại hàng</P>
                           </div>
                       </div>
                       <!-- single support -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="aa-support-single">
                               <span class="fa fa-clock-o"></span>
                               <h4>Hoàn tiền 111%</h4>
                               <P>Phương Đình cam kết hoàn tiền 111%.</P>
                           </div>
                       </div>
                       <!-- single support -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="aa-support-single">
                               <span class="fa fa-phone"></span>
                               <h4>HỖ TRỢ 24/7</h4>
                               <P>SĐT: +84 976594507 (*Miễn phí)</P>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- / Support section -->
   <!-- Testimonial -->
   <section id="aa-testimonial">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="aa-testimonial-area">
                       <ul class="aa-testimonial-slider">

                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                               <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol> -->
                               <div class="carousel-inner">
                                   <div class="carousel-item active">
                                       <li style="background-color: #189EFF;">
                                           <div class="aa-testimonial-single">
                                               <img class="aa-testimonial-img" src="../../content/images/users/beauty_20200521162747.jpg" alt="testimonial img">
                                               <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                               <p>TRANG WEB RẤT TỐT MONG NGÀY CÀNG PHÁT TRIỂN</p>
                                               <div class="aa-testimonial-info">
                                                   <p>ĐẶNG ĐÌNH PHƯƠNG</p>
                                                   <span>Developer</span>
                                                   <a href="http://localhost/phuongph10045_duanmau/site/trang-chinh/">PhươngĐình.com</a>
                                               </div>
                                           </div>
                                       </li>

                                   </div>
                                   <?php
                                    foreach ($binh_luan as $item) {
                                        extract($item);
                                    ?>
                                       <div class="carousel-item">
                                           <li style="background-color: #189EFF;" alt="First slide">
                                               <div class="aa-testimonial-single">
                                                   <img class="aa-testimonial-img" src="../../content/images/users/<?= $image ?>" alt="testimonial img">
                                                   <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                                   <p><?= $content ?></p>
                                                   <div class="aa-testimonial-info">
                                                       <p><?= $fullname ?></p>
                                                       <span>Khách hàng</span>
                                                       <!-- <a href="#">PhươngĐình.com</a> -->
                                                   </div>
                                               </div>
                                           </li>

                                       </div>
                                   <?php
                                    }
                                    ?>
                               </div>
                               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Previous</span>
                               </a>
                               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>
                               </a>
                           </div>


                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- / Testimonial -->