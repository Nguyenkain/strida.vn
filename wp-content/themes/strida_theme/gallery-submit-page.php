<?php
/*
Template Name: Gallery Submit Template
* Version: 1.2.2
*/
?>
<?php get_header(); ?>

<div id="slideshow">
	<div style="width: 960px;margin:0 auto;">
		<div class="bannergroup">
		</div>
	</div>
</div>

<div id="main_top">
	<div id="page_title">
		<div id="page_title_left">
			<div class="bannergroup">

				<div class="banneritem">
					<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/gallery_title_bg.png" alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/gallery_title_bg_vn.jpg" alt="Banner">
					<?php } ?>

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
		<?php the_content() ?>
	</div>
</div>
<?php get_footer(); ?>
