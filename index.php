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
<section id="slider-sec" class="slider-sec parallax" style="background: url('	<?php echo get_template_directory_uri(); ?>/assets/img/blogs/s-blog-slider.jpg');">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
            <h4>BLOG CONTENT</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index-film.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="standard-blog.html">Blog Content</a></li>
                    </ol>
                </nav>
            </div>
        </div>
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