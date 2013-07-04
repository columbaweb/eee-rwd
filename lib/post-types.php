<?php 

/* SERVICES POST TYPE */
function post_type_services() {
register_post_type(
   'services', 
   array( 'public' => true,
   'publicly_queryable' => true,
   'exclude_from_search' => false,
   'has_archive' => true, 
   'can_export' => true,
   'hierarchical' => false,
   'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
   'labels'=>array(
      'name' => _x('Services', 'post type general name'),
      'singular_name' => _x('Service', 'post type singular name'),
      'add_new' => _x('Add New', 'Service'),
      'add_new_item' => __('Add New Service'),
      'edit_item' => __('Edit Service'),
      'new_item' => __('New Service'),
      'view_item' => __('View Service'),
      'search_items' => __('Search Testimonials'),
      'not_found' =>  __('No Services found'),
      'not_found_in_trash' => __('No Services found in Trash'), 
      'menu_name' => _x( 'Services', 'services' ),
      'parent_item_colon' => ''
   ),							 
   'show_ui' => true,
   'show_in_menu' => true,               
   'show_in_nav_menus' => true,
   'menu_position'=>5,
   'query_var' => true,
   'rewrite' => true,
   'rewrite' => array( 'slug' => 'services', 'with_front' => FALSE,),
   'capability_type' => 'post',
   'supports' => array(
      'title',
      'thumbnail',
      'custom-fields',
      'excerpt',
      'comments',
      'author',
      'editor'
   )
   ) 
   );
} 
add_action('init', 'post_type_services');


/* TESTIMONIALS POST TYPE */
function post_type_testimonials() {
register_post_type(
   'testimonial', 
   array( 'public' => true,
   'publicly_queryable' => true,
   'exclude_from_search' => false,
   'has_archive' => true, 
   'can_export' => true,
   'hierarchical' => false,
   'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonial.png',
   'labels'=>array(
      'name' => _x('Testimonials', 'post type general name'),
      'singular_name' => _x('Testimonial', 'post type singular name'),
      'add_new' => _x('Add New', 'Testimonial'),
      'add_new_item' => __('Add New Testimonial'),
      'edit_item' => __('Edit Testimonials'),
      'new_item' => __('New Testimonial'),
      'view_item' => __('View Testimonial'),
      'search_items' => __('Search Testimonials'),
      'not_found' =>  __('No Testimonials found'),
      'not_found_in_trash' => __('No Testimonials found in Trash'), 
      'menu_name' => _x( 'Testimonials', 'testimonial' ),
      'parent_item_colon' => ''
   ),							 
   'show_ui' => true,
   'show_in_menu' => true,               
   'show_in_nav_menus' => true,
   'menu_position'=>5,
   'query_var' => true,
   'rewrite' => true,
   'rewrite' => array( 'slug' => 'testimonials', 'with_front' => FALSE,),
   'capability_type' => 'post',
   'register_meta_box_cb' => 'add_testimonials_metabox',
   'supports' => array(
      'title',
      'thumbnail',
      'custom-fields',
      'excerpt',
      'comments',
      'author',
      'editor'
   )
   ) 
   );
} 
add_action('init', 'post_type_testimonials');

?>