<?php

// Register Custom Post Types - Brand
add_action('init', 'register_brand_init');

function register_brand_init() {
    $ctp_labels = array(
        'name'               => 'Brand',
        'singular_name'      => 'Brand',
        'menu_name'          => 'Brands',
        'add_new_item'       => 'Add Brand',
        'add_new'            => 'Add New Brand',
        'new_item'           => 'New Brand',
        'edit_item'          => 'Edit Brand',
        'update_item'        => 'Update Brand'
    );
    $ctp_args = array(
        'labels'             => $ctp_labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-groups',
        'capability_type'    => 'post',
        'publicly_queryable' => true,
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
        'menu_position'      => 5,
    );
    register_post_type('brand', $ctp_args);
}


add_action( 'init', 'create_brand_type' );
function create_brand_type() {
    register_taxonomy(
        'type-brand',
        'brand',
        array(
            'label' => "Type Brand",
            'rewrite' => array( 'slug' => 'type-brand' ),
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'parent_item'  => null,
            'parent_item_colon' => null,
        )
    );
}


add_action('restrict_manage_posts', 'brand_filter_post_type_by_taxonomy');
function brand_filter_post_type_by_taxonomy() {
    global $typenow;
    $post_type = 'brand'; // change to your post type
    $taxonomy  = 'type-brand'; // change to your taxonomy
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => __("Show All {$info_taxonomy->label}"),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => true,
        ));
    };
}
