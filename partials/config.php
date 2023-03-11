<?php
//path-uri
define('FILE_URI', get_template_directory_uri());
define('FILE_DIR', get_template_directory());
//page title
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_filter('show_admin_bar', '__return_false');
//remove comment text
add_filter('comment_form_logged_in', '__return_empty_string');