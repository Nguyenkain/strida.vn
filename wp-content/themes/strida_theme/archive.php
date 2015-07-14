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

<div id="main_top" class="single">
	<div id="page_title">
		<div id="page_title_left">
			<div class="bannergroup">

				<div class="banneritem"><img src="http://strida.vn/images/banners/brandstory_title_bg.png" alt="Banner">

					<div class="clr"></div>
				</div>

			</div>
		</div>
		<div id="page_title_right">
        	<span class="breadcrumbs pathway">
<a href="http://strida.vn/" class="pathway">PROFILE LIST</a> &nbsp; &gt; &nbsp; Brand Story</span>

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
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
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
			<tr class="sectiontableentry1">
				<td align="right">
				</td>
				<td>
					<div style="border-bottom:1px solid #e9e9e9; width: 100%;">
						<a href="/index.php?option=com_content&amp;view=article&amp;id=119%3Astridamotorshow&amp;catid=1%3A2013&amp;Itemid=35&amp;lang=en">
							(Vietnam) STRiDA Vietnam tham d? Vietnam MTS 2014</a>
					</div>
				</td>
				<td>
					<div style="border-bottom:1px solid #e9e9e9; width: 90%;">
						2014-11-27
					</div>
				</td>
			</tr>
			<tr class="sectiontableentry2">
				<td align="right">
				</td>
				<td>
					<div style="border-bottom:1px solid #e9e9e9; width: 100%;">
						<a href="/index.php?option=com_content&amp;view=article&amp;id=117%3Aaviancaairlinemagazine&amp;catid=1%3A2013&amp;Itemid=35&amp;lang=en">
							(Brazil) STRiDA @ Avianca Airline Magazine</a>
					</div>
				</td>
				<td>
					<div style="border-bottom:1px solid #e9e9e9; width: 90%;">
						2014-08-13
					</div>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
