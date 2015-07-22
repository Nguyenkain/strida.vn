<?php
/**
 * The template for displaying search results pages.
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
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/tt_pro.jpg"
						     alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/tt_pro_vn.jpg"
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
	<div id="page_content_left">
		<?php get_sidebar( 'product' ) ?>
	</div>
	<div id="page_content_right">
		<div id="product_index" style="width: 95%; text-align: right;">
		</div>
		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
		</header>
		<!-- .page-header -->

		<div class="product-list">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
				<div class="search-item" style="width: 30%; text-align: center">
					<a href="<?php the_permalink() ?>">
						<div>
							<?php the_post_thumbnail() ?>
						</div>
						<div><?php the_title() ?></div>
					</a>
				</div>
				<?php
				// End the loop.
			endwhile; ?>
			<div class="page-navi" style="text-align: center">
				<?php
				if ( function_exists( 'wp_pagenavi' ) ) {
					wp_pagenavi();
				}
				?>
			</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
