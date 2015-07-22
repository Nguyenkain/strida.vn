<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div id="main_top">
	<div id="page_title">
		<div id="page_title_left">
			<div class="bannergroup">

				<div class="banneritem">

					<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/faq_title_bg.png" alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/faq_title_bg_vn.jpg" alt="Banner">
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
<div id="page_content" class="single-post">
	<div id="page_content_left">
		<?php get_sidebar( 'faq' ) ?>
	</div>
	<?php setup_postdata( $post ); ?>
	<div id="page_content_right">
		<?php the_content() ?>
	</div>
	<div style="clear:both"></div>
</div>
<?php get_footer(); ?>
