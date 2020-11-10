<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="Ricardo Rios Developer Theme - Fiegerlaw">
    <meta name="author" content="Ricardo Rios">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<header id="HeaderZone">
    <div class="nav-header">
        <div class="logo-header">
            <a href="/">
                <img src="<?php echo $image[0]; ?>" alt="">
            </a>
        </div>
        <div class="show-mobile icon-phone-mobile">
            <div class="search-mobile">
                <i class="fa fa-search red-text" aria-hidden="true"></i>
            </div>
            <div class="phone-mobile">
                <a href="tel:8002946637">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="header-menu">
            <nav class="top-nav show-desktop">
                <?php
                wp_nav_menu([
                'menu'            => 'primary',
                'theme_location'  => 'menu-1',
                'container'       => 'div',
                'container_id'    => 'navbarCollapse',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => 'header_menu',
                'menu_class'      => 'navbar-nav mr-auto',      
                ]);
                ?>
            </nav>
        </div>
        <div class="phone-and-search show-desktop">
            <div class="phone">
                <span class="desktop">(800) 294-6637</span>
                <span class="secondary"><strong>(1-800-294-6637)</strong></span>
            </div>
            <div class="search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</header>
<div class="container main">