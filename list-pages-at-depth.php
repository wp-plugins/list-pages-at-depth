<?php



/*

Plugin Name: List Pages at Depth
Plugin URI: http://www.benhuson.co.uk/wordpress-plugins/list-pages-at-depth/
Description: Enhanced wp_list_pages function so you can specify a start depth. Useful for showing secondary and tertiary navigation independently from primary navigation.
Version: 1.0
Author: Ben Huson
Author URI: http://www.benhuson.co.uk/

Released under the GPL:
http://www.opensource.org/licenses/gpl-license.php

*/



function list_pages_at_depth( $args = '') {
	
	global $post;
	
	if ( is_page() ) {
	
		if ( !isset($args['startdepth']) ) {
			$args['startdepth'] = 0;
		}
		
		$result = array();
		$result = list_pages_at_depth_parent( $post->ID, $result );
		
		if ( $args['startdepth'] < count($result) ) {
			$args['child_of'] = $result[$args['startdepth']];
			wp_list_pages( $args );
		}
		
	}
}



function list_pages_at_depth_parent( $page_id, $result ) {
	
	$page = get_page($page_id);
	
	array_unshift($result, $page->ID);
	array_unshift($result, $page->post_parent);

	if ( $page->post_parent == 0 ) {
		return $result;
	} else {
		return list_pages_at_depth_parent($page->post_parent, $result);
	}

}



?>