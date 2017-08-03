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
    <?php
        function book_now() {
          // open the <ul>, set 'menu_class' and 'menu_id' values
          $wrap  = '<ul id="%1$s" class="%2$s">';

          // get nav items as configured in /wp-admin/
          $wrap .= '%3$s';

          // the static link
          $wrap .= '<li class="book-now-item"><a href="http://198.0.189.77/onlinebooking2/#/" class="btn btn-book" target="_blank">Book now</a></li>';

          // close the <ul>
          $wrap .= '</ul>';
          // return the result
          return $wrap;
        }
    ?>
    <?php if (is_front_page()) : ?>
    <div class="header header-home">
        <div class="dropdown-menu">
            <div class="content-nosidebar">
                <div class="content">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Menu',
                            'items_wrap' => book_now(),
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
                            'items_wrap' => book_now(),
                            'container_class' => 'main-menu'
                        ));
                    ?>
                </div>
            </div>
        </div>
        <div class="content-nosidebar upper-header">
            <div class="content">
                <a href="/" class="page-logo">
                    <?php if (get_field('page_logo')): ?>
                    <img src="<?php the_field('page_logo'); ?>" alt="NY Hair">
                    <?php else: ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page-logo.png" alt="NY Hair">
                    <?php endif; ?>
                </a>
                <div class="hidden-sm hidden-s">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Main Menu',
                            'container_class' => 'main-menu'
                        ));
                    ?>
                    <a href="http://198.0.189.77/onlinebooking2/#/" class="btn btn-book" target="_blank">Book now</a>
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
