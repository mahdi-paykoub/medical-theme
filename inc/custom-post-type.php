<?php
//add cpt FAQs
function add_faqs_postType()
{
	$labels = array(
		'name' => 'FAQs',
		'singular_name' => 'FAQs',
		'menu_name' => 'FAQs',
		'name_admin_bar' => 'FAQs',
		'add_new' => 'افزودن FAQ',
		'add_new_item' => 'عنوان FAQ',
		'new_item' => 'FAQ جدید',
		'edit_item' => 'ویرایش FAQ',
		'view_item' => 'نمایش  FAQ',
		'all_item' => 'تمام FAQs',
		'search_items' => 'جستجوی FAQs',
		'parent_item_colon' => 'FAQs مادر',
		'not found' => 'FAQ ای یافت نشد',
		'not_found_in_trash' => 'FAQ هایی در زباله دان یافت نشد'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'بخش FAQs',
		'public' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'FAQs'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title' , 'editor')
	);

	register_post_type('FAQs', $args);
}

add_action('init', 'add_faqs_postType');
