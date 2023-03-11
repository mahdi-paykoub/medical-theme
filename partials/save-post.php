<?php
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