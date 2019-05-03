<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Astrology</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?php  if(isset($pages)){ echo $pages->meta_description; } ?>">
    <meta name="keywords" content="<?php  if(isset($pages)){ echo $pages->meta_keywords; } ?>">
    <meta name="title" content="<?php  if(isset($pages)){ echo $pages->meta_title; } ?>">
    
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/animate.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/font-awesome.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/fonts.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/owl.carousel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/owl.theme.default.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/magnific-popup.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/timepicker.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/sweetalert.min.css')?>" rel="stylesheet" type="text/css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('asset/front/images/header/favicon.png')?>">
    <style type="text/css">
        .red {
            color: red;
        }

        .carticon {
            position: relative;
        }

        .carticon #notification-count {
                background: #000;
                color: #fff;
                width: 18px;
                height: 18px;
                display: block;
                text-align: center;
                font-size: 12px;
                line-height: 18px;
                border-radius: 50%;
                position: absolute;
                top: -10px;
                left: 13px;
        }

        .ast_autho_wrapper li > a > i {
            font-size: 22px;
        }

        .ast_contact_details ul li i, .ast_contact_details ul li a i {
            font-size: 22px;
        }


           
    </style>
</head>

<body>
    <!-- Header Start -->
    <div class="ast_top_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ast_contact_details">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <?php echo $setting[0]['site_phone']; ?>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <?php echo $setting[0]['site_mail']; ?></a></li>
                        </ul>
                    </div>
                    <div class="ast_autho_wrapper">
                        <ul>
                            <?php $session_ary = $this->session->userdata('logged_in');
                           
                                if(empty($session_ary)){?>
                            <li><a class="popup-with-zoom-anim" href="#login-dialog" id="login_modal"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
                            <li><a class="popup-with-zoom-anim" href="#signup-dialog" ><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                            <?php }else{?>
                            <li><a href="<?php echo base_url('front/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
                            <?php }
                            ?>
                            <li class="ast_search">
                                <a href="javascript:;"><i class="fa fa-search"></i></a>
                                <div class="ast_search_field">
                                    <form>
                                        <input type="text" placeholder="Search Here">
                                        <button type="button"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </li>
                            <li class="ast_cart">
                                <a href="javascript:void(0);" class="carticon" ><i class="fa fa-shopping-cart"></i><span style="display: none;" id="notification-count"></span></a>
                                <div id="customcart">
                                </div>
                            </li>
                        </ul>
                        <div id="login-dialog" class="zoom-anim-dialog mfp-hide">
                            <h1>Login Form</h1>
                            <form method="POST" action="">
                                <input type="text" placeholder="Email" name="email" id="email">
                                <input type="password" placeholder="Password" name="password" id="password">
                                <div class="ast_login_data">
                                    <label class="tp_custom_check" for="remember_me">Remember me 
                                    <input type="checkbox" name="ast_remember_me" value="yes" id="ast_remember_me">
                                    <span class="checkmark"></span>
                                    </label>
                                    <a href="#">Forgot password ?</a>
                                </div>
                                <input type="button" class="ast_btn login_btn" name="login_submit" value="Login">
                                <p>Create An Account ? <a href="javascript:void(0)">SignUp</a></p>
                            </form>
                        </div>
                        <div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
                            <h1>signup form</h1>
                            <form method="POST" id="signup">
                                <span id="form_error" class="red"></span>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" required="required">
                                <span id="error_first_name" class="red"></span>
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required="required">
                                <span id="error_last_name" class="red"></span>
                                <input type="email" name="email" id="register_email" placeholder="Email" required="required">
                                <span id="error_register_email" class="red"></span>
                                <input type="password" name="password" id="register_password" placeholder="Password" required="required">
                                <span id="error_register_password" class="red"></span>
                                <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" required="required">
                                <span id="error_mobile" class="red"></span>
                                <select name="gender" id="gender" required="required">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span id="error_gender" class="red"></span>
                                <input type="submit" id="register_btn" class="ast_btn" name="submit" value="submit">
                                <p>Have An Account ? <a href="#">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ast_header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="ast_logo">
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url('asset/uploads/'.$setting[0]['site_logo'])?>" alt="Logo" title="Logo"></a>
                        <button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="ast_main_menu_wrapper">
                        <div class="ast_menu">
                            <ul>
                                <li><a href="<?php echo base_url('/')?>">home</a></li>
                                <li><a href="<?php echo base_url('front/about')?>">about</a></li>
                                <li><a href="<?php echo base_url('front/shop')?>">Shop</a></li>
                                <li><a href="<?php echo base_url('front/donate')?>">Donate</a></li>
                                <li><a href="<?php echo base_url('front/contact')?>">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($this->session->flashdata('info_msg')) { ?>
    <div class="alert alert-success">
        <strong>
            <?php echo $this->session->flashdata('info_msg');?></strong>
    </div>
    <?php } if($this->session->flashdata('error_msg')){?>
       
    <div class="alert alert-info">
        <strong>Info!</strong>
        <?php echo $this->session->flashdata('error_msg');

        ?>
    </div>
    
    <?php }?>
    <!-- Header End -->