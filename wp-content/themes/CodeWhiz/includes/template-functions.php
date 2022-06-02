<?php 

function pre_print_pre($data, $exit = false){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if($exit){
        exit;
    }
}

/**Load More Car Ajax */

    add_action('wp_ajax_nopriv_load_more_cars', 'load_more_cars'); 
    add_action('wp_ajax_load_more_cars', 'load_more_cars');
    function load_more_cars(){

    $offset = (isset($_POST['offset'])) ? $_POST['offset'] : 1;
    $post_per_page = (isset($_POST['post_per_page'])) ? $_POST['post_per_page'] : 2;

    $carsQuery = new WP_Query(
        array(
            'post_type' => 'car',
            'posts_per_page' => $post_per_page,
            'paged' => $offset, 
            'orderby'   => 'date',
            'order'     => 'ASC',

        )
    ); 

    $html = '';

    $loadMoreButton = true;
    if($carsQuery->max_num_pages == 0){
        $loadMoreButton = false;
        $html .= "No More Cars Found.";
    }

    if($carsQuery -> have_posts()): 
        while ($carsQuery->have_posts()) : $carsQuery->the_post(); 
        $html .= '<div class="col-md-6">
                    <div class="card-block blog-box">
                        <div class="row card-border">
                            <div class="col-lg-12">
                                <div class="card-image">
                                    <a href="'.get_the_permalink().'"><img src="'.get_field('image')['url'].'" alt="" srcset=""></a>
                                </div>
                                <h4 class="card-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>
                                <div class="card-description">'.get_field('content').'</div>
                            </div>
                            <div class="row author-meta">
                                <div class="col-sm-2">
                                    '. get_avatar( get_the_author_meta( 'ID' ), $size = '60').'
                                </div>
                                <div class="col-sm-9">
                                    <a href="'.get_the_permalink().'">'.get_the_author().'</a><br>
                                    '.get_the_date( 'F j, Y' ).'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        endwhile; 
        wp_reset_postdata(); 
    endif; 
    echo json_encode(array('success' => true, 'loadMoreButton' => $loadMoreButton, 'result' => $html));
    die();
    }

/* Add SVG upload support */
    function add_svg_to_upload_mimes($uploadMimes)
    {
        $uploadMimes['svg']  = 'image/svg+xml';
        $uploadMimes['svgz'] = 'image/svg+xml';

        return $uploadMimes;
    }
    add_filter('upload_mimes', 'add_svg_to_upload_mimes');

/* Register Sidebar Widget  */

    add_action( 'widgets_init', 'my_register_sidebars' );
    function my_register_sidebars() {
        /* Register the 'primary' sidebar. */
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => __( 'Primary Sidebar' ),
                'description'   => __( 'A short description of the sidebar.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        /* Repeat register_sidebar() code for additional sidebars. */
    }

    

/* Add Image Size */
   
    add_image_size( '400x300', 400, 300, false ); 
   


/* Add Option Page */

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(
            array(
                'page_title' => 'Theme Settings',
                'menu_title' => 'Theme Settings',
                'menu_slug' => 'codewhiz-settings',
                'capability' => 'edit_posts',
                'redirect' => true,
            )
        );
        acf_add_options_sub_page(
            array(
                'page_title' 	=> 'Header Setting',
                'menu_title'	=> 'Header Setting',
                'menu_slug' => 'header-settings',
                'parent_slug'	=> 'codewhiz-settings',
            )
        );
        acf_add_options_sub_page(
            array(
                'page_title' 	=> 'Footer Setting',
                'menu_title'	=> 'Footer Setting',
                'menu_slug' => 'footer-settings',
                'parent_slug'	=> 'codewhiz-settings',
            )
        );
        acf_add_options_sub_page(
            array(
                'page_title' 	=> '404 Page Setting',
                'menu_title'	=> '404 Page Setting',
                'menu_slug' => '404-error-settings',
                'parent_slug'	=> 'codewhiz-settings',
            )
        );
    }


/* Hide Content Editor */

    add_action( 'init', 'hide_editor' );  
    function hide_editor() {
        //remove_post_type_support( 'post', 'editor' );
        remove_post_type_support( 'page', 'editor' );
        //remove_post_type_support( 'car', 'editor' );
    };

    function my_excerpt_length($length){
        return 80;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
    
?>