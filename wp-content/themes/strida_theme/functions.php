<?php if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'primary' => 'Primary Header Nav',
		)
	);
}

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 400, 320, true );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
) );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'status',
	'audio',
	'chat'
) );


function filter_search($query) {
	if ($query->is_search) {
		$query->set('post_type', array('product'));
	};
	return $query;
};
add_filter('pre_get_posts', 'filter_search');


$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', -1);
function my_modify_posts_per_page() {
	add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}
function my_option_posts_per_page( $value ) {
	global $option_posts_per_page;
	if ( is_tax( 'product_cate') ) {
		return 3;
	} else {
		return $option_posts_per_page;
	}
}
