<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package the-parenting-place-2018
 */


/**************************************************************/
/* Filters                                                    */
/**************************************************************/

function the_parenting_place_2018_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'the_parenting_place_2018_body_classes' );

function widget_filter($output, $type, $id, $sidebar_id){
	switch( $type ) {
		case 'categories' :
				  $output = str_replace('<ul>', '<ul class="list-group">', $output);
				  $output = str_replace('<li class="cat-item cat-item-', '<li class="list-group-item cat-item cat-item-', $output);
				  $output = str_replace('(', '<span class="badge cat-item-count"> ', $output);
				  $output = str_replace(')', ' </span>', $output);
				  break;
		case 'calendar' :
				$output = str_replace('calendar_wrap', 'calendar_wrap table-responsive', $output);
				$output = str_replace('<table id="wp-calendar', '<table class="table table-condensed" id="wp-calendar', $output);
				break;
		case 'tag_cloud' :    	
				$regex = "/(<a[^>]+?)( style='font-size:.+pt;'>)([^<]+?)(<\/a>)/"; //clean up
				$replace_with = "$1><span class='label label-primary'>$3</span>$4";
				$output = preg_replace( $regex , $replace_with , $output );
				break;
		case 'archives' :	
				  $output = str_replace('<ul>', '<ul class="list-group">', $output);
				  $output = str_replace('<li>', '<li class="list-group-item">', $output);
				$output = str_replace('(', '<span class="badge cat-item-count"> ', $output);
				   $output = str_replace(')', ' </span>', $output);
				break;
		case 'meta' :   	
				$output = str_replace('<ul>', '<ul class="list-group">', $output);
				$output = str_replace('<li>', '<li class="list-group-item">', $output);
				break;
		case 'recent-posts' :   	
				$output = str_replace('<ul>', '<ul class="list-group">', $output);
				$output = str_replace('<li>', '<li class="list-group-item">', $output);
				$output = str_replace('class="post-date"', 'class="post-date text-muted small"', $output);
				break;
		case 'recent-comments' :   	
				$output = str_replace('<ul id="recentcomments">', '<ul id="recentcomments" class="list-group">', $output);
				$output = str_replace('<li class="recentcomments">', '<li class="recentcomments list-group-item">', $output);
				 break;
		case 'pages' :   	
				$output = str_replace('<ul>', '<ul class="nav nav-stacked nav-pills">', $output);
				 break;
		case 'nav_menu' :   	
				$output = str_replace(' class="menu"', 'class="menu nav nav-stacked nav-pills"', $output);
				break;
			default:
		$output = $output; // not sure if this is needed
	}
	  return $output;
}
add_filter( 'widget_output', 'widget_filter', 10, 4);

/**************************************************************/
/* Actions                                                    */
/**************************************************************/
/*
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function the_parenting_place_2018_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'the_parenting_place_2018_pingback_header' );


