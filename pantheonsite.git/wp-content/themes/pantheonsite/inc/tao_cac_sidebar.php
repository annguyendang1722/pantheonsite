<?php






function supermarket_furniture_3() {
    register_sidebar(
        array (
            'name' => __( 'SIÊU THỊ NỘI THẤT 3', 'your-theme-domain' ),
            'id' => 'supermarket-furniture-3',
            'description' => __( 'SIÊU THỊ NỘI THẤT 3', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'supermarket_furniture_3' );



function customer_support() {
    register_sidebar(
        array (
            'name' => __( 'HỖ TRỢ KHÁCH HÀNG', 'your-theme-domain' ),
            'id' => 'customer-support',
            'description' => __( 'HỖ TRỢ KHÁCH HÀNG', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'customer_support' );