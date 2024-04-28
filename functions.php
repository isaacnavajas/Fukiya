<?php

function theme_enqueue_styles() {
    // Enlace del CSS para el frontend
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    // Enlace del JavaScript para el frontend
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
 
 
function admin_style() {
    // Enlace del CSS para el administrador
    wp_enqueue_style('admin-style', get_stylesheet_directory_uri() . '/admin/admin.css', array(), wp_get_theme()->get('Version'));
    // Enlace del JavaScript para el administrador
    wp_enqueue_script('admin-script', get_stylesheet_directory_uri() . '/admin/admin-script.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('admin_enqueue_scripts', 'admin_style');


function load_pages() {
    $pagina = get_post_field('post_name', get_post());

    if ($pagina) {
        get_template_part('pages/page', $pagina);
    }
}



function crear_pagina_documentacionFukiya() {
    if (get_page_by_title('DocumentacionFukiya') === null) {
        $pagina = array(
            'post_title'    => 'DocumentacionFukiya',
            'post_name'     => 'documentacion-fukiya',
            'post_content'  => 'Este es el contenido de mi página personalizada.',
            'post_status'   => 'publish',  
            'post_author'   => 1,          
            'post_type'     => 'page'    
        );

        wp_insert_post($pagina);
    }
}
add_action('init', 'crear_pagina_documentacionFukiya');



// Incluye el archivo PHP
include_once(get_stylesheet_directory() . '/admin/functions.php');
 
?>