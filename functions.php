<?php
function my_react_theme_enqueue_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/my-react-app/assets/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/my-react-app/assets/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_react_theme_enqueue_scripts');

function enqueue_tailwind_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_styles');
