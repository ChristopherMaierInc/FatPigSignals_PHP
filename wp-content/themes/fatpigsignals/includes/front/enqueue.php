<?php

function fps_enqueue() {
    wp_register_style( 'fps_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
    wp_register_style( 'fps_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_register_style( 'fps_style', get_template_directory_uri() . '/assets/style.css' );
    wp_register_style( 'fps_dark', get_template_directory_uri() . '/assets/css/dark.css' );
    wp_register_style( 'fps_font-icons', get_template_directory_uri() . '/assets/css/font-icons.css' );
    wp_register_style( 'fps_animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_register_style( 'fps_magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_register_style( 'fps_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_register_style( 'fps_custom', get_template_directory_uri() . '/assets/css/custom.css' );

    wp_enqueue_style( 'fps_google_fonts' );
    wp_enqueue_style( 'fps_bootstrap' );
    wp_enqueue_style( 'fps_style' );
    wp_enqueue_style( 'fps_dark' );
    wp_enqueue_style( 'fps_font-icons' );
    wp_enqueue_style( 'fps_animate' );
    wp_enqueue_style( 'fps_magnific-popup' );
    wp_enqueue_style( 'fps_responsive' );
    wp_enqueue_style( 'fps_custom' );

    wp_register_script( 'fps_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true  );
    wp_register_script( 'fps_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'fps_plugins' );
    wp_enqueue_script( 'fps_functions' );
}

 ?>
