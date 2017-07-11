<?php
add_action('wp_footer', 'script_and_style');
function script_and_style(){
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri()."/assets/css/bootstrap.min.css");
    wp_enqueue_style('fonts', get_stylesheet_directory_uri()."/assets/css/fonts.css");
    wp_enqueue_style('responsive', get_stylesheet_directory_uri()."/assets/css/responsive.css");
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri()."/assets/css/font-awesome.css");
    wp_enqueue_style('slick', get_stylesheet_directory_uri()."/assets/css/slick.css");
    wp_enqueue_style('slick-theme', get_stylesheet_directory_uri()."/assets/css/slick-theme.css");


    wp_enqueue_script('jquery', get_stylesheet_directory_uri()."/assets/js/jquery-2.1.4.min.js");
    wp_enqueue_script('custom', get_stylesheet_directory_uri()."/assets/js/custom.js");
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri()."/assets/js/bootstrap.min.js");
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri()."/assets/js/slick.min.js");

}
