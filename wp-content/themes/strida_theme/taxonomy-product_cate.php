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

				<div class="banneritem"><img src="<?php bloginfo( 'template_url' ) ?>/images/banners/tt_pro.jpg"
				                             alt="Banner">

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
			<table border="0" cellpadding="5" cellspacing="5">
				<tbody>
				<tr>
					<td>
						<p>
							<strong><span style="font-size: 14pt;">
									<img src="<?php if ( function_exists( 'z_taxonomy_image_url' ) ) {
										echo z_taxonomy_image_url( get_queried_object()->term_id );
									} ?>" width="700" height="255"
									     alt="pro topb01">
								</span></strong>
						</p>

						<p><strong><span style="font-size: 14pt;"><?php echo single_term_title() ?></span></strong></p>

						<?php echo term_description() ?>

						<div class="product-list">
							<img src="<?php bloginfo( 'template_url' ) ?>/images/collection_title.png" width="713"
							     height="40" alt="collection title">

							<div class="main-product">
								<?php
								$args = array(
									'post_type'        => 'product',
									"product_cate"     => get_query_var( 'term' ),
									'post_status'      => 'publish',
									'posts_per_page'   => 3,
									'caller_get_posts' => 1,
									'paged' => get_query_var( 'paged' ),
								);

								$my_query = null;
								$my_query = new WP_Query( $args ); ?>
								<?php if ( $my_query->have_posts() ) { ?>
									<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
										<div class="product-item" style="width: 30%; text-align: center">
											<a href="<?php the_permalink() ?>">
												<div>
													<?php the_post_thumbnail() ?>
												</div>
												<div><?php the_title() ?></div>
											</a>
										</div>
									<?php endwhile; ?>
								<?php } ?>
								<div class="page-navi" style="text-align: center">
									<?php
									if ( function_exists( 'wp_pagenavi' ) ) {
										wp_pagenavi( array( 'query' => $my_query ) );
									}
									?>
								</div>
								<?php wp_reset_query(); ?>
							</div>
						</div>

					</td>
				</tr>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
