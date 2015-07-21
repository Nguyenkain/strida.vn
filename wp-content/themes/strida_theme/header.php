<head>
	<meta name="msvalidate.01" content="DD2201DEACFA9C39FD03CF14E15A77E5"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="robots" content="index, follow"/>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<title>Strida Vietnam</title>
	<link href="<?php bloginfo( 'template_url' ) ?>/templates/stridatemplate/favicon.ico"
	      tppabs="http://strida.vn/templates/stridatemplate/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet"
	      href="<?php bloginfo( 'template_url' ) ?>/modules/mod_sot_vm_simple_slider/assets/css/style.css"
	      tppabs="http://strida.vn/modules/mod_sot_vm_simple_slider/assets/css/style.css" type="text/css"/>
	<link rel="stylesheet"
	      href="<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/assets/skitter/css/skitter.styles.css"
	      tppabs="http://strida.vn/modules/mod_btslideshow/assets/skitter/css/skitter.styles.css" type="text/css"/>
	<link rel="stylesheet"
	      href="<?php bloginfo( 'template_url' ) ?>/modules/mod_cassrina_hover_image_menu/style_cassrina.css"
	      tppabs="http://strida.vn//modules/mod_cassrina_hover_image_menu/style_cassrina.css" type="text/css"/>

	<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/media/system/js/mootools.js"
	        tppabs="http://strida.vn/media/system/js/mootools.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/media/system/js/caption.js"
	        tppabs="http://strida.vn/media/system/js/caption.js"></script>
	<script type="text/javascript"
	        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_sot_vm_simple_slider/assets/jquery1.5-sot.min.js"
	        tppabs="http://strida.vn/modules/mod_sot_vm_simple_slider/assets/jquery1.5-sot.min.js"></script>
	<script type="text/javascript"
	        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_sot_vm_simple_slider/assets/jquery.jcarousel.js"
	        tppabs="http://strida.vn/modules/mod_sot_vm_simple_slider/assets/jquery.jcarousel.js"></script>
	<script type="text/javascript"
	        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_sot_vm_simple_slider/assets/jquery.easing.1.3.js"
	        tppabs="http://strida.vn/modules/mod_sot_vm_simple_slider/assets/jquery.easing.1.3.js"></script>
	<script type="text/javascript"
	        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_sot_vm_simple_slider/assets/jquery.hoverIntent.minified.js"
	        tppabs="http://strida.vn/modules/mod_sot_vm_simple_slider/assets/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript"
	        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/assets/js/btloader.min.js"
	        tppabs="http://strida.vn/modules/mod_btslideshow/assets/js/btloader.min.js"></script>
	<script type="text/javascript"
	        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_cassrina_hover_image_menu/script_cassrina.js"
	        tppabs="http://strida.vn//modules/mod_cassrina_hover_image_menu/script_cassrina.js"></script>

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/templates/stridatemplate/css/template.css"
	      tppabs="http://strida.vn/templates/stridatemplate/css/template.css" type="text/css"/>

	<link rel="stylesheet"
	      href="<?php bloginfo( 'template_url' ) ?>/style.css"
	      tppabs="http://strida.vn/modules/mod_sot_vm_simple_slider/assets/css/style.css" type="text/css"/>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="language_selection">
	<?php do_action( 'icl_language_selector' ); ?>
</div>
<div id="banner">
	<div id="banner_top">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div id="banner_top_left"></div>
		</a>

		<div id="banner_top_right">
			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
				<div class="search">
					<?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
						<input name="s" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox"
						       type="text" size="20"
						       value="<?php echo get_search_query() ? esc_attr( get_search_query() ) : "Products Search..."; ?>"
						       onblur="if(this.value=='') this.value='Products Search...';"
						       onfocus="if(this.value=='Products Search...') this.value='';"/>
					<?php } else { ?>
						<input name="s" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox"
						       type="text" size="20"
						       value="<?php echo get_search_query() ? esc_attr( get_search_query() ) : "Tìm Kiếm Sản Phẩm..."; ?>"
						       onblur="if(this.value=='') this.value='Tìm Kiếm  Sản Phẩm...';"
						       onfocus="if(this.value=='Tìm Kiếm Sản Phẩm...') this.value='';"/>
					<?php } ?>
				</div>
			</form>

		</div>
	</div>
	<div id="banner_bottom">
		<?php
		// Primary navigation menu.
		wp_nav_menu( array(
			'menu_class'     => 'nav-menu cassrinamenu',
			'theme_location' => 'primary',
		) );
		?>
		<script type="text/javascript">

			var cassrinamenu = new cassrinamenu.dd("cassrinamenu");
			cassrinamenu.init("cassrinamenu", "menuhover");

		</script>

	</div>
</div>

<?php if ( is_home() ) { ?>
	<div id="slideshow">
		<div style="width: 960px;height: 100%;margin:0 auto;">
			<div style="clear: both;"></div>
			<div id="mod_btslideshow_16" class="box_skitter mod_btslideshow" style="width:960px; height:360px;">
				<ul>
					<li>
						<img class="cubeRandom"
						     src="<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/images/16/slideshow/bb01.jpg"
						     rel="http://strida.vn/modules/mod_btslideshow/images/16/thumbnail/bb01.jpg"/>

						<div class="label_text"></div>
					</li>
					<li>
						<img class="cubeRandom"
						     src="<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/images/16/slideshow/bb02.jpg"
						     rel="http://strida.vn/modules/mod_btslideshow/images/16/thumbnail/bb02.jpg"/>

						<div class="label_text"></div>
					</li>
					<li>
						<img class="cubeRandom"
						     src="<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/images/16/slideshow/bb03.jpg"
						     rel="http://strida.vn/modules/mod_btslideshow/images/16/thumbnail/bb03.jpg"/>

						<div class="label_text"></div>
					</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
			<script>

				(function () {
					var libs = [
						'<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/assets/js/jquery-1.6.2.min.js'/*tpa=http://strida.vn/modules/mod_btslideshow/assets/js/jquery-1.6.2.min.js*/,
						'<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/assets/skitter/js/jquery.skitter.min.js'/*tpa=http://strida.vn/modules/mod_btslideshow/assets/skitter/js/jquery.skitter.min.js*/,
						'<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/assets/skitter/js/jquery.easing.1.3.min.js'/*tpa=http://strida.vn/modules/mod_btslideshow/assets/skitter/js/jquery.easing.1.3.min.js*/,
						'<?php bloginfo( 'template_url' ) ?>/modules/mod_btslideshow/assets/skitter/js/jquery.animate-colors-min.js'/*tpa=http://strida.vn/modules/mod_btslideshow/assets/skitter/js/jquery.animate-colors-min.js*/
					];

					BT.Loader.js(libs, function () {
						jQuery.noConflict();
						jQuery('#mod_btslideshow_16').skitter({
							width: 960,
							height: 360,
							animation: 'glassBlock',
							structure: '<a href="#" class="prev_button">prev</a>' + '<a href="#" class="next_button">next</a>' + '<span class="info_slide"></span>' + '<div class="container_skitter">' + '<div class="image">' + '<a target="_blank" href="index.htm"/*tpa=http://strida.vn/*/><img class="image_main" /></a>' + '<div class="label_skitter"></div>' + '</div>' + '</div>',
							velocity: 1.3,
							interval: 3500,
							thumb_width: '70px',
							thumb_height: '40px',
							caption: 'bottom',
							caption_width: '250',
							navigation: 1,
							fullscreen: false
						});
					});
				})();

			</script>
		</div>
	</div>
<?php } ?>
<div id="main_container">
