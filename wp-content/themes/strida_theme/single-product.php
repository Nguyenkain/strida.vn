<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<div style="width: 100%; display: inline-block;">
				<div class="product-image">
					<div class="product-image-column">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
						<a href="<?php echo $url ?>" class="MagicZoom" id="product" rel="selectors-class: Active"><img
								src="<?php echo $url ?>"></a>
					</div>
					<div class="product-image-column">
						<h3><?php the_title() ?></h3>
						<a rel='zoom-id:product;selectors-change:click;' rev="<?php echo $url ?>"
						   href="<?php echo $url ?>" class="MagicThumb-swap"><img src="<?php echo $url ?>"></a>
						<?php if ( class_exists( 'Dynamic_Featured_Image' ) ) {
							global $dynamic_featured_image;
							$featured_images = $dynamic_featured_image->get_featured_images();

							foreach ( $featured_images as $image ) {
								echo "<a rel='zoom-id:product;selectors-change:click;' rev='{$image['full']}' href='{$image['full']}' class='MagicThumb-swap'><img src='{$image['thumb']}'></a>";
							}
						} ?>

						<div class="product-attribute">
							<div class="title">Colours:</div>
							<div class="color-contain">
								<?php

								$colours = get_field( 'color_attribute' );
								foreach ( $colours as $color ) { ?>
									<a href="<?php echo get_permalink( $color['color_product']->ID ) ?>">
										<div
											style="border:1px solid #c0c0c0; width: 32px; height: 22px; float: left; background: <?php echo $color['color'] ?>"></div>
									</a>
								<?php } ?>
								<div style="clear: both"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="clear: both"></div>
			<div style="width: 100%; display: inline-block;" class="product-content">
				<?php the_content() ?>
			</div>
		<?php // End the loop.
		endwhile; ?>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
