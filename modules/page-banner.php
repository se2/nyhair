<?php if (get_field('display_page_banner')): ?>
<div class="page-banner banner-bg" style="background-image: url('<?php the_field('page_banner_background'); ?>');">
	<!-- <div class="bg-cover page-banner--img" style="background-image: url('<?php echo IMG_PATH; ?>/page-banner.png');"></div> -->
</div>
<?php endif; ?>