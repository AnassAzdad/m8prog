<?php
function m8prog_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['parent-style']
    );
}
add_action( 'wp_enqueue_scripts', 'm8prog_enqueue_styles' );
