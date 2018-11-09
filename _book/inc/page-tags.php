<?php

// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

function add_taxonomies_to_pages() {
 	register_taxonomy_for_object_type( 'post_tag', 'page' );
 }
 // tag hooks
add_action( 'init', 'add_taxonomies_to_pages' );
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');