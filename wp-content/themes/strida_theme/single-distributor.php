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
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/brandstory_title_bg.png"
						     alt="Banner">
					<?php } else { ?>
						<img src="<?php bloginfo( 'template_url' ) ?>/images/banners/brandstory_title_bg_vn.png"
						     alt="Banner">
					<?php } ?>

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

<div id="page_content">
	<table class="contentpaneopen">

		<?php setup_postdata( $post ); ?>
		<?php
		//Get all categories name
		$terms   = get_the_terms( $post->ID, 'area' );
		$post_id = $post->ID;
		?>
		<tbody>
		<tr>
			<td valign="top">
				<table>
					<tbody>
					<tr valign="top">
						<td width="50%">
							<img src="<?php if ( function_exists( 'z_taxonomy_image_url' ) ) {
								echo z_taxonomy_image_url( $terms[0]->term_id );
							} ?>" alt="" usemap="#Map2">
						</td>
						<td valign="top" style="width: 50%;">
							<table border="0" cellpadding="2" cellspacing="0"
							       style="font-family: 'Century Gothic', 'Lucida Sans', 'Trebuchet MS', Verdana; margin: 0px; padding: 0px; color: #000000; font-size: 12px;">
								<tbody style="margin: 0px; padding: 0px;">
								<tr style="margin: 0px; padding: 0px;">
									<td valign="top" style="margin: 0px; padding: 0px;">
										<div id="country" style="margin: 0px; padding: 0px; width: 400px;">
											<ul style="margin: 0px; padding: 0px; list-style: none;">
												<?php
												$args = array(
													'post_type'        => 'distributor',
													"area"             => $terms[0]->slug,
													'post_status'      => 'publish',
													'posts_per_page'   => - 1,
													'caller_get_posts' => 1
												);

												$my_query = null;
												$my_query = new WP_Query( $args ); ?>
												<?php if ( $my_query->have_posts() ) { ?>
													<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
														<li class="<?php echo $post_id == the_ID() ? "setLi" : "" ?>"
														    style="margin: 2px; padding: 5px 15px; float: left; font-size: 12px; <?php echo $post_id == get_the_ID() ? "background-color: #ffb228; border: 1px solid #ffb228;" : "background-color: #d8d8d8; border: 1px solid #dddbdb;" ?> cursor: pointer;">
															<a href="<?php the_permalink() ?>"
															   style="margin: 0px; padding: 0px; text-decoration: none; color: #6a5119;"><?php the_title() ?></a>
														</li>
													<?php endwhile; ?>
												<?php } ?>
												<?php wp_reset_query();
												setup_postdata( $post ); ?>
											</ul>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
							<div
								style="margin: 5px; padding: 5px; width: 400px; font-family: 'Century Gothic', 'Lucida Sans', 'Trebuchet MS', Verdana; font-size: 12px; min-height: 150px;">
								<?php the_content() ?>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
				<p>
					<map name="Map2">
						<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
							<area shape="poly"
							      coords="155,31,163,39,167,49,169,62,170,71,177,75,189,57,196,54,208,42,210,31,212,19,206,16,190,17,176,18,154,22,144,24,129,27,117,32,93,39,79,48,55,50,30,55,32,73,55,71,67,86,70,101,73,113,85,129,98,144,114,160,131,168,133,195,139,219,134,245,138,264,151,239,168,222,176,207,180,190,174,177,154,173,143,165,133,156,120,151,112,141,111,135,120,131,127,136,135,128,139,118,147,104,154,97,162,89,155,78,143,72,140,72,134,80,132,91,124,88,115,78,111,68,114,63,122,54,126,52,142,61,149,61,153,54,144,47,139,46,135,42"
							      href="<?php echo get_permalink( 361 ); ?>">
							<area shape="poly"
							      coords="325,89,321,77,318,69,312,57,311,50,303,55,293,59,284,58,273,55,261,49,257,57,246,63,242,72,240,84,234,93,224,100,225,106,224,125,241,108,247,106,253,111,261,110,273,105,282,105,288,111,299,109,298,102"
							      href="<?php echo get_permalink( 76 ); ?>">
							<area shape="poly"
							      coords="277,111,265,114,268,121,277,123,274,138,283,148,293,156,304,153,305,142,313,141,322,147,327,158,329,168,345,146,358,158,355,172,356,183,365,189,378,186,388,175,379,156,388,146,391,143,398,133,405,129,413,124,416,113,418,103,426,93,450,92,468,66,468,57,436,47,420,49,411,50,373,42,356,40,327,43,315,52,331,87,302,108,298,114,288,122"
							      href="<?php echo get_permalink( 70 ); ?>">
							<area shape="poly"
							      coords="289,163,281,159,274,152,271,141,267,135,259,128,249,127,239,122,232,121,215,132,213,141,211,153,211,162,219,164,236,169,241,178,242,189,241,203,244,209,248,220,250,234,256,237,272,234,280,214,291,216,295,201,288,193,281,190,279,180,294,174,292,165"
							      href="<?php echo get_permalink(); ?>">
							<area shape="poly"
							      coords="399,183,417,188,425,201,418,205,421,214,422,220,421,233,416,239,410,255,404,246,401,239,388,234,375,237,370,231,370,223,372,215,387,209,394,202,384,198,375,197"
							      href="<?php echo get_permalink( 72 ); ?>">
						<?php } else { ?>
							<area shape="poly"
							      coords="155,31,163,39,167,49,169,62,170,71,177,75,189,57,196,54,208,42,210,31,212,19,206,16,190,17,176,18,154,22,144,24,129,27,117,32,93,39,79,48,55,50,30,55,32,73,55,71,67,86,70,101,73,113,85,129,98,144,114,160,131,168,133,195,139,219,134,245,138,264,151,239,168,222,176,207,180,190,174,177,154,173,143,165,133,156,120,151,112,141,111,135,120,131,127,136,135,128,139,118,147,104,154,97,162,89,155,78,143,72,140,72,134,80,132,91,124,88,115,78,111,68,114,63,122,54,126,52,142,61,149,61,153,54,144,47,139,46,135,42"
							      href="<?php echo get_permalink( 1018 ); ?>">
							<area shape="poly"
							      coords="325,89,321,77,318,69,312,57,311,50,303,55,293,59,284,58,273,55,261,49,257,57,246,63,242,72,240,84,234,93,224,100,225,106,224,125,241,108,247,106,253,111,261,110,273,105,282,105,288,111,299,109,298,102"
							      href="<?php echo get_permalink( 1008 ); ?>">
							<area shape="poly"
							      coords="277,111,265,114,268,121,277,123,274,138,283,148,293,156,304,153,305,142,313,141,322,147,327,158,329,168,345,146,358,158,355,172,356,183,365,189,378,186,388,175,379,156,388,146,391,143,398,133,405,129,413,124,416,113,418,103,426,93,450,92,468,66,468,57,436,47,420,49,411,50,373,42,356,40,327,43,315,52,331,87,302,108,298,114,288,122"
							      href="<?php echo get_permalink( 1005 ); ?>">
							<area shape="poly"
							      coords="289,163,281,159,274,152,271,141,267,135,259,128,249,127,239,122,232,121,215,132,213,141,211,153,211,162,219,164,236,169,241,178,242,189,241,203,244,209,248,220,250,234,256,237,272,234,280,214,291,216,295,201,288,193,281,190,279,180,294,174,292,165"
							      href="<?php echo get_permalink(); ?>">
							<area shape="poly"
							      coords="399,183,417,188,425,201,418,205,421,214,422,220,421,233,416,239,410,255,404,246,401,239,388,234,375,237,370,231,370,223,372,215,387,209,394,202,384,198,375,197"
							      href="<?php echo get_permalink( 1007 ); ?>">
						<?php } ?>
					</map>
				</p>

			</td>
		</tr>

		</tbody>
	</table>
</div>
<!-- Old position of COMPONENT -->
<?php get_footer(); ?>
