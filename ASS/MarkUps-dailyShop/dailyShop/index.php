<?php
session_start();
//kiểm tra nếu ko có session thì điều hướng về trong login
if (!isset($_SESSION['users'])) {
  $login = "login";
} else {

  $login = "<a href='logout.php'>Logout</a>";
}


?>

<?php
require_once 'connection.php';
//Câu lênh SQL lấy ra toàn bộ dữ liệu
$sql = "SELECT * FROM products ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result  = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
//Lấy ra toàn bộ dữ liệu của bảng categories
$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include_once "layout/header.php" ?>

  
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">
                <?php foreach ($category as $c) : ?>
                    <li><a href="categories.php?id=<?= $c['cate_id'] ?>#ad"><?= $c['cate_name'] ?></a></li>
                <?php endforeach;  ?>
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Start men product category -->
                  <div class="tab-pane fade in active" id="1">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <?php foreach ($result as $r) : ?>
                        <?php if ($r['cate_id'] == 1) { ?>
                          <li>

                            <figure>
                              <a href="product-detail.php?id=<?= $r['pro_id'] ?>">
                                <span></span>
                                <div class="aa-product-img" href="#"><img src="../images/<?= $r['pro_image'] ?>" width="250" height="300"></div>
                                <div class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</div>

                                <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?= $r['pro_name'] ?></a></h4>
                                  <span class="aa-product-price">$<?= $r['price'] ?><del>$<?= $r['price_start'] ?></del></span>
                                </figcaption>
                              </a>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>

                          </li>
                        <?php } ?>
                      <?php endforeach; ?>
                    </ul>
                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / men product category -->
                  <!-- start women product category -->
                  <div class="tab-pane fade" id="2">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <?php foreach ($result as $r) : ?>
                        <?php if ($r['cate_id'] == 2) { ?>
                          <li>

                            <figure>
                              <a href="categories.php?id=<?= $r['pro_id'] ?>">
                                <span></span>
                                <div class="aa-product-img" href="#"><img src="../images/<?= $r['pro_image'] ?>" width="250" height="300"></div>
                                <div class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</div>

                                <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?= $r['pro_name'] ?></a></h4>
                                  <span class="aa-product-price">$<?= $r['price'] ?><del>$<?= $r['price_start'] ?></del></span>
                                </figcaption>
                              </a>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>

                          </li>
                        <?php } ?>
                      <?php endforeach; ?>
                    </ul>
                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>




                  <!-- / women product category -->
                  <!-- start sports product category -->
                  <div class="tab-pane fade" id="3">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <?php foreach ($result as $r) : ?>
                        <?php if ($r['cate_id'] == 3) { ?>
                          <li>

                            <figure>
                              <a href="product-detail.php?id=<?= $r['pro_id'] ?>">
                                <span></span>
                                <div class="aa-product-img" href="#"><img src="../images/<?= $r['pro_image'] ?>" width="250" height="300"></div>
                                <div class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</div>

                                <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?= $r['pro_name'] ?></a></h4>
                                  <span class="aa-product-price">$<?= $r['price'] ?><del>$<?= $r['price_start'] ?></del></span>
                                </figcaption>
                              </a>
                            </figure>
                            <div class="aa-product-hvr-content">
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                              <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>

                          </li>
                        <?php } ?>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <!-- / sports product category -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-banner-area">
              <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdKjU_5Wk-i8eOc_B56dI1ThTlRGI15gk0UQ&usqp=CAU" alt="fashion banner img" width="1170" height="170" ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <?php foreach ($result as $r) : ?>
                      <?php if ($r['cate_id'] == 1) { ?>
                        <li>

                          <figure>
                            <a href="product-detail.php?id=<?= $r['pro_id'] ?>">
                              <span></span>
                              <div class="aa-product-img" href="#"><img src="../images/<?= $r['pro_image'] ?>" width="250" height="300"></div>
                              <div class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</div>

                              <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?= $r['pro_name'] ?></a></h4>
                                <span class="aa-product-price">$<?= $r['price'] ?><del>$<?= $r['price_start'] ?></del></span>
                              </figcaption>
                            </a>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>

                        </li>
                      <?php } ?>
                    <?php endforeach; ?>
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->

                <!-- start featured product category -->
                <div class="tab-pane fade" id="featured">
                  <ul class="aa-product-catg aa-featured-slider">
                  <?php foreach ($result as $r) : ?>
                      <?php if ($r['cate_id'] == 2) { ?>
                        <li>

                          <figure>
                            <a href="product-detail.php?id=<?= $r['pro_id'] ?>">
                              <span></span>
                              <div class="aa-product-img" href="#"><img src="../images/<?= $r['pro_image'] ?>" width="250" height="300"></div>
                              <div class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</div>

                              <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?= $r['pro_name'] ?></a></h4>
                                <span class="aa-product-price">$<?= $r['price'] ?><del>$<?= $r['price_start'] ?></del></span>
                              </figcaption>
                            </a>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>

                        </li>
                      <?php } ?>
                    <?php endforeach; ?>
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    <?php foreach ($result as $r) : ?>
                      <?php if ($r['cate_id'] == 3) { ?>
                        <li>

                          <figure>
                            <a href="product-detail.php?id=<?= $r['pro_id'] ?>">
                              <span></span>
                              <div class="aa-product-img" href="#"><img src="../images/<?= $r['pro_image'] ?>" width="250" height="300"></div>
                              <div class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</div>

                              <figcaption>
                                <h4 class="aa-product-title"><a href="#"><?= $r['pro_name'] ?></a></h4>
                                <span class="aa-product-price">$<?= $r['price'] ?><del>$<?= $r['price_start'] ?></del></span>
                              </figcaption>
                            </a>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>

                        </li>
                      <?php } ?>
                    <?php endforeach; ?>
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
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
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
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
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                  <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Allison</p>
                    <span>Designer</span>
                    <a href="#">Dribble.com</a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                  <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>KEVIN MEYER</p>
                    <span>CEO</span>
                    <a href="#">Alphabet</a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                  <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Luner</p>
                    <span>COO</span>
                    <a href="#">Kinatic Solution</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>LATEST BLOG</h2>
            <div class="row">
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">
                    <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                    <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">
                    <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>
                    <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">
                    <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                    <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
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
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->
  <?php include_once "layout/footer.php" ?>