<?php
    
    /**
    * Remove this if you dont need more than 2 levels menu
    */
    require_once('wp_bootstrap_navwalker.php');
    
    function theme_initialization(){
        add_theme_support('post-thumbnails');
        add_theme_support( 'automatic-feed-links' );
        register_nav_menus( array(
          'primary' => __('Primary Navigation'),
          'footer-menu' => __('Footer Menu'),
          'footer-menu-right' => __('Footer Menu Right')
        ));
    }    
    add_action( 'after_setup_theme', 'theme_initialization' );

    /**
    *Enqueue all my scripts
    */
    function add_scripts_js(){
       wp_enqueue_script('jquery'); //add bootstrap
       wp_register_script('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" , array( 'jquery') );
       wp_enqueue_script('bootstrap'); //add html5 shiv
       wp_register_script('html5shim', get_template_directory_uri(). '/bootstrap/js/html5shiv.min.js');
       wp_enqueue_script('html5shim');//add my script
       wp_register_script('myscript', get_template_directory_uri(). '/bootstrap/js/script.js');
       wp_enqueue_script('myscript');
    }
    add_action( 'wp_enqueue_scripts', 'add_scripts_js'); 
    
     /*CUSTOM LOGIN PAGE*/
    function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));

      register_sidebar( array(
        'name'          => __( 'Sidebar Contact', 'iwc_perez_siragusa' ),
        'id'            => 'sidebar-contact',
        'description'   => __( 'Appears on contact page.', 'iwc_perez_siragusa' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    }
    /*Retrieves an image from image folder*/
    function iwc_images($name){
      return get_stylesheet_directory_uri() . '/bootstrap/images/' . $name;
    }

    /**
     * Change the default length of the excerpt length from 55 to 20
     * @param int $length
     * @return int
     */
    function custom_excerpt_length( $length ) {
      return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    /**
     * Change the default [...] in the excerpt
     * @param string $more
     * @return string
     */
    function new_excerpt_more( $more ) {
      return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

?>