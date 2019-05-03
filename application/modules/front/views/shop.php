<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>shop</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="shop.html">shop</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!-- shop section start -->
<div class="ast_shop_wrapper ast_toppadder70 ast_bottompadder70">
    <!-- Google add Start -->
    <div class="adds">
        <div class="container">
            <div class="jumbotron">
                <h2>Add</h2>
            </div>
        </div>
    </div>
    <!-- Google add Ends -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="ast_shop_main">
                        <?php foreach ($products as $key => $product) {?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="ast_product_section">
                                <div class="ast_product_image">
                                    <a href="<?php echo base_url('front/product_details/'.$product->p_id);?>"><img src="<?php echo base_url('asset/uploads/'.$product->image) ?>" class="img-responsive"></a>
                                </div>
                                <div class="ast_product_info">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h4 class="ast_shop_title"><a href="<?php echo base_url('front/product_details/'.$product->p_id);?>"><?php echo $product->name; ?></a></h4>
                                    <p>$<?php echo number_format($product->price); ?></p>
                                    <div class="ast_info_bottom">
                                        <a href="javascript:void(0)" data-id="<?php echo $product->p_id;?>" class="ast_add_cart ast_btn">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="ast_shop_sidebar sidebar_wrapper">
                    <aside class="widget widget_filter">
                        <h4 class="widget-title">filter by price</h4>
                        <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                        <div class="filter_input">
                            <input type="text" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                            <input type="text" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                        </div>
                        <button class="price-range-search ast_btn" id="price-range-submit">Search</button>
                    </aside>
                    <aside class="widget widget_categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                        <?php foreach($categories as $category){?>
                            <li><a href="<?php echo base_url('front/shop/'.$category->id); ?>"><?php echo strtoupper($category->name);?></a></li>
                        <?php }?>   
                        </ul>
                    </aside>
                    <aside class="widget widget_latest_product">
                        <h4 class="widget-title">new products</h4>
                        <ul>
                        <?php  foreach(array_reverse($products) as $product){?>
                            <li><a href="<?php echo base_url('front/product_details/'.$product->p_id); ?>"><?php echo strtoupper($product->name);?></a></li>
                        <?php }?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop section end 