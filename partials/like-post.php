<?php
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