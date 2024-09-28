<?php
if (! function_exists('webwp__register_cpt')) {

	// Register Custom Post Type
	function webwp__register_cpt()
	{
		$labelsMeetup = array(
			'name'                  => _x('Meetup', 'Post Type General Name', 'webwp'),
			'singular_name'         => _x('Meetup', 'Post Type Singular Name', 'webwp'),
			'menu_name'             => __('Meetup', 'webwp'),
			'name_admin_bar'        => __('Meetup', 'webwp'),
			'archives'              => __('Meetup Archives', 'webwp'),
			'attributes'            => __('Meetup Attributes', 'webwp'),
			'parent_item_colon'     => __('Parent Meetup:', 'webwp'),
			'all_items'             => __('All Meetup', 'webwp'),
			'add_new_item'          => __('Add New Meetup', 'webwp'),
			'add_new'               => __('Add New', 'webwp'),
			'new_item'              => __('New Meetup', 'webwp'),
			'edit_item'             => __('Edit Meetup', 'webwp'),
			'update_item'           => __('Update Meetup', 'webwp'),
			'view_item'             => __('View Meetup', 'webwp'),
			'view_items'            => __('View Meetup', 'webwp'),
			'search_items'          => __('Search Meetup', 'webwp'),
			'not_found'             => __('Not found', 'webwp'),
			'not_found_in_trash'    => __('Not found in Trash', 'webwp'),
			'featured_image'        => __('Featured Image', 'webwp'),
			'set_featured_image'    => __('Set featured image', 'webwp'),
			'remove_featured_image' => __('Remove featured image', 'webwp'),
			'use_featured_image'    => __('Use as featured image', 'webwp'),
			'insert_into_item'      => __('Insert into Meetup', 'webwp'),
			'uploaded_to_this_item' => __('Uploaded to this Meetup', 'webwp'),
			'items_list'            => __('Meetup list', 'webwp'),
			'items_list_navigation' => __('Meetup list navigation', 'webwp'),
			'filter_items_list'     => __('Filter Meetup list', 'webwp'),
		);
		$argsMeetup   = array(
			'label'               => __('Meetup', 'webwp'),
			'description'         => __('Meetup Managment', 'webwp'),
			'labels'              => $labelsMeetup,
			'supports'            => array('title', 'editor', 'thumbnail'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
			'rest_base'           => 'meetup',
		);
		register_post_type('meetup', $argsMeetup);
	}
	add_action('init', 'webwp__register_cpt', 0);
}
