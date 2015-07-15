<?php
/*
Template Name: Bike Registration Template
* Version: 1.2.2
*/
?>
<?php get_header(); ?>

<div id="slideshow">
	<div style="width: 960px;margin:0 auto;">
		<div class="bannergroup">
			<div class="banneritem"><img src="<?php bloginfo( 'template_url' ) ?>/images/banners/top_b_03.jpg"
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
						src="<?php bloginfo( 'template_url' ) ?>/images/banners/tt_regist.jpg" alt="Banner">

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
	<?php the_content() ?>
</div>
<?php get_footer(); ?>
