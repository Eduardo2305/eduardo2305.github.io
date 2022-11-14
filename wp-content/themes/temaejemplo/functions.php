<?php

    function plz_styles(){

        wp_register_style("google-font","https://fonts.googleapis.com/css2?family=Acme&family=Nunito&display=swap",array(),false,'all');
        
        wp_register_style("base-css",get_template_directory_uri()."/css/base.css",array(),6.17,'all');
        wp_register_style("large-css",get_template_directory_uri()."/css/large.css",array(),6.08,'all');
        wp_register_style("medium-css",get_template_directory_uri()."/css/medium.css",array(),false,'all');
        wp_register_script("fa-script", 'https://kit.fontawesome.com/7264c8c889.js',array(),false,true);
        wp_register_script("lazyload-script",get_template_directory_uri()."/js/lazyload.js",array(),false, true);
        wp_register_script("windchill-script",get_template_directory_uri()."/js/windchill.js",array(),6.06, true);

        wp_enqueue_style("chamber-styles",get_template_directory_uri()."/css/normalize.css", array("base-css","medium-css","large-css"),false,'all' );

        wp_enqueue_script("script", get_template_directory_uri()."/js/main.js", array('fa-script','lazyload-script','windchill-script'),6.06, true);    
        
    }
    add_action("wp_enqueue_scripts","plz_styles");

    function plz_analitycs(){
        ?>
        <!-- <h1>PLazy Analitycs</h1> -->
        <?
    }

    add_action("wp_body_open","plz_analitycs");

    function plz_theme_supports(){
        add_theme_support('title-tag');    
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo',
        [
            'width' => 200,
            'height'=> 107,
            'flex-width' => true,
            'flex-height' => true
        ]);    
    }

    add_action('after_setup_theme','plz_theme_supports');

    function add_menus(){
        register_nav_menus(
            [
                'main-menu' => 'Main Menu',
                'mobile-menu' => 'Mobile Menu'
            ]
        );
    }

    add_action('after_setup_theme','add_menus');

    function plz_add_sidebar(){
        register_sidebar(
            [
                'name'=>'Sub-Footer',
                'id'=>'sub-footer',
                'before_widget'=>'',
                'after_widged'=>''
            ]
        );
    }

    add_action('widgets_init', 'plz_add_sidebar');

    


    /* Aqui registro la taxonomia  */

    function plz_register_taxonomy() {

        $labels = [
            'name'  => 'Categorias',
            'singular_name' => 'Categoria',
            'all_items' => 'Todas las categorias',
            'add_new_item'  => 'Agregar nueva categoria'
        ];
        
        register_taxonomy( 'categoria', 'Socio', array(
            
            'rewrite' => array( 'slug' => 'socios/categoria' ),
            'labels'  => $labels
        ) );
    }
    add_action( 'init', 'plz_register_taxonomy', 0 );


    function plz_add_custom_post_type(){

        $labels = [
            'name' => 'Socio',
            'singular_name' => 'Socio',
            'plural_name' => 'Socios',
            'all_items' => 'Todos los socios',
            'add_new'  => 'Añadir Socio'
        ];

        $args = array(
            'labels'             => $labels,
            'description'        => 'Lista de socios para el directorio. ',
            'public'             => true,
            'publicly_queryable' => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'socio' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 3,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
            'taxonomies'         => array('categoria'),
            'show_in_rest'       => true,
            'menu_icon'          => 'dashicons-groups'
        );

        register_post_type('socio',$args);
    }

    add_action('init','plz_add_custom_post_type');

   function plz_bienvenida(){

        $current_user = wp_get_current_user();

        $msg = is_user_logged_in()? "Welcome $current_user->user_nicename!" : '';
        
        echo $msg;

   }

   add_action('wlcm','plz_bienvenida');

?>