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


function filter_search( $query )
{
	if ( $query->is_search ) {
		$query->set( 'post_type', array( 'product' ) );
	};

	return $query;
}

;
add_filter( 'pre_get_posts', 'filter_search' );


$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', - 1 );
function my_modify_posts_per_page()
{
	add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

function my_option_posts_per_page( $value )
{
	global $option_posts_per_page;
	if ( is_tax( 'product_cate' ) ) {
		return 3;
	} else {
		return $option_posts_per_page;
	}
}

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts()
{
	$labels = array(
		"name"          => "Brand Stories",
		"singular_name" => "Brand Story",
	);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "brand_story", "with_front" => true ),
		"query_var"           => true,

	);
	register_post_type( "brand_story", $args );

	$labels = array(
		"name"          => "Distributors",
		"singular_name" => "Distributor",
	);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "distributor", "with_front" => true ),
		"query_var"           => true,

	);
	register_post_type( "distributor", $args );

	$labels = array(
		"name"          => "Videos",
		"singular_name" => "Video",
	);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "video", "with_front" => true ),
		"query_var"           => true,

	);
	register_post_type( "video", $args );

	$labels = array(
		"name"          => "Downloads",
		"singular_name" => "Download",
	);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "download", "with_front" => true ),
		"query_var"           => true,
		"supports"            => array(
			"title",
			"editor",
			"custom-fields",
			"revisions",
			"thumbnail",
			"page-attributes"
		),
	);
	register_post_type( "download", $args );

	$labels = array(
		"name"          => "FAQ",
		"singular_name" => "FAQ",
	);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "faq", "with_front" => true ),
		"query_var"           => true,

	);
	register_post_type( "faq", $args );

	$labels = array(
		"name"          => "Products",
		"singular_name" => "Product",
	);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "product", "with_front" => true ),
		"query_var"           => true,
		"supports"            => array(
			"title",
			"editor",
			"excerpt",
			"custom-fields",
			"revisions",
			"thumbnail",
			"page-attributes",
			"post-formats"
		),
	);
	register_post_type( "product", $args );

// End of cptui_register_my_cpts()
}

add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes()
{

	$labels = array(
		"name"          => _x( 'Areas', 'taxonomy general name' ),
		"singular_name" => _x( 'Area', 'taxonomy singular name' ),
		'menu_name'     => __( 'Area' ),
	);

	$args = array(
		"labels"            => $labels,
		"hierarchical"      => false,
		"label"             => "Areas",
		"show_ui"           => true,
		"query_var"         => true,
		"rewrite"           => array( 'slug' => _x( 'area', 'URL slug' ), 'with_front' => true ),
		"show_admin_column" => false,
	);
	register_taxonomy( "area", array( "distributor" ), $args );


	$labels = array(
		"name"          => _x( 'Categories', 'taxonomy general name' ),
		"singular_name" => _x( 'Category', 'taxonomy singular name' ),
		'menu_name'     => __( 'Category' ),
	);

	$args = array(
		"labels"            => $labels,
		"hierarchical"      => false,
		"label"             => "Categories",
		"show_ui"           => true,
		"query_var"         => true,
		"rewrite"           => array( 'slug' => _x( 'product_cate', 'URL slug' ), 'with_front' => true ),
		"show_admin_column" => false,
	);
	register_taxonomy( "product_cate", array( "product" ), $args );

// End cptui_register_my_taxes
}
