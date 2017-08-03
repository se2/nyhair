<?php
/**
 *
 * Template Name: About Page
 *
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page page-body about">

	<?php get_template_part( 'modules/page', 'banner' ); ?>

	<div class="section-text section-text__white">
		<div class="content-nosidebar">
			<div class="content">
				<?php the_content(); ?>
				<p></p>
				<?php $groups = get_field('people_group'); ?>
				<?php if (count($groups) > 0): ?>
				<?php foreach ($groups as $key => $group) : ?>
				<div class="people-department">
					<?php echo $group['department_title']; ?>
				</div>
				<div class="about-people">
					<?php foreach ($group['person'] as $key => $person) : ?>
					<?php $personID = sanitize_title($person['name']) . '-' . $key ; ?>
					<div class="about-person grid-col s-11 sm-13 m-13 l-13 lg-13">
						<a href="#" data-person="<?php echo $personID; ?>" class="js-popup">
							<div class="about-person--avatar bg-cover" style="background-image: url('<?php echo $person['photo']['url']; ?>');"></div>
							<div class="about-person--info">
								<p>
										<span class="uppercase blue"><?php echo $person['name']; ?></span>
									<br>
									<?php echo $person['position']; ?>
								</p>
							</div>
						</a>
					</div>
					<!-- Popup -->
					<div class="about-person popup grid-col s-11 sm-13 m-13 l-13 lg-13" id="<?php echo $personID; ?>">
						<a href="#" class="js-close popup-close">&times;</a>
						<div class="popup-wrapper">
							<div class="about-person--left">
								<div class="about-person--avatar bg-cover" style="background-image: url('<?php echo $person['photo']['url']; ?>');"></div>
								<div class="about-person--info">
									<p>
										<span class="uppercase blue"><?php echo $person['name']; ?></span> <br>
										<?php echo $person['position']; ?>
									</p>
								</div>
							</div>
							<div class="about-person--right">
								<div class="about-person--bio">
									<?php echo $person['bio']; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>