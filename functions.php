<?php
function divi_child_enqueue_styles() {

    $parent_style = 'divi-style';
    // comment out next line on production
    $child_style_file_name = 'style.css';
    // comment out next line on development
    // $child_style_file_name = 'style.min.css';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '\/' . $child_style_file_name,
      array( $parent_style ),
      wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'divi_child_enqueue_styles');
?>
