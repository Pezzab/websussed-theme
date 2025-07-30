<?php

function websussed_child_enqueue_styles() {
$parent_style = 'parent-style';
   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
}
add_action( 'wp_enqueue_scripts', 'websussed_child_enqueue_styles' ); 

function websussed_child_unhook_parent_style() {

  wp_dequeue_style( 'websussed-core' );
  wp_deregister_style( 'websussed-core' );

}
add_action( 'wp_enqueue_scripts', 'websussed_child_unhook_parent_style', 20 );


function webussed_child_add_fonts() {

    // font-heading

    wp_register_style('bebas-neue-async-defer', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('bebas-neue-async-defer'); // "Bebas Neue"

    // font-sans

    wp_register_style('lexend-deca-async-defer', 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap'); // "Lexend Deca"
    wp_enqueue_style('lexend-deca-async-defer');

    wp_register_style('roboto-async-defer', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap'); // "Roboto"
    wp_enqueue_style('roboto-async-defer');

    wp_register_style('roboto-condensed-async-defer', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap'); // "Roboto Condensed"
    wp_enqueue_style('roboto-condensed-async-defer');

    wp_register_style('birthstone-async-defer', 'https://fonts.googleapis.com/css2?family=Birthstone&display=swap'); // "Roboto Condensed"
    wp_enqueue_style('birthstone-async-defer'); // Birthstone

    wp_register_style('quicksand-async-defer', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap'); // "Quicksand"
    wp_enqueue_style('quicksand-async-defer');

    wp_register_style('bricolage-grotesque-async-defer', 'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap'); // "Bricolage+Grotesque"
    wp_enqueue_style('bricolage-grotesque-async-defer');

    wp_register_style('pontano-sans-async-defer', 'https://fonts.googleapis.com/css2?family=Pontano+Sans:wght@300..700&display=swap'); // "Pontano Sans"
    wp_enqueue_style('pontano-sans-async-defer');

    wp_register_style('hind-async-defer', 'https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Hind:wght@300;400;500;600;700&display=swap'); // "Hind"
    wp_enqueue_style('hind-async-defer');

    wp_register_style('mada-async-defer', 'https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap'); // "Mada"
    wp_enqueue_style('mada-async-defer');


}

add_action( 'wp_enqueue_scripts', 'webussed_child_add_fonts' );


// use priority 11 to hook into after_setup_theme AFTER the parent theme
 add_action('after_setup_theme', 'reset_parent_setup', 11);

function reset_parent_setup() 
{
    // Override the image sizes
    add_image_size( 'wpex-entry', 800, 9999, false );
    add_image_size( 'wpex-post', 800, 9999, false );

    // Set content width variable
    // global $content_width;
    // $content_width = 850;
}
