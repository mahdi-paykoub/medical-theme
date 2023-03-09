<?php
//cmb2 meta baxes
add_action( 'cmb2_admin_init', 'add_meta_boxes' );

function add_meta_boxes() {

	$video_embeds = new_cmb2_box( array(
		'id'           => 'post_read_time',
		'title'        => __( 'مدت زمان مطالعه', 'cmb2' ),
		'object_types' => array( 'post', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$video_embeds->add_field( array(
		'name' => __( 'مدت زمان مطالعه', 'cmb2' ),
		'desc' => __( 'مدت زمان مطالعه پست را وارد نمایید (دقیقه)', 'cmb2' ),
		'id'   => 'post_read_time',
		'type' => 'text',
	) );




	$video_embeds = new_cmb2_box( array(
		'id'           => 'video_embed',
		'title'        => __( 'افزودن ویدیو', 'cmb2' ),
		'object_types' => array( 'post', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$video_embeds->add_field( array(
		'name' => __( 'id امبد ویدیو', 'cmb2' ),
		'desc' => __( ' مقدار id امبد ویدیو را در این قسمت وارد نمایید', 'cmb2' ),
		'id'   => 'video_embed_id',
		'type' => 'text',
	) );

	// URL text field
	$video_embeds->add_field( array(
		'name' => __( 'لینک ویدیو امبد', 'cmb2' ),
		'desc' => __( 'مقدار source امبد ویدیو را در این قسمت وارد نمایید', 'cmb2' ),
		'id'   => 'video_embed_source',
		'type' => 'text',
	) );


	$voice = new_cmb2_box( array(
		'id'           => 'voice_source',
		'title'        => __( 'افزودن فایل صوتی', 'cmb2' ),
		'object_types' => array( 'post', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$voice->add_field( array(
		'name' => __( 'آدرس فایل صوتی', 'cmb2' ),
		'desc' => __( 'لینک فایل صوتی را وارد نمایید یا با زدن دکمه آپلود فایل صوتی خود را اضافه نمایید', 'cmb2' ),
		'id'   => 'voice_file',
		'type' => 'file',
	) );

	$voice->add_field( array(
		'name' => __( 'شماره فایل صوتی', 'cmb2' ),
		'desc' => __( 'برای نمایش در قسمت های مختلف سایت استفاده خواهد شد', 'cmb2' ),
		'id'   => 'voice_number',
		'type' => 'text',
	) );

	$voice->add_field( array(
		'name' => __( 'مدت زمان فایل صوتی', 'cmb2' ),
		'desc' => __( 'برای نمایش در قسمت های مختلف سایت استفاده خواهد شد', 'cmb2' ),
		'id'   => 'voice_time',
		'type' => 'text',
	) );
}