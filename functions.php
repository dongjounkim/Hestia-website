<?php

function hestia_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','hestia_theme_support');

function hestia_menus() {
    $locations = array(
        'primary' => "Main Menu",
        'footer' => "Footer Items"
    );

    register_nav_menus($locations);
}

add_action('init','hestia_menus');


function hestia_register_styles(){
    wp_enqueue_style('hestia-theme', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'hestia_register_styles');

?>