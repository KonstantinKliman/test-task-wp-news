<?php
add_theme_support('post-thumbnails');

function theme_enqueue_styles() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function get_page_link_by_title($title) {
    $page = get_page_by_path($title);
    return $page ? get_permalink($page->ID) : '#';
}
?>