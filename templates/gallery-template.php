<?php
/**
 *
 * Template Name: Gallery
 *
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page gallery">

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
	<div class="gallery">
		<?php foreach ($gallery as $key => $photo): ?>
		<div class="bg-cover gallery-item grid-col s-12 sm-13 m-14 l-14 lg-14" style="background-image: url('<?php echo $photo['url']; ?>');"></div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>