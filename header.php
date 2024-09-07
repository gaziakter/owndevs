<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package owndevs
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="food-shop is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="food-shop, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Index - food-shop</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class();?> data-spy="scroll" data-target=".navbar" data-offset="90">

	<?php wp_body_open();?>

    

<!--Header Start-->

<header id="header">
    <div class="upper-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mt-auto mb-auto">
                    <ul class="d-flex mb-0 top-info">
                        <li class="c-links d-none d-lg-block"><span><i class="lab la-whatsapp"></i></span><a href="#">+(34)609 331754</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 mt-auto mb-auto d-lg-flex justify-content-center justify-content-lg-end">
                    <ul class="shop-details d-flex">
                        <li>
                            <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                        </li>
                        <li><a href="#" id="open-shop-card"><i class="las la-shopping-bag"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="../index-food-shop.html"><img src="	<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <div class="row no-gutters w-100">
                <div class="col-6 col-lg-3 offset-3 offset-lg-0">
                    <a href="../index-food-shop.html" title="Logo" class="logo fixed-nav-items">
                        <!--Logo Default-->
                        <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/logo-black.png" alt="logo" class="logo-dark">
                    </a>
                </div>
                <!--Nav Links-->
                <div class="col-6 d-none d-lg-flex justify-content-lg-center align-items-lg-center">
                    <div class="collapse navbar-collapse" id="megaone">
                        <ul class="navbar-nav ml-auto mr-auto">
                            <li><a class="nav-link active scroll" href="../index-food-shop.html#header">Home</a></li>
                            <li><a class="nav-link" href="about-us.html">About Us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="product-listing.html"><i class="las la-caret-right"></i> Product Listing</a>
                                    <a class="dropdown-item" href="product-detail.html"><i class="las la-caret-right"></i> Product Detail</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="standalone.html"><i class="las la-caret-right"></i> Standalone</a>
                                </div>
                            </li>
                            <li><a class="nav-link scroll" href="../index-food-shop.html#featured-items">Shop</a></li>
                            <li><a class="nav-link" href="standard-blog.html">Blogs</a></li>
                            <li><a class="nav-link" href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!--Side Menu Button-->
                <div class="col-3 d-flex justify-content-end align-items-center">

                    <ul class="shop-details fixed-nav-items">
                        <li>
                            <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                        </li>
                        <li><a href="#" id="open-shop-card1"><i class="las la-shopping-bag"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
   
    <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
</header>

 <!--Side Nav-->
 <div class="side-menu hidden">
    <div class="inner-wrapper">
        <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
        <nav class="side-nav w-100">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link scroll" href="../index-food-shop.html#header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="product-listing.html"><i class="las la-caret-right"></i> Product Listing</a>
                        <a class="dropdown-item" href="product-detail.html"><i class="las la-caret-right"></i> Product Detail</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="las la-caret-right"></i> Standalone</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="../index-food-shop.html#featured-items">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="standard-blog.html">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="side-footer w-100">
            <ul class="social-icons-simple">
                <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <p class="text-dark">&copy; 2023 MegaOne. Made With Love by Themesindustry</p>
        </div>
    </div>
</div>
<a id="close_side_menu" href="javascript:void(0);"></a>
<!-- End side menu -->

<!--Header End-->