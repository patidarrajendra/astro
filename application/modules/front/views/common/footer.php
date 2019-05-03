<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                <div class="ast_footer_info">
                    <img src="<?php echo base_url('asset/uploads/'.$setting[0]['site_logo'])?>" alt="Logo">
                    <ul>
                        <li><a href="<?php echo $setting[0]['facebook_url'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $setting[0]['google_url']; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $setting[0]['pinterest_url'];?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $setting[0]['linkedin_url'];?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $setting[0]['twitter_url'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">our newsletter</h4>
                    <div class="ast_newsletter">
                        <p>Making it look like readable English.The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters.</p>
                        <div class="ast_newsletter_box">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">our services</h4>
                    <div class="ast_servicelink">
                        <ul>
                            <li><a href="">Daily Horoscope</a></li>
                            <li><a href="">gemstones</a></li>
                            <li><a href="">numerology</a></li>
                            <li><a href="">tarot cards</a></li>
                            <li><a href="">Match Making</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">quick links</h4>
                    <div class="ast_sociallink">
                        <ul>
                            <li><a href="<?php echo base_url('front/about')?>">about</a></li>
                            <li><a href="<?php echo base_url('front/shop')?>">Shop</a></li>
                            <li><a href="<?php echo base_url('front/donate')?>">Donate</a></li>
                            <li><a href="<?php echo base_url('front/contact')?>">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget text-widget">
                    <h4 class="widget-title">get in touch</h4>
                    <div class="ast_gettouch">
                        <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i>
                                <p>2794, Hayhurst Lane Bloomfield Township, MI 48302</p>
                            </li>
                            <li><i class="fa fa-at" aria-hidden="true"></i> <a href="#">
                                    <?php echo $setting[0]['site_mail']; ?></a><a href="#">
                                    <?php echo $setting[0]['site_mail']; ?></a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <p>
                                    <?php echo $setting[0]['site_phone']; ?>
                                </p>
                                <p>
                                    <?php echo $setting[0]['site_alternative_phone']; ?>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_copyright_wrapper">
                    <p>&copy; Copyright <?php echo date('Y')?>, All Rights Reserved, <a href="#">astrology</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer wrapper End-->
<!--Main js file Style-->
<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/jquery.magnific-popup.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/owl.carousel.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/jquery.countTo.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/jquery.appear.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/price_range_script.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/slick/jquery-migrate-1.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/slick/slick.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/custom.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/js/timepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/js/sweetalert.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/custom.js')?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript">
    window.onload = function() {
        get_count();
    };
    $(document).ready(function() {

        // $('#female_birth_time').timepicker({
        //     timeFormat: 'h:mm:ss p',
        //     interval: 1,
        //     scrollbar: true
        // });
        // $('#male_birth_time').timepicker({
        //     timeFormat: 'h:mm:ss p',
        //     interval: 1,
        //     scrollbar: true
        // });
        var date_input = $('.date');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
        $('#myCarousel').carousel({
            interval: 5000
        });
        $('#carousel-text').html($('#slide-content-0').html());
        $('[id^=carousel-selector-]').click(function() {
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
        $('#myCarousel').on('slid.bs.carousel', function(e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
        $('#media').carousel({
            pause: true,
            interval: false,
        });


        
    });

    function get_count(){
            $.ajax({                
                url: "<?php echo site_url('front/count_cart');?>",
                method: "POST",
                
                success: function(data) { 
                    if(data!=0){
                     $('#notification-count').text(data); 
                     $('#notification-count').show();
                        
                    }
                    console.log(data);                
                   // $('.ast_cart_box').html(data);                
                }            
            });
    }   

    function isAlphaOrParen(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(txtPhone) {
        var a = document.getElementById(txtPhone).value;
        var filter = /[1-9]{1}[0-9]{9}/;
        if (filter.test(a)) {
            return true;
        } else {
            return false;
        }
    }            
    $('.ast_cart_box').load("<?php echo site_url('front/load_cart');?>");                  
    $(document).on('click', '.romove_cart', function() {            
        var row_id = $(this).attr("id");            
        $.ajax({                
            url: "<?php echo site_url('front/delete_cart');?>",
            method: "POST",
            data: {
                row_id: row_id
            },
            success: function(data) {                    
                $('.ast_cart_box').html(data);    
                get_count();              
            }            
        });        
    });

    function isAlphaOrParen(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(txtPhone) {
        var a = document.getElementById(txtPhone).value;
        var filter = /[1-9]{1}[0-9]{9}/;
        if (filter.test(a)) {
            return true;
        } else {
            return false;
        }
    }
    $(".ast_add_cart").click(function() {
        var product_id    = $(this).data("id");            
        var quantity      = $('#' + product_id).val();       
        $.ajax({                
            url: "<?php echo site_url('front/add_to_cart');?>",
            method: "POST",
            data: {
                product_id: product_id,
                quantity: quantity
            },
            success: function(data) {
                swal("Good job!", "Product Added to Cart", "success");     
                $('.ast_cart_box').html(data);       
                get_count();         
            }            
        });        
    });
    /* 
     **  Function For Load into Cart after add into cart 
     */
    $(".carticon").click(function() {
        $.ajax({
            url: "<?php echo base_url('front/viewcart'); ?>",
            method: "GET",
            success: function(data) {
                $('#customcart').html(data);
            }
        });
    });
    $(document).on('click', '.ast_remove_item', function() {
        var row_id = $(this).attr('id');
        swal({
            title: "Are you sure?",
            text: "you want to remove this from cart!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, remove it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?php echo base_url('front/remove')?>",
                type: "POST",
                data: {
                    row_id: row_id
                },
                success: function() {
                    swal("Done!", "It was succesfully deleted!", "success");
                    window.location.reload();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", "error");
                }
            });
        });
    });
    $(document).on('click', '.update_cart_item', function() {
        var row_id = $(this).attr('id');
        var quantity = $('#pro_quantity_' + row_id).val();
        if (quantity >= 0) {
            $.ajax({
                url: "<?php echo base_url('front/update_cart'); ?>",
                method: "POST",
                data: {
                    row_id: row_id,
                    quantity: quantity
                },
                success: function(data) {
                    swal({
                        title: "Updated!",
                        text: "Cart has been updated successfully",
                        imageUrl: "<?php echo base_url('asset/uploads/thumbs-up.jpg');?>"
                    });
                    window.setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
            });
        } else {
            swal("Quantity can not be negative");
            return false;
        }
    });

    function loadintocart() {
        $.ajax({
            url: "<?php echo base_url('front/add'); ?>",
            method: "POST",
            data: {
                product_id: product_id,
                product_name: product_name,
                product_price: product_price,
                quantity: quantity
            },
            success: function(data) {
                alert("Product Added into Cart");
                $('#cart_details').html(data);
                $('#' + product_id).val('');
            }
        });
    };

    function removeitem($id) {
        var row_id = $id;
        if (confirm("Are you sure you want to remove this?")) {
            $.ajax({
                url: "<?php echo base_url('front/remove'); ?>",
                method: "POST",
                data: {
                    row_id: row_id
                },
                success: function(data) {
                    $('#cart_details').html(data);
                }
            });
        } else {
            return false;
        }
    }
    $(document).on('click', '.login_btn', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        if (!email) {
            swal("Email is required");
            return false;
        } else if (!password) {
            swal("Password is required");
            return false;
        } else {
            $.ajax({
                url: "<?php echo base_url('front/signin'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                    if (data.msg == "success") {
                        swal({
                            title: "Loggedin!",
                            text: data.response,
                            imageUrl: "<?php echo base_url('asset/uploads/thumbs-up.jpg');?>"
                        });
                        window.setTimeout(function() {
                            window.location.href='front/index';
                        }, 2000);
                    } else if (data.msg == "error") {
                        swal({
                            title: "Error!",
                            text: data.response,
                            //imageUrl: "<?php //echo base_url('asset/uploads/thumbs-up.jpg');?>"
                        });
                    }
                }
            });
        }
    });
    $(function() {
        $('#signup').submit(function(event) {
            event.preventDefault();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var register_email = $('#register_email').val();
            var register_password = $('#register_password').val();
            var mobile = $('#mobile').val();
            var gender = $('#gender').val();
            if (!first_name) {
                $('#error_first_name').val('First name is required');
            } else if (!last_name) {
                $('#error_last_name').val('First name is required');
            } else if (!register_email) {
                $('#error_register_email').val('First name is required');
            } else if (!register_password) {
                $('#error_register_password').val('First name is required');
            } else if (!mobile) {
                $('#error_mobile').val('First name is required');
            } else if (!gender) {
                $('#error_gender').val('First name is required');
            } else {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url('front/signup')?>",
                    data: {
                        'first_name': first_name,
                        'last_name': last_name,
                        'register_email': register_email,
                        'register_password': register_password,
                        'mobile': mobile,
                        'gender': gender
                    },
                    dataType: "json",
                    success: function(results) {
                        if (results.msg == "success") {
                        swal({
                            title: "Registered!",
                            text: results.response,
                            imageUrl: "<?php echo base_url('asset/uploads/thumbs-up.jpg');?>"
                        });
                        window.setTimeout(function() {
                            window.location.href='front/index';
                        }, 2000);
                        } else if (results.msg == "error") {
                            $('#form_error').html(results.response);
                        }
                        
                    }
                });
            }
        });
    });


    $(document).on('click','.check_login', function(e){
         e.preventDefault();
         $.ajax({
            url: "<?php echo base_url('front/checkSession'); ?>",
            method: "GET",
            success: function(data) {
                if (data==0) {
                    $('#login_modal').click();
                }else if (data==1){
                    window.location.href="<?php echo base_url('front/buy')?>";
                }
                            
            }
        });

    });


</script>
</body>

</html>