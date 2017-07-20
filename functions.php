<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Custom Theme' );
define( 'CHILD_THEME_URL', 'http://www.paracletewebdesign.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

define( 'IMG_PATH', get_stylesheet_directory_uri() . '/images/' );

//* Enqueue Custom Styles

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_styles() {
	wp_enqueue_style( 'neutraface-display', get_stylesheet_directory_uri() . '/assets/css/font.css', array(), CHILD_THEME_VERSION);
	wp_enqueue_style( 'grid', get_stylesheet_directory_uri() . '/assets/css/grid.css', array(), CHILD_THEME_VERSION);
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css', array(), CHILD_THEME_VERSION);

	/* Custom script */
	wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() .'/assets/js/main.js', array('jquery'), null, true);
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Register sidebar
genesis_register_sidebar( array(
	'id'            => 'footer-w',
	'name'          => __( 'Copyright', 'footer-w' ),
	'description'   => __( 'This is a widget area in the footer', 'footer-w' ),
) );

//* Hook copyright in footer

add_action( 'genesis_footer', 'sp_after_post_widget' );
	function sp_after_post_widget() {
		genesis_widget_area( 'footer-w', array(
			'before' => '<div class="after-post widget-area">',
			'after' => '</div>',
	) );
}

//* Remove the Credit footer
remove_action( 'genesis_footer', 'genesis_do_footer' );

// * Custom Image Size
// add_image_size( 'gallery-size', 475, 475, array( 'left', 'top' ) );
add_image_size( 'gallery-size', 475, 475, array( 'center', 'center' ) );
add_image_size( 'people-size', 279, 356 );

//* Go typekit! - add: data-cfasync="false"  for cloudflare - load early forget fout - change CHANGEME
/*
add_action( 'genesis_meta', 'child_typekit' );
function child_typekit() {
echo '<script data-cfasync="false" type="text/javascript" src="//use.typekit.net/CHANGEME.js"></script>
<script data-cfasync="false" type="text/javascript">try{Typekit.load();}catch(e){}</script>
';
}

*/
/*
// Add Image to Sidebar
	function goSideImage() {
		if (!is_front_page()){
			echo '<div class="sidefeature">';
			echo the_post_thumbnail('full');
			echo '</div>';
			};
	}
	add_action('genesis_after_sidebar_widget_area', 'goSideImage');
*/


//* Advanced Custom Field Image - return image object to get height and width - yeah for optimized standards
/*
add_action( 'genesis_before_content', 'sp_plan_post_field' );

	function sp_plan_post_field() {


	if (get_field('left_side_picture_1')) {
	$image = get_field('left_side_picture_1');
	// vars
	$url = $image['url'];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];

	echo '<div class="architect"><img src="' . $url . '" alt="' . get_field('left_side_picture_1_alt') . '" width="' . $width . '" height="' . $height . '" /></div>';

	}


		if (is_front_page()){
			genesis_widget_area( 'architect-plan', array(
				'before' => '<div class="architect-plan widget-area">',
				'after' => '</div>',
			) );
		}
}

*/


//* Remove the header right widget area
// unregister_sidebar( 'header-right' );


//* clear for old ie8
/*
	function clearMe() {
			echo '<div style="clear:both;"></div>';
	}
	add_action('genesis_after_entry', 'clearMe');
*/



//* Reposition the primary navigation menu
/*
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_content', 'genesis_do_nav' );
*/

// Add Anything Slider - an example how to add html etc



/**	function goPortfolio() {

		if ( is_page() || !is_front_page() ) {

			echo '<div class="FeatureArea">';
			for($i = 1; $i <= 5 && !empty(get_field('portfolio_image_' . $i)); $i++) {
				$s = get_field('portfolio_image_' . $i);
				echo '<div class="portfolio port1"><div class="port-bg" style="background-image: url(', $s ,');"><div class="port-dots"><a href="',get_field('portfolio_link_1'),'"><h2>',get_field('portfolio_title_1'),'</h2></a></div></div></div>';
			}

		echo '<div style="clear:both; font-size:0px;">&nbsp;</div></div>';
		};
	}

	add_action('genesis_before_entry', 'goPortfolio');*/



