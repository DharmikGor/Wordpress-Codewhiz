<?php
    
/* Register Css and Scripts */

    function Register_style(){
        wp_enqueue_style('main', get_template_directory_uri() .'/style.css');
        wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
        wp_enqueue_style('owl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css");
        wp_enqueue_style('custom', get_template_directory_uri() .'/assets/css/custom.css');



        wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0", true);
        wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", array(), "5.2.0", true);
        wp_enqueue_script('owl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), "2.3.4", true);
        wp_enqueue_script('waypoint', get_template_directory_uri() .'/assets/js/waypoints.min.js', array(), "1.0", true);
        wp_enqueue_script('counter', get_template_directory_uri() .'/assets/js/jquery.counterup.min.js', array(), "1.0", true);
        wp_enqueue_script('custom', get_template_directory_uri() .'/assets/js/custom.js', array(), "1.0", true);
        wp_localize_script( 'custom', 'ajax_object',
            array( 
                'ajaxurl' => admin_url( 'admin-ajax.php' )
            )
        );
    }
    add_action('wp_enqueue_scripts','Register_style');



/* Adding Theme Support and Requires Files  */


    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );


    require 'includes/template-functions.php';
    require 'includes/shortcode.php';
    // require 'includes/cpt.php';

?>