<?php

if(function_exists('vc_set_as_theme')) {

	add_action( 'vc_before_init', function(){
		

	define( 'NEW_VC_TEMPLATE_DIR', dirname( __FILE__ ) .'/vc_templates/' );

	/* Set Theme */
	vc_set_as_theme( true );

	/* Disable Front-End */
	// vc_disable_frontend();

	/* Set templates directory */
	vc_set_shortcodes_templates_dir( NEW_VC_TEMPLATE_DIR );

	/* Set Default Value */
	WPBakeryVisualComposerAbstract::$config['default_post_types'] = Array( 'page', 'templates');

	/* Include map.php */
	include( 'map.php' );

	/* Removing shortcodes */
	// vc_remove_element("vc_wp_search");
	// vc_remove_element("vc_wp_meta");
	// vc_remove_element("vc_wp_recentcomments");
	// vc_remove_element("vc_wp_calendar");
	// vc_remove_element("vc_wp_pages");
	// vc_remove_element("vc_wp_tagcloud");
	// vc_remove_element("vc_wp_custommenu");
	// vc_remove_element("vc_wp_text");
	// vc_remove_element("vc_wp_posts");
	// vc_remove_element("vc_wp_links");
	// vc_remove_element("vc_wp_categories");
	// vc_remove_element("vc_wp_archives");
	// vc_remove_element("vc_wp_rss");
	// vc_remove_element("vc_widget_sidebar");

	// vc_remove_element("vc_accordion_tab");
	// vc_remove_element("vc_accordion");
	// vc_remove_element("vc_button");
	// vc_remove_element("vc_button2");
	// vc_remove_element("vc_carousel");
	// vc_remove_element("vc_column_text");
	// vc_remove_element("vc_cta_button");
	// vc_remove_element("vc_cta_button2");
	// vc_remove_element("vc_facebook");
	// vc_remove_element("vc_flickr");
	// vc_remove_element("vc_gallery");
	// vc_remove_element("vc_gmaps");
	// vc_remove_element("vc_googleplus");
	// vc_remove_element("vc_images_carousel");
	// vc_remove_element("vc_item");
	// vc_remove_element("vc_items");
	// vc_remove_element("vc_message");
	// vc_remove_element("vc_pie");
	// vc_remove_element("vc_pinterest");
	// vc_remove_element("vc_posts_grid");
	// vc_remove_element("vc_posts_slider");
	// vc_remove_element("vc_progress_bar");
	// vc_remove_element("vc_separator");
	// vc_remove_element("vc_single_image");
	// vc_remove_element("vc_tab");
	// vc_remove_element("vc_tabs");
	// vc_remove_element("vc_tour");
	// vc_remove_element("vc_teaser_grid");
	// vc_remove_element("vc_text_separator");
	// vc_remove_element("vc_toggle");
	// vc_remove_element("vc_tweetmeme");
	// vc_remove_element("vc_twitter");
	// vc_remove_element("vc_video");

	/* Clean Output Classes */
	function setClass($classes){
		// if($classes){
		// 	$return = '';
		// 	foreach($classes as $class) {
		// 	if(trim($class))
		// 		$return .= trim($class).' ';
		// 	}
		// 	if(trim($return) != '')
		// 	return ' class="'.trim($return).'"';
		// }
		return ' class="'. $classes .'"';
	}

	//Fixing filtering for shortcodes
	function shortcode_empty_paragraph_fix($content){   
	    $array = array (
	        '<p>[' => '[', 
	        ']</p>' => ']', 
	        ']<br />' => ']'
	    );

	    $content = strtr($content, $array);
	    return $content;
	}
	add_filter('the_content', 'shortcode_empty_paragraph_fix');

	// Portfolio Pagination
	function round_num($num, $to_nearest) {
	   return floor($num/$to_nearest)*$to_nearest;
	}

	// Hex to Rgb
	function hex2rgb($hex) {
	   $hex = str_replace("#", "", $hex);

	   if(strlen($hex) == 3) {
	      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
	      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
	      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
	   } else {
	      $r = hexdec(substr($hex,0,2));
	      $g = hexdec(substr($hex,2,2));
	      $b = hexdec(substr($hex,4,2));
	   }
	   $rgb = array($r, $g, $b);
	   //return implode(",", $rgb); // returns the rgb values separated by commas
	   return $rgb; // returns an array with the rgb values
	}

	// Remove metabox
	function remove_vc_meta_box() {
		remove_meta_box("vc_teaser", "portfolio", "side");
		remove_meta_box("vc_teaser", "page", "side"); 
		remove_meta_box("vc_teaser", "team", "side"); 
		remove_meta_box("vc_teaser", "product", "side"); 
	}
	add_action( 'admin_head', 'remove_vc_meta_box' );

	// add_filter( 'vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
	// function custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
	// 	if ( $tag == 'vc_row' || $tag == 'vc_row_inner' ) {
	// 		$class_string = str_replace( 'vc_row-fluid', 'my_row-fluid', $class_string ); // This will replace "vc_row-fluid" with "my_row-fluid"
	// 	}
	// 	if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
	// 		$class_string = preg_replace( '/vc_col-sm-(\d{1,2})/', 'col-sm-$1', $class_string ); // This will replace "vc_col-sm-%" with "my_col-sm-%"
	// 	}
	// 	return $class_string; // Important: you should always return modified or original $class_string
	// }

	/*
	function myoverride() { 
		remove_action('wp_head', array(WPBakeryVisualComposer::getInstance(), 'addMetaData')); 
	}
	add_action('init', 'myoverride', 100); 
	*/
	} );
}