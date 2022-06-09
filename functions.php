<?php
  function my_style_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css' );
  }
  add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');
	
  add_theme_support( 'post-thumbnails' );

  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 200, 200, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 400, 9999 ); // 300 pixels wide (and unlimited height)
 }