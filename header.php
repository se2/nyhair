<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php wp_title( '', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if (is_front_page()) : ?>
    <div class="header">
        <div class="dropdown-menu">
            <div class="content-nosidebar">
                <div class="content">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Menu',
                            'container_class' => 'main-menu'
                        ));
                    ?>
                </div>
            </div>
        </div>
        <div id="nav-icon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <label class="uppercase">Menu</label>
        </div>
    </div>
    <?php else: ?>
    <div class="header">
        <div class="dropdown-menu hidden-m hidden-l hidden-lg">
            <div class="content-nosidebar">
                <div class="content">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Menu',
                            'container_class' => 'main-menu'
                        ));
                    ?>
                </div>
            </div>
        </div>
        <div class="content-nosidebar">
            <div class="content">
                <a href="/" class="page-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page-logo.png" alt="NY Hair">
                </a>
                <div class="hidden-sm hidden-s">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Menu',
                            'container_class' => 'main-menu'
                        ));
                    ?>
                </div>
                <div id="nav-icon" class="nav-icon-page visible-s visible-sm">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <label class="uppercase">Menu</label>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
