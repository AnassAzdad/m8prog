<?php
function appeltaart_enqueue_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'appeltaart_enqueue_styles');

// Custom Post Type: Recept
function appeltaart_register_post_type() {
  register_post_type('recept', array(
    'labels' => array(
      'name' => 'Recepten',
      'singular_name' => 'Recept'
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'recepten'),
    'supports' => array('title', 'editor', 'thumbnail')
  ));
}
add_action('init', 'appeltaart_register_post_type');
