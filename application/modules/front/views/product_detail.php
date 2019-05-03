<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>shop single</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="about.html">shop single</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!-- product Description section Start -->
<div class="ast_proSingle_wrapper ast_toppadder70 ast_bottompadder40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product_detail_wrap">
                    <!-- product details Start -->
                    <div class="product_detail_cover">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <!-- <div class="product_slider">
                                    <div class="pro_slides_carousel"> -->
                                <?php   
                                        // if(!empty($products[0]->images)){
                                        //     $images = explode(',',$products[0]->images);
                                        //     foreach ($images as $value) {
                                                ?>
                                <!--  <div class="slick_item">
                                            <img src="<?php echo base_url('asset/uploads/'.$value)?>" class="img-responsive" />
                                        </div> -->
                                <?php //}}?>
                                <!--  </div>
                                    <div class="pro_slider_thumbs"> -->
                                <?php   
                                        // if(!empty($products[0]->images)){
                                        //     $images = explode(',',$products[0]->images);
                                        //     foreach ($images as $value) {
                                                ?>
                                <!--  <div class="pro_thumb">
                                            <img src="<?php echo base_url('asset/uploads/'.trim($value))?>" class="img-responsive" />
                                        </div> -->
                                <?php //}}?>
                                <!-- </div>
                                </div> -->
                                <div id="main_area">
                                    <!-- Slider -->
                                    <div class="row">
                                        <div class="col-xs-12" id="slider">
                                            <!-- Top part of the slider -->
                                            <div class="row">
                                                <div class="col-sm-12" id="carousel-bounding-box">
                                                    <div class="carousel slide" id="myCarousel">
                                                        <!-- Carousel items -->
                                                        <div class="carousel-inner big-img">
                                                        <?php   
                                                            if(!empty($products[0]->images)){
                                                                $images = explode(',',$products[0]->images);
                                                                $i=0;
                                                                foreach ($images as $value) {
                                                        ?>
                                                            <div class="<?php if($i==0){?>active<?php }?> item" data-slide-number="<?php echo $i?>">
                                                                <img src="<?php echo base_url('asset/uploads/'.trim($value))?>"></div>
                                                        <?php $i++;}}?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" id="carousel-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row " id="slider-thumbs">
                                        <div class='row'>
                                            <div class='col-md-12'>
                                                <div class="carousel slide media-carousel" id="media">
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <div class="row">
                                                        <?php   
                                                            if(!empty($products[0]->images)){
                                                                $images = explode(',',$products[0]->images);
                                                                
                                                                for ($i=0; $i <count($images) ; $i++) { 
                                                                    if($i<=2){                                                                   
                                                               
                                                        ?>
                                                                <div class="col-xs-4 col-md-4">
                                                                    <a class="thumbnail"><img alt="" id="carousel-selector-<?php echo $i?>" src="<?php echo base_url('asset/uploads/'.trim($images[$i]))?>"></a>
                                                                </div>
                                                        <?php }}}?>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                             <?php   
                                                                if(!empty($products[0]->images)){
                                                                $images = explode(',',$products[0]->images);
                                                                
                                                                for ($i=2; $i <count($images) ; $i++) { 
                                                                    if($i<3){
                                                            ?>
                                                                <div class="col-xs-4 col-md-4 ">
                                                                    <a class="thumbnail"><img alt="" id="carousel-selector-<?php echo $i?>" src="<?php echo base_url('asset/uploads/'.trim($images[$i]))?>"></a>
                                                                </div>
                                                                <?php }}}?>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-8 col-xs-12">
                                <div class="product_description">
                                    <h3>
                                        <?php if(!empty($products[0]->name)){ echo strtoupper($products[0]->name);}?>
                                    </h3>
                                    <div class="product_rating">
                                        <span class="ref_number">Ref No.
                                            <?php if(!empty($products[0]->ref_no)){ echo $products[0]->ref_no;}?></span>
                                        <span class="rating_star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <p>
                                        <?php if(!empty($products[0]->description)){ echo strtoupper($products[0]->description);}?>
                                    </p>
                                    <div class="stock_details">8 In Stock</div>
                                    <div class="prod_quantity">QTY <input type="number" name="quantity" id="quantity" value="1" min="1" /></div>
                                    <div class="product_buy">
                                        <button type="button" class="buy_btn ast_btn" value="Buy Now">Buy Now</button>
                                        <a href="#" class="ad_wishlist">Add To Wishlist <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details End -->
                    <!-- product description tabs -->
                    <div class="product_desc_tabs">
                        <ul class="tabs">
                            <li class="tab-link current" data-tab="tab-1">descriptions</li>
                            <!-- <li class="tab-link" data-tab="tab-2">reviews</li> -->
                        </ul>
                        <div class="product_tab_content">
                            <div id="tab-1" class="tab_content current">
                                <h4>Description</h4>
                                <p>
                                    <?php if(!empty($products[0]->brief_description)){ echo strtoupper($products[0]->brief_description);}?>
                                </p>
                                <!-- <h4>Features</h4>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                                </p> -->
                            </div>
                            <!--  <div id="tab-2" class="tab_content">
                                <h4>review</h4>
                                <p>there are no reviews yet</p>
                                <h4>add a review</h4>
                                <p>Your email address will not be published.</p>
                                <form class="ast_review_form">
                                    <textarea placeholder="Your Review" rows="6"></textarea>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" placeholder="Your Name">
                                        </div>  
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <a href="#" class="ast_btn">submit</a>                                  
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <!-- product description tabs -->
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_related_pro ast_toppadder70">
                    <div class="ast_heading">
                        <h1>related <span>products</span></h1>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="ast_product_section">
                                <div class="ast_product_image">
                                    <a href="shop_single.html"><img src="images/content/Products/Gemstone.jpg" class="img-responsive"></a>
                                </div>
                                <div class="ast_product_info">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h4 class="ast_shop_title"><a href="shop_single.html">gemstones</a></h4>
                                    <p>$30.00</p>
                                    <div class="ast_info_bottom">
                                        <a href="#" class="ast_add_cart ast_btn">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ast_product_section">
                                <div class="ast_product_image">
                                    <a href="shop_single.html"><img src="images/content/Products/Navgrah.jpg" class="img-responsive"></a>
                                </div>
                                <div class="ast_product_info">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h4 class="ast_shop_title"><a href="shop_single.html">navgraha Yantra</a></h4>
                                    <p>$30.00</p>
                                    <div class="ast_info_bottom">
                                        <a href="#" class="ast_add_cart ast_btn">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ast_product_section">
                                <div class="ast_product_image">
                                    <a href="shop_single.html"><img src="images/content/Products/Rudhrakhsa.jpg" class="img-responsive"></a>
                                </div>
                                <div class="ast_product_info">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h4 class="ast_shop_title"><a href="shop_single.html">rudraksha</a></h4>
                                    <p>$30.00</p>
                                    <div class="ast_info_bottom">
                                        <a href="#" class="ast_add_cart ast_btn">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ast_product_section">
                                <div class="ast_product_image">
                                    <a href="shop_single.html"><img src="images/content/Products/Fengshui.jpg" class="img-responsive"></a>
                                </div>
                                <div class="ast_product_info">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h4 class="ast_shop_title"><a href="shop_single.html">fang shui</a></h4>
                                    <p>$30.00</p>
                                    <div class="ast_info_bottom">
                                        <a href="#" class="ast_add_cart ast_btn">add to cart</a>
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
<!-- product Description section End -->

<style type="text/css">
    .hide-bullets {
        list-style: none;
        margin-left: -40px;
        margin-top: 20px;
    }

    .hide-bullets li {
        padding: 3px;
    }

    #main_area .big-img img {
        width: 200px;
        height: auto;
    }

    /* carousel */
    .media-carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
        margin-top: 30px;
    }

    /* Previous button  */
    .media-carousel .carousel-control.left {
        left: -12px;
        background-image: none;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px 23px 23px 23px;
        height: 40px;
        width: 40px;
        margin-top: 30px
    }

    /* Next button  */
    .media-carousel .carousel-control.right {
        right: -12px !important;
        background-image: none;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px 23px 23px 23px;
        height: 40px;
        width: 40px;
        margin-top: 30px
    }

    /* Changes the position of the indicators */
    .media-carousel .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }

    /* Changes the colour of the indicators */
    .media-carousel .carousel-indicators li {
        background: #c0c0c0;
    }

    .media-carousel .carousel-indicators .active {
        background: #333333;
    }

    .media-carousel img {
        width: 250px;
        height: 100px
    }

    /* End carousel */
</style>