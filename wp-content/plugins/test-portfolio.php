<?php
/*
    Plugin Name: test-portfolio
    Description: A nice little test plugin that doesn't really do anything as of yet.
    Version: 0.0.1
    Author: Feedback Fox
    License: GPL2
    License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

if( !defined( 'ABSPATH' ) ) exit;





function test_register_post_type() {

	$labels = array( 'name' => _x( 'Portfolio', 'Post type general name', 'test-portfolio' ),
'singular_name' => _x( 'Portfolio Item', 'Post type singular name', 'test-portfolio' ), 'menu_name' => _x( 'Portfolio Items', 'Admin Menu text', 'test-portfolio' ), 
		'name_admin_bar' => _x( 'Portfolio Items', 'Add New on Toolbar', 'test-portfolio' ),
	);
	
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'             => 'dashicons-screenoptions',
    );

    register_post_type('test_portfolio', $args);
}
add_action( 'init', 'test_register_post_type' );

function portfolio_taxonomy() {
$labels = array(
'name' => _x( 'Item Types', 'taxonomy general name', 'test-portfolio' ),
'singular_name' => _x( 'Item Type', 'taxonomy singular name', 'test-portfolio' ),
);
 
$args = array(
'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'item-type' ),
);
	register_taxonomy( 'portfolio-type', 'test-portfolio', $args );
  }
  add_action( 'init', 'portfolio_taxonomy' );





































































?>