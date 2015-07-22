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
		<?php
		//Get all Term
		$args  = array(
			'orderby'    => 'id',
			'order'      => 'ASC',
			'hide_empty' => true,
		);
		$terms = get_terms( 'product_cate', $args ); ?>

		<?php foreach ( $terms as $term ) { ?>
			<?php if ( $term->term_id == icl_object_id( $term->term_id, 'product_cate', false, ICL_LANGUAGE_CODE ) ) { ?>
				<li class="item<?php echo $term->term_id ?>"><a
						href="<?php echo get_term_link( $term ) ?>"><span><?php echo $term->name ?></span></a></li>
			<?php } ?>
		<?php } ?>

	</ul>
</div>
