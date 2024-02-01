<?php function mytheme_enqueue_style() {
   wp_register_style('header_css', get_template_directory_uri() . '/assets/css/header.css', 'print' );
   wp_enqueue_style('header_css');
   wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
    
   wp_enqueue_style( 'myFirstFont', get_template_directory_uri() . '/dtnews-webfont.ttf', array(), wp_get_theme()->get( 'Version' ) );
    
   wp_enqueue_style( 'list-box', get_template_directory_uri() . '/assets/css/listbox.css', array(), wp_get_theme()->get( 'Version' ) );
    
   wp_enqueue_style( 'news-box', get_template_directory_uri() . '/assets/css/newsbox.css', array(), wp_get_theme()->get( 'Version' ) );
    
   wp_enqueue_style( 'single-css', get_template_directory_uri() . '/assets/css/single.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' ); ?>
<?php function ti_custom_javascript() {
wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(),
    '1.0.0',
    array(
        'strategy'  => 'defer',
    ));
wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/1d1404088e.js');

}
add_action('wp_enqueue_scripts', 'ti_custom_javascript'); ?>
<?php

    add_theme_support( 'menus' );

    add_action( 'init', 'register_my_menus' );

    function register_my_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __( 'Primary Menu' ),
                'secondary-menu' => __( 'Secondary Menu' )
            )
        );
    } ?>
<?php function remove_wp_nav_menu_ul($menu){
   return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_wp_nav_menu_ul' );?>
<?php add_theme_support( 'post-thumbnails' ); 
 add_theme_support( 'responsive-embeds' ); 
 add_theme_support( 'editor-styles' ); 
 add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) ); 
 add_theme_support( 'automatic-feed-links' ); 
    add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}
 add_theme_support( 'title-tag' ); ?>
<?php 
function wpse_6533_map_unrestricted_upload_filter($caps, $cap) {
  if ($cap == 'unfiltered_upload') {
    $caps = array();
    $caps[] = $cap;
  }

  return $caps;
}

add_filter('map_meta_cap', 'wpse_6533_map_unrestricted_upload_filter', 0, 2); ?>