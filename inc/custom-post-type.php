<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Register Testimonial Post Type
function startup_agency_testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'startup-agency' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'startup-agency' ),
		'menu_name'             => __( 'Testimonials', 'startup-agency' ),
		'name_admin_bar'        => __( 'Testimonial', 'startup-agency' ),
		'archives'              => __( 'Item Archives', 'startup-agency' ),
		'attributes'            => __( 'Item Attributes', 'startup-agency' ),
		'parent_item_colon'     => __( 'Parent Item:', 'startup-agency' ),
		'all_items'             => __( 'All Items', 'startup-agency' ),
		'add_new_item'          => __( 'Add New Item', 'startup-agency' ),
		'add_new'               => __( 'Add New', 'startup-agency' ),
		'new_item'              => __( 'New Item', 'startup-agency' ),
		'edit_item'             => __( 'Edit Item', 'startup-agency' ),
		'update_item'           => __( 'Update Item', 'startup-agency' ),
		'view_item'             => __( 'View Item', 'startup-agency' ),
		'view_items'            => __( 'View Items', 'startup-agency' ),
		'search_items'          => __( 'Search Item', 'startup-agency' ),
		'not_found'             => __( 'Not found', 'startup-agency' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'startup-agency' ),
		'featured_image'        => __( 'Featured Image', 'startup-agency' ),
		'set_featured_image'    => __( 'Set featured image', 'startup-agency' ),
		'remove_featured_image' => __( 'Remove featured image', 'startup-agency' ),
		'use_featured_image'    => __( 'Use as featured image', 'startup-agency' ),
		'insert_into_item'      => __( 'Insert into item', 'startup-agency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'startup-agency' ),
		'items_list'            => __( 'Items list', 'startup-agency' ),
		'items_list_navigation' => __( 'Items list navigation', 'startup-agency' ),
		'filter_items_list'     => __( 'Filter items list', 'startup-agency' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'startup-agency' ),
		'description'           => __( 'Testimonial information page.', 'startup-agency' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'startup_agency_testimonial_post_type', 0 );

// Register Team Post Type
function startup_agency_team_post_type() {

	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'startup-agency' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'startup-agency' ),
		'menu_name'             => __( 'Team', 'startup-agency' ),
		'name_admin_bar'        => __( 'Team', 'startup-agency' ),
		'archives'              => __( 'Item Archives', 'startup-agency' ),
		'attributes'            => __( 'Item Attributes', 'startup-agency' ),
		'parent_item_colon'     => __( 'Parent Item:', 'startup-agency' ),
		'all_items'             => __( 'All Items', 'startup-agency' ),
		'add_new_item'          => __( 'Add New Item', 'startup-agency' ),
		'add_new'               => __( 'Add New', 'startup-agency' ),
		'new_item'              => __( 'New Item', 'startup-agency' ),
		'edit_item'             => __( 'Edit Item', 'startup-agency' ),
		'update_item'           => __( 'Update Item', 'startup-agency' ),
		'view_item'             => __( 'View Item', 'startup-agency' ),
		'view_items'            => __( 'View Items', 'startup-agency' ),
		'search_items'          => __( 'Search Item', 'startup-agency' ),
		'not_found'             => __( 'Not found', 'startup-agency' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'startup-agency' ),
		'featured_image'        => __( 'Featured Image', 'startup-agency' ),
		'set_featured_image'    => __( 'Set featured image', 'startup-agency' ),
		'remove_featured_image' => __( 'Remove featured image', 'startup-agency' ),
		'use_featured_image'    => __( 'Use as featured image', 'startup-agency' ),
		'insert_into_item'      => __( 'Insert into item', 'startup-agency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'startup-agency' ),
		'items_list'            => __( 'Items list', 'startup-agency' ),
		'items_list_navigation' => __( 'Items list navigation', 'startup-agency' ),
		'filter_items_list'     => __( 'Filter items list', 'startup-agency' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'startup-agency' ),
		'description'           => __( 'Team information page.', 'startup-agency' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'startup_agency_team_post_type', 0 );

// Register Portfolio Post Type
function startup_agency_portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'startup-agency' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'startup-agency' ),
		'menu_name'             => __( 'Portfolio', 'startup-agency' ),
		'name_admin_bar'        => __( 'Portfolio', 'startup-agency' ),
		'archives'              => __( 'Item Archives', 'startup-agency' ),
		'attributes'            => __( 'Item Attributes', 'startup-agency' ),
		'parent_item_colon'     => __( 'Parent Item:', 'startup-agency' ),
		'all_items'             => __( 'All Items', 'startup-agency' ),
		'add_new_item'          => __( 'Add New Item', 'startup-agency' ),
		'add_new'               => __( 'Add New', 'startup-agency' ),
		'new_item'              => __( 'New Item', 'startup-agency' ),
		'edit_item'             => __( 'Edit Item', 'startup-agency' ),
		'update_item'           => __( 'Update Item', 'startup-agency' ),
		'view_item'             => __( 'View Item', 'startup-agency' ),
		'view_items'            => __( 'View Items', 'startup-agency' ),
		'search_items'          => __( 'Search Item', 'startup-agency' ),
		'not_found'             => __( 'Not found', 'startup-agency' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'startup-agency' ),
		'featured_image'        => __( 'Featured Image', 'startup-agency' ),
		'set_featured_image'    => __( 'Set featured image', 'startup-agency' ),
		'remove_featured_image' => __( 'Remove featured image', 'startup-agency' ),
		'use_featured_image'    => __( 'Use as featured image', 'startup-agency' ),
		'insert_into_item'      => __( 'Insert into item', 'startup-agency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'startup-agency' ),
		'items_list'            => __( 'Items list', 'startup-agency' ),
		'items_list_navigation' => __( 'Items list navigation', 'startup-agency' ),
		'filter_items_list'     => __( 'Filter items list', 'startup-agency' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'startup-agency' ),
		'description'           => __( 'Portfolio information page.', 'startup-agency' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'startup_agency_portfolio_post_type', 0 );

if ( ! function_exists( 'startup_agency_portfolio_taxonomy' ) ) {

	// Register Custom Taxonomy
	function startup_agency_portfolio_taxonomy() {
	
		$labels = array(
			'name'                       => _x( 'Categories', 'Taxonomy General Name', 'startup-agency' ),
			'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'startup-agency' ),
			'menu_name'                  => __( 'Categories', 'startup-agency' ),
			'all_items'                  => __( 'All Categories', 'startup-agency' ),
			'parent_item'                => __( 'Parent Item', 'startup-agency' ),
			'parent_item_colon'          => __( 'Parent Item:', 'startup-agency' ),
			'new_item_name'              => __( 'New Item Name', 'startup-agency' ),
			'add_new_item'               => __( 'Add New Item', 'startup-agency' ),
			'edit_item'                  => __( 'Edit Item', 'startup-agency' ),
			'update_item'                => __( 'Update Item', 'startup-agency' ),
			'view_item'                  => __( 'View Item', 'startup-agency' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'startup-agency' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'startup-agency' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'startup-agency' ),
			'popular_items'              => __( 'Popular Items', 'startup-agency' ),
			'search_items'               => __( 'Search Items', 'startup-agency' ),
			'not_found'                  => __( 'Not Found', 'startup-agency' ),
			'no_terms'                   => __( 'No items', 'startup-agency' ),
			'items_list'                 => __( 'Items list', 'startup-agency' ),
			'items_list_navigation'      => __( 'Items list navigation', 'startup-agency' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'categories', array( 'portfolio' ), $args );
	
	}
	add_action( 'init', 'startup_agency_portfolio_taxonomy', 0 );
	
	}