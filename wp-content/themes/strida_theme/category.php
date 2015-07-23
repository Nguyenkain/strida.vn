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
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/news_list_title.jpg" alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/news_list_title_vn.jpg" alt="Banner">
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
		<?php get_sidebar() ?>
	</div>
	<div id="page_content_right">
		<div id="product_index" style="width: 95%; text-align: right;">
		</div>
		<?php if ( have_posts() ) : ?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="contentpane">
				<tbody>
				<tr>
					<td class="sectiontableheader" align="right" width="5%">
					</td>
					<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
						<td class="sectiontableheader">
							<div style="border-bottom:1px solid #e9e9e9; width: 100%;">
								<a href="javascript:;"><?php echo __( 'Title' ) ?></a>
							</div>
						</td>
						<td class="sectiontableheader" width="25%">
							<div style="border-bottom:1px solid #e9e9e9;width: 90%;">
								<a href="javascript:;"><?php echo __( 'Issue Date' ) ?></a>
							</div>
						</td>
					<?php } else { ?>
						<td class="sectiontableheader">
							<div style="border-bottom:1px solid #e9e9e9; width: 100%;">
								<a href="javascript:;"><?php echo __( 'Tiêu đề của danh mục' ) ?></a>
							</div>
						</td>
						<td class="sectiontableheader" width="25%">
							<div style="border-bottom:1px solid #e9e9e9;width: 90%;">
								<a href="javascript:;"><?php echo __( 'Ngày Tháng' ) ?></a>
							</div>
						</td>
					<?php } ?>
				</tr>
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
					<tr class="sectiontableentry1">
						<td align="right">
						</td>
						<td>
							<div style="border-bottom:1px solid #e9e9e9; width: 100%;">
								<a href="<?php echo get_the_permalink() ?>">
									<?php the_title() ?></a>
							</div>
						</td>
						<td>
							<div style="border-bottom:1px solid #e9e9e9; width: 90%;">
								<?php echo date( "Y-m-d", strtotime( get_the_date() ) ) ?>
							</div>
						</td>
					</tr>
				<?php // End the loop.
				endwhile; ?>
				</tbody>
			</table>
			<div class="page-navi" style="text-align: center">
				<?php
				if ( function_exists( 'wp_pagenavi' ) ) {
					wp_pagenavi();
				}
				?>
			</div>
		<?php endif; ?>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
