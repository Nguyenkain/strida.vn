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

				<div class="banneritem">
					<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/gallery_title_bg.png" alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/gallery_title_bg_vn.jpg"
						     alt="Banner">
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

		<div id="component_top" style="width: 100%; text-align:center;">
			<table width="100%" border="0" cellpadding="0" cellspacing="1">
				<tbody>
				<tr>
					<td nowrap="nowrap" style="text-align: center">
						<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
						<a href="<?php echo get_the_permalink(1203) ?>"
						   class="mainlevel">CREAT POST</a>
						<?php } else { ?>
							<a href="<?php echo get_the_permalink(1212) ?>"
							   class="mainlevel">VIẾT BÀI</a>
						<?php } ?>
					</td>
				</tr>
				</tbody>
			</table>
		</div>

		<?php the_content() ?>
	</div>
</div>
<?php get_footer(); ?>
