<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
	</div>
	<div id="page_content_right">
		<div id="product_index" style="width: 95%; text-align: right;">
		</div>
		<?php the_content() ?>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>
