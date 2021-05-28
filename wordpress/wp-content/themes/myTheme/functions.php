<?php
function load_css()
{

        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
        wp_enqueue_style('bootstrap');

        wp_register_style('main', get_template_directory_uri() . '/_src/style.css', array(), false, 'all' );
        wp_enqueue_style('main');
    
}
add_action('wp_enqueue_scripts','load_css');

// Load Javascript
function load_js()
{    
        wp_enqueue_script('jquery');

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
        wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');
//removing gutenburg
  // for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//for active css
function style_log(){
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri().'/_src/css/style.css',array(),false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','style_log');

// This will activate the ACF in my Dashbord
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

//display menu in WP dashboard
add_theme_support('menus');

//set the menu
function register_theme_menus() {
  register_nav_menus( 
    array(
      'menu-header-1' => __( 'Header 1', 'theme'),
      'menu-footer-1' => __( 'Footer 1', 'theme' )
    )
  );
};
add_action( 'init', 'register_theme_menus' );
//img size
add_image_size('custom_img', 1920, 1080, true);
add_image_size('custom_small',700, 700, true);
add_image_size('custom_thumbnail', 60, 60, true);
