<?php 

function myportfolio_enqueue_style() {
    wp_enqueue_style("portfolio-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "myportfolio_enqueue_style");


add_theme_support( 'post-thumbnails' );

add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

?>