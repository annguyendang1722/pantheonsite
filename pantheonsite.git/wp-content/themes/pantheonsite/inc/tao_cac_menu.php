<?php
// create menu
if (!function_exists('register_menu_menu')) {
    function register_menu_menu()
    {
        register_nav_menus(
            array(
                'menu-header-account' => __('Menu Header Account'),
                'menu-header-main' => __('Menu Header Main'),
                
                'menu-footer-brands' => __('Menu Footer Brands'),
                'menu-footer-customer-service' => __('Menu Footer Customer Service'),
                'menu-footer-about' => __('Menu Footer About'),

                'menu-footer-boutiques' => __('Menu Footer Boutiques'),

                'menu-footer-careers' => __('Menu Footer Careers'),


            )
        );
    }
    add_action('init', 'register_menu_menu');
}