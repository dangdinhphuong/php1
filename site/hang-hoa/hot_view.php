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


 <section id="aa-product-category">
   <div class="container">
     <div class="row">
       <div class="col-lg-12 col-md-12 col-12">
         <div class="aa-product-catg-content">
           <div class="aa-product-catg-head">
             <div class="aa-product-catg-head-left">
               <form action="index.php" method="post"class="aa-sort-form">
                 <label for=""><button  name="filter" style="border: none; box-shadow: 0px 0px 5px #515050;">Lọc</button></label>
                 <select name="" style="font-size: 15px;">
                 
                   <option value="1" selected="Phù hợp nhất">Phù hợp nhất</option>
                   <option value="2">Giá từ thấp tới cao</option>
                   <option value="3">Giá từ cao tới thấp</option>
                 </select>
                 
               </form>
               <!-- <form action="" class="aa-show-form">
                  <label for="">Show</label>
                </form> -->
             </div>
             <div class="aa-product-catg-head-right">
               <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
               <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
             </div>
           </div>
           <div class="aa-product-catg-body">
             <ul class="aa-product-catg">

             <?php foreach($hang_hoa_select_page_hot_view as $iten){extract($iten); ?>
              
               <li style="width: 22.3%; box-shadow: 0px 0px 8px #515050; " >
                 <figure>
                   <a class="aa-product-img" href="index.php?detail&id=<?= $id?>&cate_id=<?= $cate_id?>"><img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="polo shirt img" width="250px" height="300px"></a>
                   <a class="aa-add-card-btn" href="index.php?detail&id=<?= $id?>&cate_id=<?= $cate_id?>&product_id=<?= $id?>"><span class="fa fa-shopping-cart"></span>Mua</a>
                   <figcaption style="border-top: 1px solid #515050;">
                                                        <h4 class="aa-product-title"><a href="#"><?= $name ?></a></h4>
                                                        <?php
                         $toll_sale=100-$sale;
                        $tich=$toll_sale*$price;
                        $price_sale=number_format($tich/100);
                        $price_fomat=number_format($price);
                        ?>
                                                        <span class="aa-product-price"><?= $price_sale? "$price_sale VNĐ" : "Miễn phí" ?></span><span class="aa-product-price" style="color: black; font-size:13px;"><del><?= $sale? "$price_fomat" : "" ?></del></span>
                                                    </figcaption>
                                                </figure>
                 </figure>
                 <div class="aa-product-hvr-content">
                   <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                   <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                   <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                 </div>
                 <span class="aa-badge aa-sale" href="#">-<?= $sale ?>%</span>
               </li>

             <?php } ?>
             </ul>

           </div>
           <div class="aa-product-catg-pagination">
             <nav>
               <ul class="pagination" style="border:none">

               <?php if($_SESSION['total_page']>1) {?>
                 <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) {?>
                  <li> <a href="?btn_list_view&page_no=<?= $i ?>"style="padding: 10px; text-decoration: none; border:1px solid gray;border-radius: 3px; color: black ;font-size: 13px"><?php echo"$i"?></a></li>
                        <!-- echo '<a href="?btn_list&page_no=' . $i . '">' .  . '</a>'; -->
                    <?php } ?> <?php } ?>

                 
               </ul>
             </nav>
           </div>
         </div>
       </div>

     </div>
   </div>
 </section>
 <!-- / product category -->







 