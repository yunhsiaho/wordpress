<?php
//removing gutenburg
  // for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//for active css
function style_log(){
    wp_register_style('style', get_template_directory_uri().'/style.css',array(),false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','style_log');

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