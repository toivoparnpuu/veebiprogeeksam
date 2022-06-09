<?php
  function my_style_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css' );
  }
  add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');


  function register_my_links_menu() {
    register_nav_menu('links-menu',__( 'Links Menu' ));
  }
  add_action( 'init', 'register_my_links_menu' );

  function register_my_extra_menu() {
    register_nav_menu('extra-menu',__( 'Extra Menu' ));
  }
  add_action( 'init', 'register_my_extra_menu' );

