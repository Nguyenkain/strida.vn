<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>
<div id="page_content_left" class="sidebar brand_story">
	<?php echo ICL_LANGUAGE_CODE == 'en' ? do_shortcode( '[postlist id=15]' ) : do_shortcode( '[postlist id=861]' ); ?>
</div>
