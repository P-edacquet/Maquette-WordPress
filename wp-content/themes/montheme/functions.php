<?php

require_once('config/supports.php');
require_once('config/scripts.php');
require_once('config/widgets.php');

function theme_support(){
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');

    register_nav_menu('menu-top', 'Menu en haut de la page');
    register_nav_menu('menu-bottom', 'Menu dans le footer de la page');
}
add_action('after_setup_theme','theme_support');

function register_scripts(){
    wp_register_style('css', get_stylesheet_directory_uri().'/style.css', []);
    wp_enqueue_style('css');
}
add_action('wp_enqueue_scripts', 'register_scripts');

function theme_widget_init() {
    $sidebar1 = array(
        'name'          => 'Zone de widget du footer',
        'id'            => 'sidebar-1'
    );

    register_sidebar($sidebar1);
}
add_action('widgets_init', 'theme_widget_init');