<?php
declare(strict_types=1);

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Register organisation custom post type.
require get_template_directory().'/post-types/organisation.php';



// Add theme supported features.
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});
//// Enqueue styles and scripts the right way.
//add_action('wp_enqueue_scripts', function () {
//    wp_deregister_script('jquery');
//    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
//    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', '', '', true);
//    wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '', true);
//    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '', '', true);
//    wp_enqueue_script('jquery');
//    wp_enqueue_script('tether');
//    wp_enqueue_script('bootstrap');
//});
