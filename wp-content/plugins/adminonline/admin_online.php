<?php
/**
 * @package Admin Online
 * @version 1.0
 */
/*
Plugin Name: Admin Online
Plugin URI: http://www.techwyse.com
Description: Admin Online
Author: Techwyse
Version: 1.0
Author URI: http://www.techwyse.com
*/
ob_start();
global $curr_page, $hidAction, $option, $wpdb;

define("PLUGIN_PATH",ABSPATH.'wp-content/plugins/adminonline/');
define("PLUGIN_URL",get_option('siteurl').'/wp-content/plugins/adminonline/');
define("UPLOAD_PATH",ABSPATH.'wp-content/uploads/');
define("UPLOAD_URL",get_option('siteurl').'/wp-content/uploads/');

$wpdb->show_errors();
//include('widget.php');
$curr_page = $_REQUEST["page"];
$hidAction = $_POST["hidAction"];
$option = $_REQUEST["option"];

	if(!is_admin()) {
		wp_enqueue_script('jquery_1_3_2',PLUGIN_URL.'inc/js/jquery-1.3.2.js');
		
	}

add_action('admin_menu', 'admin_add_pages');
function admin_add_pages(){
	add_menu_page('Site Menus','Site Menus','manage_options', 'site_menu', 'site_menu');
 	add_submenu_page(site_menu,'',' ','manage_options', 'site_menu', 'site_menu');
     	if (file_exists(PLUGIN_PATH.'faqcategory/menu_option.php')) 
	{
		add_submenu_page('site_menu','FAQ Category','FAQ Category','manage_options', 'faqcategory', 'faqcategory');
		if($_REQUEST['page']=="faqcategory")
			include(PLUGIN_PATH.'faqcategory/menu_option.php');
	}
	
	if (file_exists(PLUGIN_PATH.'faq/menu_option.php')) 
	{
		add_submenu_page('site_menu','FAQ','FAQ','manage_options', 'faq', 'faq');
		if($_REQUEST['page']=="faq")
			include(PLUGIN_PATH.'faq/menu_option.php');
	}

/*	if (file_exists(PLUGIN_PATH.'gallerycategory/menu_option.php')) {
		add_submenu_page('site_menu','Gallery Category','Gallery Category','manage_options', 'gallerycategory', 'gallerycategory');
		if ($_REQUEST['page']=='gallerycategory') 
			include(PLUGIN_PATH.'gallerycategory/menu_option.php');
	}*/
	/*
	if (file_exists(PLUGIN_PATH.'gallerysubcategory/menu_option.php')) 
	{
		add_submenu_page('site_menu','Category','Category','manage_options', 'gallerysubcategory', 'gallerysubcategory');
		if($_REQUEST['page']=="gallerysubcategory")
			include(PLUGIN_PATH.'gallerysubcategory/menu_option.php');
	}
	*/
	if (file_exists(PLUGIN_PATH.'gallery/menu_option.php')) {
		add_submenu_page('site_menu','Gallery','Gallery','manage_options', 'gallery', 'gallery');
		if ($_REQUEST['page']=='gallery') 
			include(PLUGIN_PATH.'gallery/menu_option.php');
	}
			
		if (file_exists(PLUGIN_PATH.'videogallery/menu_option.php')) 
	   {
		add_submenu_page('site_menu','Video Gallery','Video Gallery','manage_options', 'videogallery', 'videogallery');
		if($_REQUEST['page']=="videogallery")
			include(PLUGIN_PATH.'videogallery/menu_option.php');
	   }



}
function site_menu(){
	
	echo "<center style='color:#00000; padding-top:220px; font-size:30px;'><b>Welcome to the Site Menu Section</b></center>";
}
?>