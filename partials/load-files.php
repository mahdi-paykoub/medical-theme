<?php
//load css js
function load_js_css()
{
    //bootstrap 4
    wp_enqueue_style('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
    //jquery
    wp_enqueue_script('my-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', '', null, true);
    //bootstrap js
    if (is_page(array('faqs'))) {
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', '', null, true);
    }
    //swiper css
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    //swiper js
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', '', null, true);
    //dropzone
    if (is_page(array('user-profile'))) {
        wp_enqueue_style('dropzone-css', FILE_URI . '/assets/css/dropzone.css');
        wp_enqueue_script('my-dropzone-js', FILE_URI . '/assets/js/dropzone.js', '', null, true);
        wp_localize_script('my-dropzone-js', 'data', array('FILE_URI' => FILE_URI));
    }

    //main style
    wp_enqueue_style('main-style', get_stylesheet_uri());
    //js
    wp_enqueue_script('my-js', get_template_directory_uri() . '/assets/js/js.js', '', null, true);
    wp_localize_script('my-js', 'data', array(
        'home_url' => home_url(),
        'FILE_URI' => FILE_URI,
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'load_js_css');