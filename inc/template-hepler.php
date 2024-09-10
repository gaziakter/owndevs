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