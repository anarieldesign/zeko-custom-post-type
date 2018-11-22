<?php
/**
 * Plugin Name: Zeko Custom Post Type Plugin
 * Description: Custom Post Type Plugin
 * Version: 1.0
 * Author: Anariel Design
 * Author URI: http://www.anarieldesign.com
 */
// Register Custom Post Type
function custom_post_type_testimonials() {
	$labels = array(
		'name'                  => esc_html_x( 'Testimonials', 'Post Type General Name', 'zeko' ),
		'singular_name'         => esc_html_x( 'Testimonial', 'Post Type Singular Name', 'zeko' ),
		'menu_name'             => esc_html__( 'Testimonials', 'zeko' ),
		'name_admin_bar'        => esc_html__( 'Testimonials', 'zeko' ),
		'archives'              => esc_html__( 'Item Archives', 'zeko' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'zeko' ),
		'all_items'             => esc_html__( 'All Items', 'zeko' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'zeko' ),
		'add_new'               => esc_html__( 'Add New', 'zeko' ),
		'new_item'              => esc_html__( 'New Item', 'zeko' ),
		'edit_item'             => esc_html__( 'Edit Item', 'zeko' ),
		'update_item'           => esc_html__( 'Update Item', 'zeko' ),
		'view_item'             => esc_html__( 'View Item', 'zeko' ),
		'search_items'          => esc_html__( 'Search Item', 'zeko' ),
		'not_found'             => esc_html__( 'Not found', 'zeko' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'zeko' ),
		'featured_image'        => esc_html__( 'Featured Image', 'zeko' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'zeko' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'zeko' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'zeko' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'zeko' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'zeko' ),
		'items_list'            => esc_html__( 'Items list', 'zeko' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'zeko' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'zeko' ),
	);
	
	$args = array(
		'label'                 => esc_html__( 'Testimonials', 'zeko' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'custom_post_type_testimonials' );
