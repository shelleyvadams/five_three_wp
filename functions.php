<?php
/**
 * Five Three function defintions, customization options, actions, etc.
 *
 * @since Five Three 0.0.1
*/



/**
 * Add support for theme features
 */
function add_feature_supports() {
	add_theme_support( 'html5', array( 'search-form' ) );
}

add_action( 'after_setup_theme', 'add_feature_supports' );



/**
 * Setup site navigation.
 */
function add_site_menu() {
	register_nav_menu( 'primary', __( 'Primary Navigation', 'five-three' ) );
}

add_action( 'after_setup_theme', 'add_site_menu' );



/**
 * Setup widget areas.
 */
function add_widget_areas() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'five-three' ),
		'id'            => 'sidebar',
		'description'   => __( 'This sidebar is the primary location for widgets.', 'five-three' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer', 'five-three' ),
		'id'            => 'footer',
		'description'   => __( 'The site footer is a perfect location for a text-widget containing a copyright statement.', 'five-three' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );
}

add_action( 'widgets_init', 'add_widget_areas' );