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

				<div class="banneritem"><img src="<?php bloginfo( 'template_url' ) ?>/images/banners/downloads_title_bg.png" alt="Banner">

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
<div id="page_content" class="single-post">
	<div id="page_content_left">
		<?php get_sidebar('download') ?>
	</div>
	<?php setup_postdata( $post ); ?>
	<div id="page_content_right">
		<div id="product_index" style="width: 95%; text-align: right;">
		</div>
		<h1><?php the_title() ?></h1>
		<?php the_post_thumbnail( ); ?>
		<?php the_content() ?>
	</div>
	<div style="clear:both"></div>
</div>
<?php get_footer(); ?>
