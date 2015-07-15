<?php
/*
Template Name: Gallery Template
* Version: 1.2.2
*/
?>
<?php get_header(); ?>

<div id="slideshow">
	<div style="width: 960px;margin:0 auto;">
		<div class="bannergroup">
			<div class="banneritem"><img src="<?php bloginfo( 'template_url' ) ?>/images/banners/top_b_02.jpg"
			                             alt="Banner">

				<div class="clr"></div>
			</div>

		</div>
	</div>
</div>

<div id="main_top">
	<div id="page_title">
		<div id="page_title_left">
			<div class="bannergroup">

				<div class="banneritem"><img
						src="<?php bloginfo( 'template_url' ) ?>/images/banners/gallery_title_bg.png" alt="Banner">

					<div class="clr"></div>
				</div>

			</div>
		</div>
		<div id="page_title_right">
			<span class="breadcrumbs pathway">Gallery</span>
		</div>
	</div>
</div>

<div id="main_bottom">
</div>

<div id="page_content">
	<div class="gallery">
		<?php echo do_shortcode( '[foogallery-album id="57"]' ); ?>
	</div>
</div>
<?php get_footer(); ?>
