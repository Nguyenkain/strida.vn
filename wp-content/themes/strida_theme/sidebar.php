<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>
<div id="page_content_left">
	<ul class="menu">
		<?php if ( have_posts() ) : ?>
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>
				<li class="item"><a
						href="<?php echo get_permalink(); ?>"><span><?php the_title() ?></span></a>
				</li>
				<?php
				// End the loop.
			endwhile;
		endif; ?>
	</ul>
</div>
