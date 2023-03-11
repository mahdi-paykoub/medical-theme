<?php
//add menu
function add_top_menu()
{
    register_nav_menus(array(
        'to-header-menu' => 'منو برای تاپ هدر ',
    ));
    register_nav_menus(array(
        'bottom-footer-right-menu' => 'منو برای راست فوتر ',
    ));
    register_nav_menus(array(
        'bottom-footer-left-menu' => 'منو برای چپ فوتر ',
    ));
}

add_action('after_setup_theme', 'add_top_menu');