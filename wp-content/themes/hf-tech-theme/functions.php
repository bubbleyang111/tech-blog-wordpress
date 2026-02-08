<?php
/**
 * HF Tech Theme Functions
 */

// Theme Setup
function hf_tech_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hf-tech-theme'),
    ));
}
add_action('after_setup_theme', 'hf_tech_theme_setup');

// Enqueue styles and scripts
function hf_tech_theme_scripts() {
    wp_enqueue_style('hf-tech-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'hf_tech_theme_scripts');

// Fallback menu
function hf_tech_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">MENU: Home</a></li>';
    echo '<li><a href="#">MENU: AI & ML</a></li>';
    echo '<li><a href="#">MENU: Cloud</a></li>';
    echo '<li><a href="#">MENU: DevOps</a></li>';
    echo '<li><a href="#">MENU: About</a></li>';
    echo '</ul>';
}

// Custom excerpt length
function hf_tech_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'hf_tech_excerpt_length');

// Custom excerpt more
function hf_tech_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'hf_tech_excerpt_more');

// Add custom image sizes
add_image_size('hf-tech-featured', 800, 400, true);

// Widget areas
function hf_tech_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'hf-tech-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'hf-tech-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'hf_tech_widgets_init');
?>
