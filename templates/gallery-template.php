<?php
/**
 *
 * Template Name: Gallery
 *
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page page-body gallery">

	<?php get_template_part( 'modules/page', 'banner' ); ?>

<!-- 	<div class="section-text section-text__white">
		<div class="content-nosidebar">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</div> -->
	<?php $gallery = get_field('gallery'); ?>
	<?php if (count($gallery) > 0): ?>
	<div class="gallery my-gallery">
		<?php foreach ($gallery as $key => $photo): ?>
  	<a href="<?php echo $photo['url']; ?>" data-size="<?php echo $photo['width'] . 'x' . $photo['height']; ?>" class="gallery-link gallery-item grid-col s-12 sm-13 m-14 l-14 lg-14"
  		 data-med="<?php echo $photo['url']; ?>" data-med-size="<?php echo $photo['width'] . 'x' . $photo['height']; ?>" data-author="NY Hair">
		  <div class="bg-cover grid-col s-11 gallery-item" style="background-image: url('<?php echo $photo['sizes']['gallery-size']; ?>');">
		  </div>
	  </a>
		<?php endforeach; ?>
	</div>

	<div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="pswp__bg"></div>
	  <div class="pswp__scroll-wrap">
	    <div class="pswp__container">
	      <div class="pswp__item"></div>
	      <div class="pswp__item"></div>
	      <div class="pswp__item"></div>
	    </div>
	    <div class="pswp__ui pswp__ui--hidden">
	      <div class="pswp__top-bar">
	        <div class="pswp__counter"></div>
	        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
	        <button class="pswp__button pswp__button--share" title="Share"></button>
	        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
	        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
	        <div class="pswp__preloader">
	          <div class="pswp__preloader__icn">
	            <div class="pswp__preloader__cut">
	              <div class="pswp__preloader__donut"></div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->
	      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	        <div class="pswp__share-tooltip">
	          <!-- <a href="#" class="pswp__share--facebook"></a>
	          <a href="#" class="pswp__share--twitter"></a>
	          <a href="#" class="pswp__share--pinterest"></a>
	          <a href="#" download class="pswp__share--download"></a> -->
	        </div>
	      </div>
	      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
	      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
	      <div class="pswp__caption">
	        <div class="pswp__caption__center">
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endif; ?>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>