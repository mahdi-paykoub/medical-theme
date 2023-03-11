<?php
function contact_us_form() {
	global $wpdb;
	$user_name   = sanitize_text_field( $_POST['user_name'] );
	$user_mobile = sanitize_text_field( $_POST['user_mobile'] );
	$user_email  = sanitize_text_field( $_POST['user_email'] );
	$user_text   = sanitize_text_field( $_POST['user_text'] );

	if ( empty( $user_name ) || empty( $user_mobile ) || empty( $user_email ) || empty( $user_text ) ) {
		wp_die( - 1 );
	}
	if (! is_numeric($user_mobile)) {
		wp_die( - 2 );
	}
	if ( ! filter_var( $user_email, FILTER_VALIDATE_EMAIL ) ) {
		wp_die( - 3 );
	}
	if ( intval( strlen( $user_name ) ) > 50 ) {
		wp_die( - 4 );
	}

	if ( intval( strlen( $user_text ) ) > 1000 ) {
		wp_die( - 5 );
	}
	$table_name = $wpdb->prefix . 'contact_us';

	$id_it = $wpdb->insert( $table_name, array(
		'user_name'   => $user_name,
		'user_email'  => $user_email,
		'user_mobile' => $user_mobile,
		'user_text'   => $user_text,
		'created_at'  => date( "Y/m/d H:i:s" ),

	),
		array( '%s', '%s', '%s', '%s', '%s' )
	);

    if ( is_wp_error( $id_it ) ) {
        wp_die( 0 );
    }

    wp_die( 1 );
}

add_action( 'wp_ajax_contact_us_form', 'contact_us_form' );

//register
function register_form() {
	global $wpdb;
	$user_name  = sanitize_text_field( $_POST['user_name'] );
	$user_pass  = sanitize_text_field( $_POST['user_pass'] );
	$user_email = sanitize_text_field( $_POST['user_email'] );

	if ( empty( $user_name ) || empty( $user_pass ) || empty( $user_email ) ) {
		wp_die( - 1 );
	}

	if ( email_exists( $user_email ) ) {
		wp_die( - 2 );
	}
	if ( ! filter_var( $user_email, FILTER_VALIDATE_EMAIL ) ) {
		wp_die( - 3 );
	}
	if ( intval( strlen( $user_name ) ) > 50 ) {
		wp_die( - 4 );
	}

	if ( username_exists( $user_name ) ) {
		wp_die( - 5 );
	}
	if ( intval( strlen( $user_pass ) ) < 5 ) {
		wp_die( - 6 );
	}
	$newUserData = array(
		'user_login' => $user_name,
		'user_email' => $user_email,
		'user_pass'  => $user_pass,
	);

	$newUserID = wp_insert_user( $newUserData );


	if ( is_wp_error( $newUserID ) ) {
		wp_die( 0 );
	}

	wp_set_auth_cookie( $newUserID );
	wp_set_current_user( $newUserID );
	wp_die( 1 );

}

add_action( 'wp_ajax_nopriv_register_form', 'register_form' );

//login
function login_form() {

	global $wpdb;
	$user_name = sanitize_text_field( $_POST['user_name'] );
	$user_pass = sanitize_text_field( $_POST['user_pass'] );

	if ( empty( $user_name ) || empty( $user_pass ) ) {
		wp_die( - 1 );
	}

	$user = wp_authenticate_username_password( null, $user_name, $user_pass );

	if ( is_wp_error( $user ) ) {
		wp_die( - 2 );
	}

	$creds      = array(
		'user_login'    => $user_name,
		'user_password' => $user_pass
	);
	$login_user = wp_signon( $creds, false );

	if ( is_wp_error( $login_user ) ) {
		wp_die( 0 );
	}

	wp_die( 1 );

}

add_action( 'wp_ajax_nopriv_login_form', 'login_form' );


//like
function like_action() {
	$post_id = sanitize_text_field( $_POST['post_id'] );

	set_post_likes( $post_id );

}

add_action( 'wp_ajax_nopriv_like_action', 'like_action' );
add_action( 'wp_ajax_like_action', 'like_action' );


//save profile image
function user_profile_image_action() {

	global $wpdb;
	$user_profile_image = sanitize_text_field( $_POST['user_profile_image'] );
	$user_id            = get_current_user_id();

	if ( empty( $user_profile_image ) ) {
		wp_die( - 1 );
	}
	$id = update_user_meta( $user_id, 'user-profile-image', $user_profile_image );
	if ( ! is_wp_error( $id ) ) {
		wp_die( 1 );
	} else {
		wp_die( 0 );
	}
}

add_action( 'wp_ajax_user_profile_image_action', 'user_profile_image_action' );


//save post
function save_action() {
	$post_id = sanitize_text_field( $_POST['post_id'] );

	save_post( $post_id );
}

add_action( 'wp_ajax_save_action', 'save_action' );
