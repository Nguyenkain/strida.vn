<?php
/*
Template Name: Contact Template
* Version: 1.2.2
*/
?>
<?php get_header(); ?>

<div id="main_top">
	<div id="page_title">
		<div id="page_title_left">
			<div class="bannergroup">

				<div class="banneritem"><img
						src="<?php bloginfo( 'template_url' ) ?>/images/banners/contact_title_bg.png" alt="Banner">

					<div class="clr"></div>
				</div>

			</div>
		</div>
		<div id="page_title_right">
		</div>
	</div>
</div>

<div id="main_bottom">
</div>

<div id="page_content">
	<div class="gallery">
		<?php the_content() ?>
		<div class="clr"></div>
	</div>
</div>
<?php get_footer(); ?>
