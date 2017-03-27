<?php

add_theme_support( 'post-thumbnails' );

add_image_size( 'banner-image', 2000, 820, true );

add_image_size( 'pastor-image', 600, 550, true );

add_image_size( 'icon', 400, 400, true );

add_theme_support( 'menus' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus');

function ws_theme_styles(){

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
   wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
  wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro|Roboto+Slab');
  wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");

}
add_action( 'wp_enqueue_scripts', 'ws_theme_styles' );

function ws_theme_js(){

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
  wp_enqueue_script( 'viewportChecker', get_template_directory_uri() . '/js/viewportchecker.js', array('jquery'), '', true );

}
add_action('wp_enqueue_scripts', 'ws_theme_js' );

?>