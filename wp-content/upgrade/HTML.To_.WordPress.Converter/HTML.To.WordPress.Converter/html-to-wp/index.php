<?php
/*

Plugin Name: HTML to WordPress plugin

Plugin URI: http://www.redhawk-studio.com/demos/html_to_wp/

Description: Convert your HTML documents into WordPress themes without having any knowledge of the WordPress theming standards.

Version: 1.0

Author: RedHawk Studio

Author URI: http://www.redhawk-studio.com
*/



/**

 *

 * @author RedHawk Team

 *

 */
 



define('KSM_PLUGIN_ADDRESS', plugins_url('/', __FILE__));

define('KSM_PLUGIN_PATH', dirname(__FILE__));

set_time_limit(100000000);
include('includes.php');
include('functions.php');
include('html_dom.php');

add_action('admin_menu', 'html_to_wp_create_menu');
add_action('init', 'ksm_init_html_convert');
add_action( 'admin_init', 'ksm_plugin_admin_init' );

function html_to_wp_create_menu()
{
    $plugin_page = add_menu_page('Html to WP', 'Html to WP', 'read','HTML_TO_WP', 'html_to_wp_menu_page', KSM_PLUGIN_ADDRESS.'images/doc_convert.png');
    add_action('admin_print_scripts-' . $plugin_page, 'ksm_plugin_admin_scripts');
    add_action('admin_head-'. $plugin_page, 'ksm_head_function');
    add_action('admin_footer-'. $plugin_page, 'ksm_footer_function');
}
function ksm_plugin_admin_scripts()
{
        wp_enqueue_script( 'ksm-plugin-script1' );
        wp_enqueue_script( 'ksm-plugin-script2' );
        
}
function ksm_plugin_admin_init() {
        wp_register_script( 'ksm-plugin-script1', KSM_PLUGIN_ADDRESS. 'js/jquery.js');
        wp_register_script( 'ksm-plugin-script2', KSM_PLUGIN_ADDRESS. 'js/jquery.form.js');
}
function ksm_head_function()
{
    $css_attr = "
    <style>form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
    #progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
    #bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
    #percent { position:absolute; display:inline-block; top:3px; left:48%; }</style>";
    echo $css_attr;
}
function ksm_footer_function()
{
    $js_attr = '
    <script>
    $(document).ready(function()
    {
    
    	var options = { 
        beforeSend: function() 
        {
        	$("#progress").show();
        	//clear everything
        	$("#bar").width(\'0%\');
        	$("#message").html("");
    		$("#percent").html("0%");
        },
        uploadProgress: function(event, position, total, percentComplete) 
        {
        	$("#bar").width(percentComplete+\'%\');
        	$("#percent").html(percentComplete+\'%\');
    
        
        },
        success: function() 
        {
            $("#bar").width(\'100%\');
        	$("#percent").html(\'100%\');
    
        },
    	complete: function(response) 
    	{
    		$("#message").html("<font color=\'green\'>"+response.responseText+"</font>");
    	},
    	error: function()
    	{
    		$("#message").html("<font color=\'red\'> ERROR: unable to upload files</font>");
    
    	}
         
    }; 
    
         $("#myForm").ajaxForm(options);
    
    });
    
    </script>';
    echo $js_attr;
}
function html_to_wp_menu_page()
{
 ?>
<form id="myForm" action="<?php bloginfo('url') ?>/?ksm_upload=yes" method="post" enctype="multipart/form-data">
     <input type="file" size="60" name="upload_html">
     <input type="submit" value="Upload">
 </form>
 <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
<div id="message"></div>
 
 <?php include 'documentation/index.php'?>

<?php
}?>