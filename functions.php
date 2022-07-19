<?php 
    add_theme_support('post-thumbnails');

    // permet de desactiver la modification a partir du back-office
    define( 'DISALLOW_FILE_EDIT', true );

    add_filter('login-errors', function(){ return 'error';});
    
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
    
    
    function carbon_widgets_init() {
        register_sidebar(array(
            'name'          =>__( 'Blog_Sidebar' , 'carbon' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets for your blog here.', 'carbon' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title h5">',
            'after_title'   => '</h2>',
        ) );
        
    }
    add_action( 'widgets_init', 'carbon_widgets_init' );
   
    
    
    
    
    
    ?>
  