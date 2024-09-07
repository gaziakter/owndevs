<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package harry
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>

<!--slider sec strat-->
<section class="slider-sec" id="slider-sec">
    <div id="rev-slider" class="rev-slider">
    <div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="megaone-restaurant-1" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_18_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">

            <ul>	<!-- SLIDE  -->
                <li data-index="rs-44" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_3d469-bg-light-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-img5.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider-overlay"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-44-layer-2"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                         data-fontsize="['20','22','22','20']"
                         data-lineheight="['30','30','25','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 300; color: #000; letter-spacing:0;font-family:'Poppins', sans-serif;">Stay Healthy With</div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-44-layer-1"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['52','40','42','35']"
                         data-lineheight="['82','82','72','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 82px; font-weight: 500; color: #79a207 ; letter-spacing: 0;font-family:'Poppins', sans-serif;">Natural Fruits</div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-44-layer-3"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','60','70','70']"
                         data-fontsize="['16','14','14','14']"
                         data-width="['490','490','600','450']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #000; letter-spacing:0;font-family:Poppins;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio. </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption  tp-resizeme"
                         id="slide-44-layer-4"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['138','134','138','150']"
                         data-width="['600','600','600','450']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="button"
                         data-responsive_offset="on"
                         data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; font-family:Poppins;"><a class="btn web-btn rounded-pill" href="#featured-items">Shop Now</a></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-45" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_3d469-bg-light-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-img3.jpg" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="slider-overlay"></div>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                         data-fontsize="['20','20','20','20']"
                         data-lineheight="['30','30','30','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 46px; font-weight: 300; color: #000; letter-spacing:0;font-family:'Poppins', sans-serif;">We Deliver Organic Fruits. </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['52','50','42','35']"
                         data-lineheight="['82','82','72','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 82px; font-weight: 500; color: #84b813; letter-spacing: 0;font-family: 'Poppins', sans-serif;">Fresh Organic Food</div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','60','70','70']"
                         data-fontsize="['16','14','14','14']"
                         data-width="['490','490','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #000; letter-spacing:0;font-family:Poppins;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['138','138','138','150']"
                         data-width="['600','600','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; font-family:Poppins,sans-serif;"><a class="btn web-btn scroll rounded-pill" href="#featured-items">Shop Now</a></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-46" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_3d469-bg-light-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-img4.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider-overlay"></div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-2"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                         data-fontsize="['20','20','20','20']"
                         data-lineheight="['30','30','35','35']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 28px; line-height: 46px; font-weight: 400; color: #000; letter-spacing:0;font-family:'Poppins', sans-serif;">We care for your </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-1"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['52','50','42','35']"
                         data-lineheight="['82','82','72','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 82px; font-weight: 500; color: #84b813; letter-spacing:0;font-family: 'Poppins', sans-serif;">Natural Fresh Goods</div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-3"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','60','70','70']"
                         data-fontsize="['16','14','14','14']"
                         data-width="['490','490','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #000; letter-spacing:0;font-family:Poppins;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.  </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-4"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['138','138','138','150']"
                         data-width="['600','600','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; font-family:Poppins;"><a class="btn rounded-pill web-btn scroll" href="#about">Order Now</a></div>
                </li>

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!--SLIDER DOWN ARROW-->
<!--    <svg class="separator__svg" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#44A36F" version="1.1" xmlns="http://www.w3.org/2000/svg">-->
<!--        <path d="M 100 100 V 10 L 0 100"/>-->
<!--        <path d="M 30 73 L 100 18 V 10 Z" fill="#308355" stroke-width="0"/>-->
<!--    </svg>-->
    <svg id="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
</div>
</section>
<!--slider sec end-->


<!--main page content-->
<section class="main">
    <div class="blog-content padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 order-1">
                    <div class="main_content text-center text-lg-left">
                        <div class="single_blog">
                            <div class="single_img">
                                <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/b2.jpg" alt="image"/>
                            </div>
                            <div class="single_detail">
                                <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>
                                <h2>Post With A Preview Images</h2>
                                <span class="blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                <p class="p-text">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                                <a class="btn web-btn rounded-pill" href="single-blog.html">READ MORE</a>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="single_img">
                                <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/b1.jpg" alt="image"/>
                            </div>
                            <div class="single_detail">
                                <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>
                                <h2>Post With A Preview Images</h2>
                                <span class="blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                <p class="p-text">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                                <a class="btn web-btn rounded-pill" href="single-blog.html">READ MORE</a>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="single_img">
                                <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/b3.jpg" alt="image"/>
                            </div>
                            <div class="single_detail">
                                <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>
                                <h2>Post With A Preview Images</h2>
                                <span class="blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                <p class="p-text">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis...</p>
                                <a class="btn web-btn rounded-pill" href="single-blog.html">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center justify-content-lg-start">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-lg-4 side-bar order-3 order-lg-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="side_tags">
                                <div class="search-bar">
                                    <form method="get" id="searchform" action="#" role="search">
                                        <label class="sr-only" for="s">Search</label>
                                        <div class="input-group">
                                            <input class="field form-control" id="s" name="s" type="text" placeholder="Search …" value="">
                                            <span class="input-group-append">
                                    <button class="submit btn-search" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="cat_sec">
                                <h4 class="text-center text-lg-left">Categories</h4>
                                <ul>
                                    <li><a href="">ART </a> <span class="dots"></span> <p>2</p></li>
                                    <li><a href="">FASHION </a> <span class="dots"></span> <p>5</p></li>
                                    <li><a href="">PHOTOGRAPHY </a> <span class="dots"></span> <p>12</p></li>
                                    <li><a href="">LIFESTYLE </a> <span class="dots"></span> <p>22</p></li>
                                    <li><a href="">MOTIVATION </a> <span class="dots"></span> <p>1</p></li>
                                </ul>
                            </div>
                            <div class="popular_posts">
                                <h4 class="text-center text-lg-left">Popular Posts</h4>
                                <div class="media-box row">
                                    <div class="col-5 box-img">
                                        <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/p1.jpg" alt="image">
                                    </div>
                                    <div class="col-7 box-detail">
                                        <h2>Post With A Preview Images</h2>
                                        <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                    </div>
                                </div>
                                <div class="media-box row">
                                    <div class="col-5 box-img">
                                        <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/p2.jpg" alt="image">
                                    </div>
                                    <div class="col-7 box-detail">
                                        <h2>Post With A Image Gallery</h2>
                                        <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                    </div>
                                </div>
                                <div class="media-box row">
                                    <div class="col-5 box-img">
                                        <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/p3.jpg" alt="image">
                                    </div>
                                    <div class="col-7 box-detail">
                                        <h2>Post With A Slide Images</h2>
                                        <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tags_sec">
                                <h4 class="text-center text-lg-left">Tags</h4>
                                <div class="tags text-center text-lg-left">
                                    <span class="rounded-pill">AUDIO</span>
                                    <span class="rounded-pill">VEDIO</span>
                                    <span class="rounded-pill">BRANDINGS</span>
                                    <span class="rounded-pill">GRAPHICS</span>
                                    <span class="rounded-pill">FASHION</span>
                                    <span class="rounded-pill">DIGITAL</span>
                                    <span class="rounded-pill">SCANNING</span>
                                </div>
                            </div>
                            <div class="cat_sec">
                                <h4 class="text-center text-lg-left">Archieves</h4>
                                <ul>
                                    <li><a href="">2 Jan , 2019 </a> <span class="dots"></span> <p>2</p></li>
                                    <li><a href="">2 Feb , 2019 </a> <span class="dots"></span> <p>5</p></li>
                                    <li><a href="">2 Mar , 2019 </a> <span class="dots"></span> <p>12</p></li>
                                    <li><a href="">2 June , 2019 </a> <span class="dots"></span> <p>22</p></li>
                                    <li><a href="">2 Aug , 2019 </a> <span class="dots"></span> <p>1</p></li>
                                </ul>
                            </div>
                            <div class="advertisment">
                                <img src="	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/advertisment.jpg" alt="image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<?php
get_footer();