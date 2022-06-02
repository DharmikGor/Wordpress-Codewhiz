<?php

/* Create a Custom Post Type */
    function custom_post_type() {

        $labels = array(
            'name'                  => _x( 'Car', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Cars', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Car', 'text_domain' ),
            'name_admin_bar'        => __( 'CARS', 'text_domain' ),
            'archives'              => __( 'Cars Archives', 'text_domain' ),
            'attributes'            => __( 'Cars Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Car:', 'text_domain' ),
            'all_items'             => __( 'All Cars', 'text_domain' ),
            'add_new_item'          => __( 'Add New Car', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Car', 'text_domain' ),
            'edit_item'             => __( 'Edit Car', 'text_domain' ),
            'update_item'           => __( 'Update Car', 'text_domain' ),
            'view_item'             => __( 'View Car', 'text_domain' ),
            'view_items'            => __( 'View Car', 'text_domain' ),
            'search_items'          => __( 'Search Car', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into Car', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Cars list', 'text_domain' ),
            'items_list_navigation' => __( 'Cars list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter Cars list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Cars', 'text_domain' ),
            'description'           => __( 'Automobile Industry', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
            'taxonomies'            => array( 'Brand' ),
            'hierarchical'          => true,
            'public'                => true,
            'menu_position'         => 25,
            'menu_icon'             => 'dashicons-car',
            'has_archive'           => true,
        );
        register_post_type( 'car', $args );

    }
    add_action( 'init', 'custom_post_type', 0 );


/* Register Custom Taxonomy */
    function custom_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Brands', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Brand', 'text_domain' ),
            'all_items'                  => __( 'All Brands', 'text_domain' ),
            'parent_item'                => __( 'Parent Brand', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Brand:', 'text_domain' ),
            'new_item_name'              => __( 'New Brand Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
            'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
            'update_item'                => __( 'Update Brand', 'text_domain' ),
            'view_item'                  => __( 'View Brand', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Brand with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or remove Brand', 'text_domain' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
            'popular_items'              => __( 'Popular Brand', 'text_domain' ),
            'search_items'               => __( 'Search Brand', 'text_domain' ),
            'not_found'                  => __( 'Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Brand', 'text_domain' ),
            'items_list'                 => __( 'Brand list', 'text_domain' ),
            'items_list_navigation'      => __( 'Brand list navigation', 'text_domain' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
        );
        register_taxonomy( 'Brand', array( 'car' ), $args );

    }
    add_action( 'init', 'custom_taxonomy', 0 );
