<?php
/**
 *
 * Template Name: About Page
 *
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page about">

	<?php get_template_part( 'modules/page', 'banner' ); ?>

	<div class="section-text section-text__white">
		<div class="content-nosidebar">
			<div class="content">
				<?php the_content(); ?>
				<p></p>
				<?php $people = get_field('person'); ?>
				<?php if (count($people) > 0): ?>
				<div class="about-people">
					<?php foreach ($people as $key => $person) : ?>
					<div class="about-person grid-col s-11 sm-13 m-13 l-13 lg-13">
						<div class="about-person--avatar bg-cover" style="background-image: url('<?php echo $person['photo']; ?>');"></div>
						<div class="about-person--info">
							<p>
								<span class="uppercase blue"><?php echo $person['name']; ?></span> <br>
								<?php echo $person['position']; ?>
							</p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>