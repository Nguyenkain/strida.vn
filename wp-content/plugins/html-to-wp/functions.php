<?php
function ksm_init_html_convert()
{
	if(isset($_FILES["upload_html"]) && $_GET['ksm_upload'] == 'yes')
	{
		
		global $wpdb;
		$upload_dir = wp_upload_dir();
        $content_url = content_url();
        $content_dir = WP_CONTENT_DIR ;
		$uploaddir = $upload_dir['basedir'].DIRECTORY_SEPARATOR."html_to_wp";
		$uploadurl = $upload_dir['baseurl'].DIRECTORY_SEPARATOR."html_to_wp";
		
		//$uploaddir = "html_to_wp";
		//$uploadurl = "html_to_wp";
		
		if (!file_exists($uploaddir)) 
		{
			mkdir($uploaddir, 0777, true);
		}
		
		$uniqueid = time();
		$newname = str_replace(' ', '_', $_FILES["upload_html"]["name"]);
		$filename = explode(".", $newname);
		$upload_zip_file = $filename[0];
		$upload_zip_dir = $uploaddir.DIRECTORY_SEPARATOR.$_FILES["upload_html"]["name"];
		$upload_zip_url = $uploaddir.DIRECTORY_SEPARATOR.$_FILES["upload_html"]["name"];
		
		//mkdir($uploaddir.DIRECTORY_SEPARATOR.$filename[0], 0777, true);
		
        
        $new_theme_dir = $content_dir.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.$upload_zip_file.'_theme';
		if(move_uploaded_file($_FILES["upload_html"]["tmp_name"], $upload_zip_dir))
		{
			$zip = new ZipArchive;
			$res = $zip->open($upload_zip_dir);
			if ($res === TRUE) 
			{
				$zip->extractTo($new_theme_dir);
				$zip->close();
				ksm_html_conversion_screenshot_create($new_theme_dir.DIRECTORY_SEPARATOR);
				ksm_html_main_converter($new_theme_dir.DIRECTORY_SEPARATOR, $filename[0]);
			} 
			else 
			{
				
			}
			
			//ksm_html_create_zip($new_theme_dir, $filename[0]);
			
		}
        
        echo "Click here to view the theme:<a href='themes.php'>$filename[0]</a>";
        exit;
	}
}
function ksm_html_create_zip($dir='', $zipname='')
{
	$file_path = $dir.DIRECTORY_SEPARATOR;
	$archive_file_name = $dir;
	$filem = new fileManagement();
	$filem->create_zip($file_path, $archive_file_name);
	
    $_POST['ksm_archive_file_name'] = $dir;
    
    //$filem->recursiveDelete($file_path);
}
function ksm_html_conversion_screenshot_create($dir='')
{
    if(!file_exists($dir."screenshot.jpg") || !file_exists($dir."screenshot.png"))
    {
    	$im = imagecreatetruecolor(600, 450);
    	$text_color = imagecolorallocate($im, 233, 14, 91);
    	imagestring($im, 20, 5, 5,  'HTML to WP Conversion Theme', $text_color);
    	imagejpeg($im, $dir."screenshot.jpg");
    	imagedestroy($im);
    }

}
function ksm_html_download_zip($zipname='')
{
	header("Content-type: application/zip"); 
	header("Content-Disposition: attachment; filename=$zipname");
	header("Content-length: " . filesize($zipname));
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	readfile("$zipname");
	
}
function ksm_zipFilesAndDownload($archive_file_name,$file_path)
{
    $path= $file_path;
	$zip = new ZipArchive;
	$zip->open($archive_file_name, ZipArchive::CREATE);
	if (false !== ($dir = opendir($path)))
     {
         while (false !== ($file = readdir($dir)))
         {
             if ($file != '.' && $file != '..')
             {
                       $zip->addFile($file);
                       
             }
         }
     }
     else
     {
         die('Can\'t read dir');
     }
	
	
	
    $zip->close();
    header("Content-type: application/zip"); 
	header("Content-Disposition: attachment; filename=$archive_file_name");
	header("Content-length: " . filesize($archive_file_name));
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	readfile("$archive_file_name");
    
}
function ksm_html_main_converter($dir='', $filename='')
{
	$pages = array('index.php'=>"", 'header.php'=>"", 'footer.php'=>"", 'functions.php'=>"<?php ", 'slidebar.php'=>"");
    $temp = array('index.php', 'header.php', 'footer.php', 'slidebar.php', 'functions.php', 'searchform.php');
	$pre_css = "/*
    Theme Name: $filename Theme
    Theme URI: 
    Author: HTML to WP
    Author URI: 
    Description: 
    Version: 1.0
    */";
	if(!file_exists($dir."style.css"))
	{
		 file_put_contents($dir."style.css", $pre_css);
	}
	else
	{
		$file_content_style = file_get_contents($dir.DIRECTORY_SEPARATOR."style.css");
		$css = $pre_css.$file_content_style;
		file_put_contents($dir."style.css", $css);
	}
    
    
    
    
    //CONVERT HTML TO WP TEMPLATES FILES
	$directory = glob($dir."*");
    $menuz = array();
    $widgetz = array();
    $first = 1;
	foreach($directory  as $key=>$path)
	{
		$filename = basename($path);
		$extension = explode('.', $filename);
		if(in_array('html', $extension))
		{
			
			$html = file_get_html($path);
            
            
             //searchform.php
            foreach($html->find('search') as $element)
            {
                $pages['searchform.php'] = $element->innertext;
                $element->outertext = "<?php get_search_form() ?>";
            }
             //header.php
            foreach($html->find('header') as $element)
            {
                $pages['header.php'] = $element->innertext;
                $element->outertext = "<?php get_header() ?>";
            }
            
            //footer.php
            foreach($html->find('footer') as $element)
            {
                $pages['footer.php'] = $element->innertext;
                
                $element->outertext = "<?php get_footer() ?>";
            }
            
            //sidebar.php
            foreach($html->find('sidebar') as $element)
            {
                $pages['sidebar.php'] = $element->innertext;
                $element->outertext = "<?php get_sidebar() ?>";
            }
  
           
            foreach($html->find('blog') as $element)
            {
                
                $pre_post = "<?php if (have_posts()) : while (have_posts()) : the_post(); ?>";
                $post_post = "<?php endwhile; endif;  ?>";
                $element->outertext = $pre_post.$element->innertext.$post_post;
                
                
                //$inside_title[] = $element->find("blogtitle", 0);
                //$inside_content[] = $element->find("blogcontent", 0);
                
                
            }
            
            foreach($html->find('title') as $element) 
			{
				
					$element->innertext = "<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>";
			}
            
            foreach($html->find('head') as $element) 
			{
				
					$element->innertext .= "<?php wp_head() ?>";
			}
            
            foreach($html->find('body') as $element) 
			{
				
					$element->innertext .= "<?php wp_footer() ?>";
			}
            
            
            
            foreach($html->find('menu') as $element) 
			{
    			 if(!in_array($element->id, $menuz))
                 {
                    $menuz[] = $element->id;
			         $pages['functions.php'] .= "\nregister_nav_menus( array('$element->id' => '$element->name'));";
                     
                 }
			}
            
            
            foreach($html->find('widget') as $element) 
			{
                if(!in_array($element->id, $widgetz))
                {
                    $widgetz[] = $element->id;
    			     $pages['functions.php'] .= "\nregister_sidebar(array('name' => __( '$element->name' ),'id' => '$element->id','description' => __( '$element->description' ),'before_title' => '<h2>','after_title' => '</h2>'));";
                     
                     
                }
                
                
			}
            
            
            
            
             
            foreach($html->find('.wp_logo') as $element)
            {
                
                if($first==1)
                {
                    
                    $pages['functions.php'] .= "
                        add_action( 'admin_init', 'theme_options_init' );
                        add_action( 'admin_menu', 'theme_options_add_page' );
                        
                        
                        function theme_options_init(){
                            if(get_option('theme_logourl') == '')
                            {
                                update_option('theme_logourl', get_bloginfo('template_url').'/$element->src');
                            }
                        	register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
                        }
                        
                        function theme_options_add_page() {
                        	add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
                        }
                        
                        function theme_options_do_page()
                        {
                            if(".'$_POST["update_theme_options"]'.")
                            {
                                update_option('theme_logourl', ".'$_POST["theme_logourl"]'.");
                            }
                            ?>
                        	<div class=\"wrap\">
                        		<?php screen_icon(); echo \"<h2>\" . get_current_theme() . __( ' Theme Options', 'sampletheme' ) . \"</h2>\"; ?>
                        
                        		<?php if ( ".'$_POST["update_theme_options"] '.") : ?>
                        		<div class=\"updated fade\"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
                        		<?php endif; ?>
                                
                                <form method=\"post\" action=\"\">
                        			<table class=\"form-table\">
                        
                        				<tr valign=\"top\"><th scope=\"row\"><?php _e( 'Logo' ); ?></th>
                        					<td>
                        						<input type=\"text\" name=\"theme_logourl\" value=\"<?php echo get_option('theme_logourl') ?>\"/>
                        					</td>
                        				</tr>
                                        
                                        </table>
                        
                        			<p class=\"submit\">
                        				<input type=\"submit\" class=\"button-primary\" value=\"<?php _e( 'Save Options', 'sampletheme' ); ?>\" name=\"update_theme_options\" />
                        			</p>
                        		</form>
                        	</div>
                        <?php
                        
                        }";
                }
                
                
                $element->src = "<?php echo get_option('theme_logourl') ?>";
                $first++;
            }
            
            
            
            
            
            
            
            $pages[$extension[0].'.'.'php']  = $html;
            unlink($path);
        }
   }
   
   foreach($pages as $page=>$data)
	{
	   if($data!="")
       {
            if(in_array($page, $temp))
            {
                file_put_contents($dir.$page, $data);
            }
            else
            {
                $page_title = explode('.', $page);
                $pre_page = "<?php
                /*
                	Template Name: $page_title[0]
                */ 
                
                ?>\n";

                file_put_contents($dir.$page, $pre_page.$data);
            }   
       }
	}
   
   
   
   
   //CONVERT HTML TO WP TAGS
   $directory = glob($dir."*");
	foreach($directory  as $key=>$path)
	{
		$filename = basename($path);
		$extension = explode('.', $filename);
		if(in_array('php', $extension))
		{
		  
            $html = file_get_html($path);

            
            foreach($html->find('img') as $element) 
			{
					$element->src = "<?php bloginfo('template_url') ?>/".$element->src;
			}
			
			foreach($html->find('link') as $element) 
			{
				
					$element->href = "<?php bloginfo('template_url') ?>/".$element->href;
			}
            
            
            
            
            
            
            foreach($html->find('widget') as $element) 
            {
                $pre_widget = "<?php if ( ! dynamic_sidebar('$element->id') ) : ?>";
                $post_widget = "<?php endif; ?>";
                $element->outertext = $pre_widget.$element->innertext.$post_widget;
            }
            foreach($html->find('menu') as $element) 
			{
                $inside_div = $html->find("menu", 0)->children(0);
                $inside_ul = $html->find("menu", 0)->children(0)->children(0);
                $element->outertext = "<?php 
                     wp_nav_menu( array( 'container_class' => '$inside_div->class', 'container_id' => '$inside_div->id', 'menu_class' => '$inside_ul->class', 'menu_id' => '$inside_ul->id', 'theme_location' => '$element->id' ) ); 
                     ?>";
			}
            
            foreach($html->find("blogtitle") as $element)
            {
                $element->outertext = "<?php the_title(); ?>";
            }
            foreach($html->find("blogcontent") as $element)
            {
                $element->outertext = "<?php the_content(); ?>";
            }
            
           
            file_put_contents($dir.$extension[0].'.'.'php', $html);
		}
		
	}
	
}