<?php
add_theme_support('post-thumbnails' );//active option article

define('DISALLOW_FILE_EDIT', true); //empeche le client de modifier

add_filter('login_error', function(){ return 'error';});

// function mythemename_script(){
//     wp_enqueue_style('main-style',get_theme_file_uri('style.css'));
// }

// add_action('wp_enqueue_scripts', 'mythemename_script');

// add_shortcode('wpbsearch', 'get_search_form');

// function theme_js(){
//     wp_enqueue_script( 'js_script', get_theme_file_uri('./inc/js/main.js'));
// }
// add_action('wp_enqueue_scripts', "theme_js");

function myThemeName_script() {
    // Déclarer le JS
    wp_enqueue_script( 
        'main_style', 
        get_template_directory_uri() . '/inc/js/main.js', 
        array(), 
        '1.0', 
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'main_style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'myThemeName_script' );


add_action('init','register_student_post_types');
function register_student_post_types(){
    $labels = array(
        'all_items' => 'Tous les apprenants',
        'view_items' => 'Tous les apprenants',
        'singular_name' => 'Apprenants',
        'add_news' => 'Ajouter un apprenant',
        'edit_item' => 'Modifier un apprenants',
        'menu_name' => 'Apprenants',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show in rest' => true,
        'has_archive' => array('title','editor','thumbnail'),
        'taxonomies' => array('post_tag'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-id',
    );

    register_post_type('apprenant', $args);
}

