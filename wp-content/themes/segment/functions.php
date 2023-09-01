<?php

function load_stylesheets()
{   

    wp_enqueue_style(
        'style123',
        get_template_directory_uri() . '/style.css',
        [],
        false,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Add js files

function loadjs()
{
   
    wp_enqueue_script(
        'customjs',
        get_template_directory_uri() . '/js/script.js',
        [],
        '1.0001',
        true
    );
   
    wp_enqueue_script(
        'customjs123',
        get_template_directory_uri() . '/js/build-app.js',
        [],
        '1.0001',
        true
    );
}
add_action('wp_enqueue_scripts', 'loadjs');

?>