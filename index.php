<?php get_header(); ?>

<video class="video-bg video-bg__desktop" poster="<?php echo get_stylesheet_directory_uri(); ?>/images/poster.png" playsinline autoplay muted loop>
	<source src="<?php echo get_stylesheet_directory_uri(); ?>/images/nyh-homepage-video.mp4" type="video/mp4">
</video>

<div class="video-bg video-bg__mobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/front-page__mobile.png');"></div>

<div class="home home--bg home--fullpage">
	<img src="<?php echo IMG_PATH; ?>/home-logo.png" alt="NY Hair" class="home--logo">
</div>

<?php wp_footer(); ?>
