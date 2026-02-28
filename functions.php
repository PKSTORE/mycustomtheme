<?php
function mycustomtheme_enqueue_styles() {
    wp_enqueue_style(
        'mycustomtheme-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_styles');