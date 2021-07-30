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
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="../../content/images/banner/unnamed.jpg" height="300px" width="1920">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Fashion</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= $SITE_URL ?>/trang-chinh">Home</a></li>
                    <li class="active">Women</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <!-- <?php
                                                    var_dump($items);

                                                    ?> -->
                                            <div class="simpleLens-big-image-container" >
                                            <a data-lens-image="<?= $CONTENT_URL ?>/images/products/<?= $items['image'] ?>" class="simpleLens-lens-image">
                                            <img src="<?= $CONTENT_URL ?>/images/products/<?= $items['image'] ?>" class="simpleLens-big-image" width="100%" height="400px" >
                                            </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3><?= $items['name'] ?></h3>
                                    <h3></h3>
                                    <div class="aa-price-block">
                                        <?php
                                        $toll_sale = 100 - $items['sale'];
                                        $tich = $toll_sale * $items['price'];
                                        $price_sale = number_format($tich / 100);
                                        $price_fomat = number_format($items['price']);
                                        ?>
                                        <span class="aa-product-view-price"><?= $price_sale ?></span>
                                        <p class="aa-product-avilability">Hiện trạng: <span>Còn hàng</span></p>
                                    </div>
                                    <h3><?= $items['description'] ?></h3>
                                    <h4>Kích thước</h4>
                                    <div class="aa-prod-view-size">
                                        <a href="#">S</a>
                                        <a href="#">M</a>
                                        <a href="#">L</a>
                                        <a href="#">XL</a>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a class="aa-add-to-cart-btn" href="#">Thêm vào giỏ hàng</a>
                                        <a class="aa-add-to-cart-btn" href="#">Danh sách yêu thích</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <!-- Related product -->
                        <div class="aa-product-related-item">
                            <h3>Sản phẩm liên quan</h3>
                            <ul class="aa-product-catg aa-related-item-slider">
                                <?php foreach ($hh_cate_id as $iten) {
                                    extract($iten); ?>
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="index.php?detail&id=<?= $id ?>&cate_id=<?= $hh_cate_id[0]['cate_id']?>"><img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="polo shirt img" width="250px" height="300px"></a>
                                            <a class="aa-add-card-btn" href="index.php?detail&id=<?= $id ?>&cate_id=<?= $hh_cate_id[0]['cate_id']?>"><span class="fa fa-shopping-cart"></span>Mua</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#"><?= $name ?></a></h4>
                                                <?php
                                                $toll_sale = 100 - $sale;
                                                $tich = $toll_sale * $price;
                                                $price_sale = number_format($tich / 100);
                                                $price_fomat = number_format($price);
                                                ?>
                                                <span class="aa-product-price"><?= $price_sale ? "$price_sale VNĐ" : "Miễn phí" ?></span><span class="aa-product-price" style="color: black; font-size:13px;"><del><?= $sale ? "$price_fomat" : "" ?></del></span>
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
                                <?php } ?>

                            </ul>

                        </div>
                    <div class="aa-product-details-bottom">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li><a href="#description" data-toggle="tab">Chi tiết sản phẩm</a></li>
                            <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                <p><?= $items['detail'] ?></p>
                            </div>
                            <div class="tab-pane fade " id="review">
                                <div class="aa-product-review-area">
                                    <h4>2 Reviews for T-Shirt</h4>
                                    <ul class="aa-review-nav">
                                        <?php
                                        foreach ($binh_luan as $item) {
                                            extract($item);
                                        ?>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <!-- <a href="#">
                                                            <img class="media-object" src="<?= $image ?>" alt="girl image">
                                                        </a> -->
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong><?= $fullname ?></strong> - <span><?= $created_at ?></span></h4>
                                                        <div class="aa-product-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-o"></span>

                                                        </div>
                                                        <p><?= $content ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    <h4>Bình luận sản phẩm</h4>
                                    <div class="aa-your-rating">
                                        <!-- review form -->
                                        <form action="index.php?add-binh-luan&id=<?= $items['id'] ?>" method="post" class="aa-review-form">
                                            <div class="form-group">
                                                <label for="message">Bình luận của bạn</label>
                                                <!-- product_id-> -->
                                                <input type="hidden" name="product_id" value="<?= $items['id'] ?>">
                                                <!-- user_id-> -->
                                               <?php $a= isset($_SESSION['user']['id']) ?$_SESSION['user']['id']: "";?>
                                                <input type="hidden" name="user_id" value="<?php echo $a ?>">
                                                <!-- cate_id-> -->
                                                <input type="hidden" name="cate_id" value="<?=$items['cate_id']?>">
                                                <textarea class="form-control" rows="3" id="message" name="content"></textarea>
                                                <?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                                                $a = date("Y-m-d"); ?>
                                                
                                                <input name="created_at" value="<?php echo "$a" ?>" style="display: none;" >
                                            </div>
                                            <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>
<!-- / product category -->