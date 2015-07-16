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

				<div class="banneritem"><img src="http://strida.vn/images/banners/news_list_title.jpg" alt="Banner"><div class="clr"></div>
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
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="contentpane">
			<tbody>
			<tr>
				<td class="sectiontableheader" align="right" width="5%">
				</td>
				<td class="sectiontableheader">
					<div style="border-bottom:1px solid #e9e9e9; width: 100%;">
						<?php echo __('Title') ?>
					</div>
				</td>
				<td class="sectiontableheader" width="25%">
					<div style="border-bottom:1px solid #e9e9e9;width: 90%;">
						<?php echo __('Issue Date') ?>
					</div>
				</td>
			</tr>
			<?php echo do_shortcode( '[postlist id=24]' ); ?>
			</tbody>
		</table>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
