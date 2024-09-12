<?php 

/**
 * logo function
 */
function owndevs_logo(){
    $owndevs_header_logo = get_theme_mod('owndevs_header_logo', get_template_directory_uri().'/assets/img/logo/owndevs.png');

    ?>
    <?php if(!empty( $owndevs_header_logo)): ?>
    <a href="<?php print esc_url(home_url('/')); ?>" title="Logo" class="logo fixed-nav-items">
    <!--Logo Default-->
    <img src="<?php echo esc_attr($owndevs_header_logo); ?>" alt="logo" class="logo-dark">
    </a>
    <?php endif; ?>
    <?php
}

/**
 * Herader Menu
 */
function owndevs_header_logo(){
    wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => 'navbar-nav ml-auto mr-auto',
        'container'      => false,
        'fallback_cb'    => 'Owndevs_Navwalker_Class::fallback',
        'walker'         => new Owndevs_Navwalker_Class,
        'depth'          => 2,
    ]);
}