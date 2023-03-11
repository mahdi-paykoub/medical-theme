<?php
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