<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
<?php get_header() ?>

<div id="main_top">
	<div id="main_top_title">
		<div class="bannergroup">

			<div class="banneritem"><img src="<?php bloginfo( 'template_url' ) ?>/images/banners/on_focus_title.jpg"
			                             tppabs="http://strida.vn/images/banners/on_focus_title.jpg" alt="Banner"/>

				<div class="clr"></div>
			</div>

		</div>
	</div>
	<div id="main_top_content">

		<div class="sotss-theme1">
			<?php echo do_shortcode( '[postlist id=180]' ); ?>
		</div>
		<script type="text/javascript">
			jSot(document).ready(function ($) {
				$('#SotSimpleSlider_80').jcarousel({
					vertical: false,
					start: 1,
					scroll: 5,
					visible: 5,
					animation: 'normal',
					easing: 'swing',
					auto: parseInt(1),
					wrap: 'circular',
					setupCallback: setitemheight_80
				});

			});
			function setitemheight_80() {
				var $list_li = jSot('#SotSimpleSlider_80').children('li');
				var $max_h = 0;
				jSot.each($list_li, function (key, val) {
					if (parseInt(jSot(val).height()) > $max_h) {
						$max_h = parseInt(jSot(val).height());
					}
				})

				jSot.each($list_li, function (key, val) {
					jSot(val).children('div').height($max_h);
				})

			}
		</script>


	</div>
	<div id="page_title">
		<div id="page_title_left">

		</div>
		<div id="page_title_right">

		</div>
	</div>

	<!-- Old position of COMPONENT -->
</div>
<div id="main_bottom">
	<div id="main_bottom_left">
		<div id="main_bottom_left_title"></div>
		<div id="main_bottom_left_content">
			<div id="video_player">

				<script type="text/javascript"
				        src="<?php bloginfo( 'template_url' ) ?>/modules/mod_simple_video_flash_player/jwplayer.js"
				        tppabs="http://strida.vn/modules/mod_simple_video_flash_player/jwplayer.js"></script>
				<div id='mediaspace1622677107'><p><a
							href="javascript:if(confirm(%27http://www.macromedia.com/go/getflashplayer  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.macromedia.com/go/getflashplayer%27"
							tppabs="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see
						this player.</p></div>
				<script type='text/javascript'>
					jwplayer('mediaspace1622677107').setup({
						'flashplayer': '<?php bloginfo( 'template_url' ) ?>/modules/mod_simple_video_flash_player/jwplayer.swf'/*tpa=http://strida.vn/modules/mod_simple_video_flash_player/jwplayer.swf*/,
						'file': 'http://youtu.be/-W7ltHDMFh0',

						'backcolor': '#000000',
						'controlbar': 'none',
						'width': '330',
						'height': '200'
					});
				</script>

				<div style="display:none;">time2online Joomla Extensions: <a
						href="javascript:if(confirm(%27http://www.time2online.de/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.time2online.de/%27"
						tppabs="http://www.time2online.de/">Simple Video Flash Player Module</a></div>
			</div>
		</div>
	</div>
	<div id="main_bottom_right">
		<div id="main_bottom_right_title">
			<div class="bannergroup">

				<div class="banneritem"><img
						src="<?php bloginfo( 'template_url' ) ?>/images/banners/whats_new_title.jpg"
						tppabs="http://strida.vn/images/banners/whats_new_title.jpg" alt="Banner"/>

					<div class="clr"></div>
				</div>

			</div>
		</div>
		<div id="main_bottom_right_content">
			<?php echo do_shortcode( '[postlist id=157]' ); ?>
		</div>
	</div>
</div>
<div id="page_content">
	<table class="blog" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top">
			</td>
		</tr>
	</table>

</div>
<?php get_footer() ?>
</body>
</html>
