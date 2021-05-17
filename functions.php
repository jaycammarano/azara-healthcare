<?php


function azara_theme_support(){
    add_theme_support( 'title-tag' );
}
add_action( ('after_theme_setup'), 'azara_theme_support' );

function azara_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'azara_styles', get_template_directory_uri() . "/style.css", array(), $version, 'all' );
};

add_action( 'wp_enqueue_scripts', 'azara_register_styles');

function azara_register_scripts(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'azara_main_scripts', get_template_directory_uri()."/assets/js/main.js", array(), $version, false );
};

add_action( 'wp_enqueue_scripts', 'azara_register_scripts');
?>

