<?php

function load_stylesheets (){
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

    wp_register_style('style2', get_template_directory_uri() . '/details.css');
    wp_enqueue_style('style2');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');



function addjs () {
    wp_register_script ('js', get_template_directory_uri() . '/main.js');
    wp_enqueue_script ('js');
}

add_action('wp_enqueue_scripts', 'addjs');