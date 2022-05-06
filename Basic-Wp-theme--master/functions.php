<?php
/*
// register nav walker class_alias
require_once('wp-bootstrap-navwalker.php');

//Theme support
function wpb_theme_setup(){
// Nav Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ));

}

add_action('after_setup_theme', ' wpb_theme_setup');

function script_files(){
    wp_enqueue_script('/js/bootstrap.js');
}
    
add_action_('after_setup_theme','script_files');

*/

//excerpt function

function wpb_theme_setup(){
add_theme_support('post-thumbnails');

//post formats
add_theme_support('post-formats',  array('aside', 'gallery'));

}
add_action('after_setup_theme','wpb_theme_setup');




function set_excerpt_length(){
    return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');




//widget location
function wpb_init_widgets($id){
register_sidebar(array(
    'name' => 'sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

register_sidebar(array(
    'name' => 'box1',
    'id' => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'box2',
    'id' => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'box3',
    'id' => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
}

add_action('widgets_init', 'wpb_init_widgets');

//customize file

require get_template_directory().'/inc/customizer.php';