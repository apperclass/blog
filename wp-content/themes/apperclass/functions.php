<?php

/**
 * Enqueue Styles and Scripts
 */
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


/**
 * Filter Excerpt Length
 */
function custom_excerpt_length( $length ) {
    return 16;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Filter Excerpt Length
 */
function get_excerpt_by_post_content($content){
    $excerpt_length = 16; //Sets excerpt length by word count
    $the_excerpt = strip_tags(strip_shortcodes($content)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $excerpt_length + 1);

    if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '[…]');
        $the_excerpt = implode(' ', $words);
    endif;

    return $the_excerpt;
}

/**
 * @param $get_avatar
 * @return mixed
 */
function get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return $matches[1];
}