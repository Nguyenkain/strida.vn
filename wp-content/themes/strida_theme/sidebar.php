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
	<?php echo ICL_LANGUAGE_CODE == 'en' ? do_shortcode( '[postlist id=25]' ) : do_shortcode( '[postlist id=846]' ); ?>
</div>
