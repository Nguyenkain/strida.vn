
	<style>
		html{background-color:#EEEEEE;color:#383838;}
		::-moz-selection{background:#333636;color:#00DFFC;}
		::selection{background:#333636;color:#00DFFC;}
		#documenter_sidebar #documenter_logo{background-image:url();}
		a{color:#008C9E;}
		.btn {
			border-radius:3px;
		}
		.btn-primary {
			  background-image: -moz-linear-gradient(top, #008C9E, #006673);
			  background-image: -ms-linear-gradient(top, #008C9E, #006673);
			  background-image: -webkit-gradient(linear, 0 0, 0 008C9E%, from(#343838), to(#006673));
			  background-image: -webkit-linear-gradient(top, #008C9E, #006673);
			  background-image: -o-linear-gradient(top, #008C9E, #006673);
			  background-image: linear-gradient(top, #008C9E, #006673);
			  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#008C9E', endColorstr='#006673', GradientType=0);
			  border-color: #006673 #006673 #bfbfbf;
			  color:#FFFFFF;
		}
		.btn-primary:hover,
		.btn-primary:active,
		.btn-primary.active,
		.btn-primary.disabled,
		.btn-primary[disabled] {
		  border-color: #008C9E #008C9E #bfbfbf;
		  background-color: #006673;
		}
		hr{border-top:1px solid #D4D4D4;border-bottom:1px solid #FFFFFF;}
		#documenter_sidebar, #documenter_sidebar ul a{background-color:#343838;color:#FFFFFF;}
		#documenter_sidebar ul a{-webkit-text-shadow:1px 1px 0px #494F4F;-moz-text-shadow:1px 1px 0px #494F4F;text-shadow:1px 1px 0px #494F4F;}
		#documenter_sidebar ul{border-top:1px solid #212424;}
		#documenter_sidebar ul a{border-top:1px solid #494F4F;border-bottom:1px solid #212424;color:#FFFFFF;}
		#documenter_sidebar ul a:hover{background:#333636;color:#00DFFC;border-top:1px solid #333636;}
		#documenter_sidebar ul a.current{background:#333636;color:#00DFFC;border-top:1px solid #333636;}
		#documenter_copyright{display:block !important;visibility:visible !important;}
	</style>
	
</head>
<body class="documenter-project-html-to-wordpress-converter">

	<div id="documenter_content">
	

<section id="how_to_use">
	<div class="page-header"><h3>How To Use</h3><hr class="notop"></div>
<p>
	To make your html file ready for proper conversion, you need to specify sections in your html file:</p>
<p>
	<strong>Header Section: </strong></p>
<p>
	For header section you need to wrap your header section in &lt;header&gt; and &lt;/header&gt; eg:</p>
<pre class="prettyprint lang-html linenums">
&lt;header&gt;
&lt;body&gt;
&lt;div id=&quot;templatemo_container&quot;&gt;
&nbsp;&nbsp; &nbsp;&lt;div id=&quot;templatemo_banner&quot;&gt;
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;div id=&quot;logo&quot;&gt;&lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img&nbsp; src=&quot;xczxcxczxc/czxczc&quot; class=&quot;wp_logo&quot;/&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;search&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div id=&quot;search_section&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;form action=&quot;#&quot; method=&quot;get&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type=&quot;text&quot; value=&quot;Enter keyword here...&quot; name=&quot;q&quot; size=&quot;10&quot; id=&quot;searchfield&quot; title=&quot;searchfield&quot; onfocus=&quot;clearText(this)&quot; onblur=&quot;clearText(this)&quot; /&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type=&quot;submit&quot; name=&quot;Search&quot; value=&quot;Search&quot; alt=&quot;Search&quot; id=&quot;searchbutton&quot; title=&quot;Search&quot; /&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/form&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/search&gt;
&nbsp;&nbsp;&nbsp; &lt;/div&gt; 
&nbsp;&nbsp;&nbsp; &lt;menu id=&quot;mymenu&quot; name=&quot;My Menu&quot;&gt;
&nbsp;&nbsp;&nbsp; &lt;div id=&quot;templatemo_menu&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;ul&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;current&quot;&gt;&lt;span&gt;&lt;/span&gt;Home&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Gallery&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Blog&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Forum&lt;/a&gt;&lt;/li&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;About Us&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Contact Us&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/ul&gt;&nbsp; &nbsp;
&nbsp;&nbsp; &nbsp;&lt;/div&gt;
&nbsp;&nbsp;&nbsp; &lt;/menu&gt;
&lt;/header&gt;</pre>
<p>
	&nbsp;</p>
<p>
	<strong>Menu:</strong></p>
<p>
	To make a menu you need to use &lt;menu&gt; and &lt;/menu&gt; tags surrounding your menu div containing the ul, eg:</p>
<pre class="prettyprint lang-html linenums">
&nbsp;&nbsp;&nbsp; &lt;menu id=&quot;mymenu&quot; name=&quot;My Menu&quot;&gt;
&nbsp;&nbsp;&nbsp; &lt;div id=&quot;templatemo_menu&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;ul&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;current&quot;&gt;&lt;span&gt;&lt;/span&gt;Home&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Gallery&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Blog&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Forum&lt;/a&gt;&lt;/li&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;About Us&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;&lt;/span&gt;Contact Us&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/ul&gt;&nbsp; &nbsp;
&nbsp;&nbsp; &nbsp;&lt;/div&gt; &lt;!-- end of menu --&gt;
&nbsp;&nbsp;&nbsp; &lt;/menu&gt;</pre>
<p>
	<strong>name</strong> is your menu name that is added to your wordpress backend,<strong> id</strong> is the unique id for the menu, it has to be different for each menu in your theme.</p>
<p>
	&nbsp;</p>
<p>
	<strong>Widget:</strong></p>
<p>
	To make a widget you need to wrap your widget html with &lt;widget&gt;&lt;/widget&gt;, here is an example:</p>
<pre class="prettyprint lang-html linenums">
&lt;widget id=&quot;right-sidebar&quot; name=&quot;Right Hand Sidebar&quot; description=&quot;Widgets in this area will be shown on the right-hand side.&quot;&gt;&lt;/widget&gt;
</pre>
<p>
	<strong>id</strong> is the unique id for each widget, <strong>name</strong> is the name shown in the widget menu and <strong>description</strong> is the description for that widget. If the widget is empty from the backend, it will show the default html as above. Otherwise it will replace the html.</p>
<p>
	&nbsp;</p>
<p>
	<strong>Blog Content:</strong></p>
<p>
	&lt;blogcontent&gt;&lt;/blogcontent&gt; will wrap the main content of the page, its the place where your post goes. You can also use &lt;blogtitle&gt;&lt;/blogtitle&gt; for the the post name. eg:</p>
<pre class="prettyprint lang-html linenums">
&lt;h3&gt;&lt;blogtitle&gt;&lt;/blogtitle&gt;&lt;/h3&gt;
&lt;p&gt;
&lt;blogcontent&gt;
&lt;/blogcontent&gt;
&lt;/p&gt;</pre>
<p>
	The above snippet will put your post title inside h3 tags and the post content inside p tags right below it.</p>
<p>
	&nbsp;</p>
<p>
	<strong>Footer:</strong></p>
<p>
	Footer section is enclosed by &lt;footer&gt;&lt;/footer&gt; tags, eg:<br>
	&nbsp;</p>
<pre class="prettyprint lang-html linenums">
&lt;footer&gt;
&nbsp;&nbsp;&nbsp; &lt;div id=&quot;templatemo_footer&quot;&gt;
&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp; &lt;ul class=&quot;footer_list&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;current&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Gallery&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Blog&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Forum&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About Us&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li class=&quot;last&quot;&gt;&lt;a href=&quot;#&quot;&gt;Contact Us&lt;/a&gt;&lt;/li&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/ul&gt;
&lt;/footer&gt;
</pre>
<p>
	&nbsp;</p>
<p>
	<strong>Logo:</strong></p>
<p>
	For logo, you just need to add the class &quot;<strong>wp_logo</strong>&quot; to your logo <strong>img</strong>, eg:</p>
<pre class="prettyprint lang-html linenums">
&lt;img&nbsp; src=&quot;images/logo.png&quot; class=&quot;wp_logo&quot;/&gt;</pre>
<p>
	This will also add an option in the backend that allows you to change the logo url.</p>
<p>
	&nbsp;</p>
<p>
	<strong>Theme Preview Image:</strong></p>
<p>
	The theme preview image is screenshot.jpg or screenshot.png, if there is no screenshot image file in the theme folder the plugin will make a blank image as your screenshot.</p>
<p>
	&nbsp;</p>
<p>
	These Theme files has to be zipped after you are done, and can be used be uploaded from the HTML To Wordpress Converter plugin for conversion and installation.</p>
</section>
<section id="templates">
	<div class="page-header"><h3>Templates</h3><hr class="notop"></div>
<p>
	Index.html template is the main.php for Wordpress which is the default template, all other html files will be converted to templates, each file name is the template name.</p>
<p>
	Lets take an exmple:</p>
<p>
	If you have a theme with a couple of html files, like:</p>
<p>
	index.html,</p>
<p>
	portfolio.html,</p>
<p>
	blog.html,</p>
<p>
	about.html.</p>
<p>
	The index.html file will be the main template file (main.php) and all other html files will be page templates with these names:&nbsp;</p>
<p>
	portfolio</p>
<p>
	blog</p>
<p>
	about.</p>
</section>
<section id="features">
	<div class="page-header"><h3>Features</h3><hr class="notop"></div>
<p>
	Convert your HTML documents into WordPress themes without having any knowledge of the WordPress theming standards.</p>
<p>
	Features:</p>
<ol>
	<li>
		Easy To Use.</li>
	<li>
		No knowledge of WordPress Theming required.</li>
	<li>
		Makes Menus.</li>
	<li>
		Makes Widgets.</li>
	<li>
		Makes Post Area.</li>
	<li>
		Makes Footer Area.</li>
	<li>
		Allows Multiple Menus.</li>
	<li>
		Allows Multiple Widgets.</li>
	<li>
		Adds Menus to the backend.</li>
	<li>
		Allows the option to change the logo in the backend.</li>
</ol>
</section>
<section id="source_and_credit">
	<div class="page-header"><h3>Source And Credit</h3><hr class="notop"></div>
<p>
	This products uses SimpleHTMLDOM library:</p>
<p>
	http://simplehtmldom.sourceforge.net/</p>
<p>
	&nbsp;</p>
<p>
	SimpleHTMLDOM License:</p>
<div class="highlight">
	<pre class="prettyprint lang-plain linenums">
Website: http://sourceforge.net/projects/simplehtmldom/

Additional projects that may be used: http://sourceforge.net/projects/debugobject/

Acknowledge: Jose Solorzano (https://sourceforge.net/projects/php-html/)

Contributions by:

         Yousuke Kumakura (Attribute filters)

         Vadim Voituk (Negative indexes supports of &quot;find&quot; method)

         Antcs (Constructor with automatically load contents either text or file/url)


all affected sections have comments starting with &quot;PaperG&quot;


Paperg - Added case insensitive testing of the value of the selector.

Paperg - Added tag_start for the starting index of tags - NOTE: This works but not accurately.

 This tag_start gets counted AFTER \r\n have been crushed out, and after the remove_noice calls so it will not reflect the REAL position of the tag in the source,

 it will almost always be smaller by some amount.

 We use this to determine how far into the file the tag in question is. This &quot;percentage will never be accurate as the $dom-&gt;size is the &quot;real&quot; number of bytes the dom was created from.

 but for most purposes, it&#39;s a really good estimation.

Paperg - Added the forceTagsClosed to the dom constructor. Forcing tags closed is great for malformed html, but it CAN lead to parsing errors.

Allow the user to tell us how much they trust the html.

Paperg add the text and plaintext to the selectors for the find syntax. plaintext implies text in the innertext of a node. text implies that the tag is a text node.

This allows for us to find tags based on the text they contain.

Create find_ancestor_tag to see if a tag is - at any level - inside of another specific tag.

Paperg: added parse_charset so that we know about the character set of the source document.

 NOTE: If the user&#39;s system has a routine called get_last_retrieve_url_contents_content_type availalbe, we will assume it&#39;s returning the content-type header from the

 last transfer or curl_exec, and we will parse that and use it in preference to any other method of charset detection.


Found infinite loop in the case of broken html in restore_noise. Rewrote to protect from that.

PaperG (John Schlick) Added get_display_size for &quot;IMG&quot; tags.


Licensed under The MIT License

Redistributions of files must retain the above copyright notice.</pre>
</div>
<p>
	&nbsp;</p>
</section>

	</div>
