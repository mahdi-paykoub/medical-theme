<?php
//path-uri
define( 'FILE_URI', get_template_directory_uri() );
//page title
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_filter( 'show_admin_bar', '__return_false' );
//remove comment text
add_filter( 'comment_form_logged_in', '__return_empty_string' );

//load css js
function load_js_css() {
	/*
	 wp_dequeue_style( 'wp-block-library' );
	 wp_dequeue_style( 'classic-theme-styles' );
	*/
	//bootstrap 4
	wp_enqueue_style( 'bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' );
	//swiper css
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
	//main style
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	//jquery
	wp_enqueue_script( 'my-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', '', null, true );
	//bootstrap js
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', '', null, true );
	//swiper js
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', '', null, true );
	//dropzone
	wp_enqueue_style( 'dropzone-css', FILE_URI . '/assets/css/dropzone.css' );
	wp_enqueue_script( 'my-dropzone-js', FILE_URI . '/assets/js/dropzone.js', '', null, true );
	wp_localize_script( 'my-dropzone-js', 'data', array( 'FILE_URI' => FILE_URI ) );


	//js
	wp_enqueue_script( 'my-js', get_template_directory_uri() . '/assets/js/js.js', '', null, true );
	wp_localize_script( 'my-js', 'data', array(
		'home_url' => home_url(),
		'FILE_URI' => FILE_URI,
		'ajax_url' => admin_url( 'admin-ajax.php' )
	) );


}

add_action( 'wp_enqueue_scripts', 'load_js_css' );

//add menu
function add_top_menu() {
	register_nav_menus( array(
		'to-header-menu' => 'منو برای تاپ هدر ',
	) );

	register_nav_menus( array(
		'bottom-footer-right-menu' => 'منو برای راست فوتر ',
	) );
	register_nav_menus( array(
		'bottom-footer-left-menu' => 'منو برای چپ فوتر ',
	) );

}

add_action( 'after_setup_theme', 'add_top_menu' );


//add files inc
include get_template_directory() . '/inc/shortcodes.php';
include get_template_directory() . '/inc/ajax.php';
include get_template_directory() . '/inc/meta-boxes.php';
include get_template_directory() . '/inc/meta-taxonomy.php';
include get_template_directory() . '/inc/widgets/widget-main-page.php';
include get_template_directory() . '/inc/custom-post-type.php';
//cmb2
require_once dirname( __FILE__ ) . '/CMB2-develop/init.php';
require_once dirname( __FILE__ ) . '/cmb2/cmb2_options.php';

//search filter
function SearchFilter( $query ) {
	if ( $query->is_search ) {
		$query->set( 'post_type', 'post' );
	}

	return $query;
}

add_filter( 'pre_get_posts', 'SearchFilter' );

//view count
function get_post_view( $post_id ) {
	$post_view = get_post_meta( $post_id, 'views', true );
	if ( intval( $post_view ) ) {
		return intval( $post_view );
	}

	return 0;
}

function set_post_view( $post_id ) {
	if ( intval( $post_id ) ) {
		$views = get_post_view( $post_id );
		$views ++;
		update_post_meta( $post_id, 'views', $views );
	}
}

//user ip
function user_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}


//like post
function set_like_ip( $post_id ) {
	if ( intval( $post_id ) ) {

		$post_ips = get_post_meta( $post_id, 'post_like_ip', true );

		return $post_ips;

	}

	return false;
}

function get_post_likes( $post_id ) {

	if ( intval( $post_id ) ) {

		$post_likes = get_post_meta( $post_id, 'likes', true );

		return intval( $post_likes );

	}

	return 0;

}

function set_post_likes( $post_id ) {
	if ( intval( $post_id ) ) {
		if ( is_array( set_like_ip( $post_id ) ) ) {
			if ( ! in_array( user_ip(), set_like_ip( $post_id ) ) ) {
				$likes = get_post_likes( $post_id );
				$likes ++;
				update_post_meta( $post_id, 'likes', $likes );


				$user_ip   = set_like_ip( $post_id );
				$user_ip[] = user_ip();
				update_post_meta( $post_id, 'post_like_ip', $user_ip );

				$response = json_encode( array( 'liked', $likes ) );
				wp_die( $response );
			} else {
				$user_ip = set_like_ip( $post_id );
				if ( ( $key = array_search( user_ip(), $user_ip ) ) !== false ) {
					$likes = get_post_likes( $post_id );
					$likes --;
					update_post_meta( $post_id, 'likes', $likes );
					unset( $user_ip[ $key ] );
					update_post_meta( $post_id, 'post_like_ip', $user_ip );

					$response = json_encode( array( 'unliked', $likes ) );
					wp_die( $response );
				}
				//شما قبلا لاک کرده اید
			}
		} else {
			$likes = get_post_likes( $post_id );
			$likes ++;
			update_post_meta( $post_id, 'likes', $likes );

			$user_ip[] = user_ip();
			update_post_meta( $post_id, 'post_like_ip', $user_ip );
			$response = json_encode( array( 'liked', $likes ) );
			wp_die( $response );
		}
	}

	wp_die( 0 );
}

function is_liked( $post_id ) {
	if ( intval( $post_id ) ) {
		$liked = '';
		if ( is_array( set_like_ip( $post_id ) ) ) {
			if ( in_array( user_ip(), set_like_ip( $post_id ) ) ) {
				$liked = 'liked-style';
			}
		}
		echo $liked;
	}
}

//get cmb2 values
function get_cmb2_values( $key1, $key2 ) {
	if ( empty( medicalprefix_get_option( $key1 )[0][ $key2 ] ) || ! isset( medicalprefix_get_option( $key1 )[0][ $key2 ] ) ) {
		return '';
	} else {
		return medicalprefix_get_option( $key1 )[0][ $key2 ];
	}
}

//display user image
function display_user_image( $user_id ) {
	if ( ! empty( get_user_meta( $user_id, 'user-profile-image', true ) ) ) {
		$user_profile_image = get_user_meta( $user_id, 'user-profile-image', true );
	} else {
		$user_profile_image = FILE_URI . '/assets/img/default.jpg';
	}
	echo $user_profile_image;
}


//save post
function get_saved_posts( $post_id ) {
	if ( is_user_logged_in() && intval( $post_id ) ) {
		$user_id     = get_current_user_id();
		$saved_posts = get_user_meta( $user_id, 'saved_posts', true );

		return $saved_posts;
	}

	return 0;
}

function save_post( $post_id ) {
	if ( is_user_logged_in() && intval( $post_id ) ) {
		if ( is_array( get_saved_posts( $post_id ) ) ) {
			if ( ! in_array( $post_id, get_saved_posts( $post_id ) ) ) {
				$user_id       = get_current_user_id();
				$saved_posts   = get_saved_posts( $post_id );
				$saved_posts[] = $post_id;
				update_user_meta( $user_id, 'saved_posts', $saved_posts );
				wp_die( 1 );
			} else {
				//delete post from save
				$saved_posts = get_saved_posts( $post_id );
				if ( ( $key = array_search( $post_id, $saved_posts ) ) !== false ) {
					unset( $saved_posts[ $key ] );
					update_user_meta( get_current_user_id(), 'saved_posts', $saved_posts );
					wp_die( 2 );
				}
			}
		} else {
			$user_id     = get_current_user_id();
			$saved_posts = array( $post_id );
			update_user_meta( $user_id, 'saved_posts', $saved_posts );
			wp_die( 1 );
		}
	}

	return 0;
}

function is_saved( $post_id ) {
	if ( is_user_logged_in() && intval( $post_id ) ) {
		$saved = '';
		if ( is_array( get_saved_posts( $post_id ) ) ) {
			if ( in_array( $post_id, get_saved_posts( $post_id ) ) ) {
				$saved = 'saved-style';
			}
		}
		echo $saved;
	}

	return 0;
}


//pagination
function pagination_it( $getpaged ) {
	echo paginate_links( array(
		'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		'total'        => $getpaged->max_num_pages,
		'current'      => max( 1, get_query_var( 'paged' ) ),
		'format'       => '?paged=%#%',
		'show_all'     => false,
		'type'         => 'plain',
		'end_size'     => 2,
		'mid_size'     => 1,
		'prev_next'    => true,
		'prev_text'    => sprintf( '<i></i> %1$s', __( 'قبلی', 'text-domain' ) ),
		'next_text'    => sprintf( '%1$s <i></i>', __( 'بعدی', 'text-domain' ) ),
		'add_args'     => false,
		'add_fragment' => '',
	) );
}

//metabox is empty
function is_postmeta_empty( $meta_key ) {
	if ( ! empty( get_post_meta( get_the_ID(), $meta_key, true ) ) ) {
		$voice_file = get_post_meta( get_the_ID(), $meta_key, true );

		return $voice_file;
	}

	return;
}


//add image size
add_image_size('small_for_podcast' , 90 , 85 , array('center'));
add_image_size('size_for_swiper_index' , '' , 250 , array('center'));
add_image_size('large_size_for_single' , '' , 420 , array('center'));
add_image_size('small_for_sidebar' , 130 , 100 , array('center'));