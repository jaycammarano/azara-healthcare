<?php

function azara_register_styles(){
    wp_enqueue_style( 'azara_styles', get_template_directory_uri() . "/style.css", array(), '1.0', 'all' );
};

add_action( 'wp_enqueue_scripts', 'azara_register_styles');
?>