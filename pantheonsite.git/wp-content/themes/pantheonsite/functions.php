<?php
require get_stylesheet_directory() . '/inc/init.php';
require 'inc/tao_cac_sidebar.php';
require 'inc/tao_cac_menu.php';
require 'inc/class-wp-bootstrap-navwalker.php';

add_filter('use_block_editor_for_post', '__return_false');
/*Viết các hàm widget*/

/* các flie css và các file js */
add_action('wp_enqueue_scripts', 'css_style');
function css_style(){
    /* các flie css */
    wp_register_style( 'styles-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'styles-bootstrap' );
    wp_register_style( 'styles-slick', get_template_directory_uri() . '/css/slick.min.css' );
    wp_enqueue_style( 'styles-slick' );
    wp_register_style( 'styles-animate', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style( 'styles-animate' );
    wp_register_style( 'styles-main', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'styles-main' );

    /* các file js */
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js',['jquery-js'], false, true );
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js',['jquery-js'], false, true );
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.js',['jquery-js'], false, true );
    wp_enqueue_script('script-main-js', get_template_directory_uri() . '/js/main.js',['jquery-js'], false, true );
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.min.js',['jquery-js'], false, true );
    //wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/jquery-latest.min.js',['jquery-js'], false, true );
}



/* Image Logo Upload */


function customizer_logo( $wp_customize_logo ) {
 
        // Tạo section
    $wp_customize_logo->add_section (
        'section_logo',
        array(
            'title' => 'Ảnh Logo',
            
            'priority' => 25
        )
    );
 
        /* Image Upload */
        $wp_customize_logo->add_setting( 'img-upload' );
 
        $wp_customize_logo->add_control(
            new WP_Customize_Image_Control(
                $wp_customize_logo,
                'img-upload',
                array(
                    'label' => 'Ảnh nền',
                    'section' => 'section_logo',
                    'settings' => 'img-upload'
                )
            )
        );




 
}
add_action( 'customize_register', 'customizer_logo' );


 function customizer_logo_header_top( $wp_customize_logo_header_top ) {


      $wp_customize_logo_header_top->add_section (
        'section_logo_header_top',
        array(
            'title' => 'Ảnh logo top header',
            'description' => 'Các tùy chọn cho khu vực A',
            'priority' => 25
        )
    );
 

 
        $wp_customize_logo_header_top->add_setting( 'logo_header_top' );
  


                $wp_customize_logo_header_top->add_control(
            new WP_Customize_Image_Control(
                $wp_customize_logo_header_top,
                'logo_header_top',
                array(
                    'label' => 'Ảnh nền',
                    'section' => 'section_logo_header_top',
                    'settings' => 'logo_header_top'
                )
            )
        );



 
}
add_action( 'customize_register', 'customizer_logo_header_top' );