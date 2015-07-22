<?php
/*
Template Name: Video Template
* Version: 1.2.2
*/
?>
<?php get_header(); ?>

<div id="main_top">
	<div id="page_title">
		<div id="page_title_left">
			<div class="bannergroup">

				<div class="banneritem">
					<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/tt_video.jpg" alt="Banner">

					<div class="clr"></div>
				</div>

			</div>
		</div>
		<div id="page_title_right">
			<?php if ( function_exists( 'bcn_display' ) ) {
				bcn_display();
			} ?>
		</div>
	</div>
</div>

<div id="main_bottom">
</div>

<div id="page_content">
	<div class="gallery">
		<?php echo do_shortcode( '[postlist id=80]' ); ?>
	</div>
</div>
<?php get_footer(); ?>
