<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page page-body">

	<?php get_template_part( 'modules/page', 'banner' ); ?>

	<div class="section-text section-text__white">
		<div class="content-nosidebar">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php $text_blocks = get_field('text_blocks'); ?>
	<?php foreach ($text_blocks as $key => $text_block): ?>
	<div class="section-text" style="background-color: <?php echo $text_block['block_background_color']; ?>">
		<div class="content-nosidebar">
			<div class="content">
				<?php echo $text_block['text_block']; ?>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

	<?php get_template_part( 'modules/page', 'footer' ); ?>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>