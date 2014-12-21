<?php

function apperclass_theme_scripts() {

    // Styles
    wp_enqueue_style( 'apperclass-style', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.0', 'all' );

    // Scripts
    wp_enqueue_script( 'apperclass-script', get_template_directory_uri() . '/assets/js/app.js', array('infinite-scroll', 'jquery', 'isotope'), '1.0.0' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js', array(), '1.0.0' );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope/dist/isotope.pkgd.min.js', array('jquery'), '1.0.0' );
    wp_enqueue_script( 'infinite-scroll', get_template_directory_uri() . '/assets/vendor/infinite-scroll/jquery.infinitescroll.min.js', array('jquery'), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'apperclass_theme_scripts' );