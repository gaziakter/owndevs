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

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?> data-spy="scroll" data-target=".navbar" data-offset="90">

	<?php wp_body_open();?>

<!-- Preloader -->
<div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->
<header id="header">
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <div class="row no-gutters w-100">
                <div class="col-6 offset-md-0 col-lg-3 offset-3 offset-lg-0">
                    <?php owndevs_logo(); ?>
                </div>
                <!--Nav Links-->
                <div class="col-6 d-none d-lg-flex justify-content-lg-center align-items-lg-center">
                    <div class="collapse navbar-collapse" id="megaone">
                    <?php owndevs_header_logo(); ?>
                    </div>
                </div>
                <!--Side Menu Button-->
                <div class="col-3 col-lg-3 col-md-6 d-flex justify-content-end align-items-center">

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