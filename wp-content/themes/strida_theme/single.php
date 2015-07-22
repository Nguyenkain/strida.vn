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
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/news_list_title.jpg" alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/news_list_title_vn.jpg"
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
<div id="page_content" class="single-post">
	<div id="page_content_left">
		<?php get_sidebar() ?>
	</div>
	<?php setup_postdata( $post ); ?>
	<div id="page_content_right">
		<div id="product_index" style="width: 95%; text-align: right;">
		</div>

		<table class="contentpaneopen">
			<tbody>
			<tr>
				<td class="contentheading" width="100%">
					<?php the_title() ?>
				</td>
			</tr>
			<tr>
				<td valign="top" class="createdate">
					<?php echo date( "Y-m-d H:i:s", strtotime( get_the_date() ) ) ?>    </td>
			</tr>
			</tbody>
		</table>
		<?php the_content() ?>
		<div style="clear:both"></div>
	</div>
	<div style="clear:both"></div>
</div>
<?php get_footer(); ?>
