<?php
//get cmb2 values
function get_cmb2_values( $key1, $key2 ) {
    if ( empty( medicalprefix_get_option( $key1 )[0][ $key2 ] ) || ! isset( medicalprefix_get_option( $key1 )[0][ $key2 ] ) ) {
        return '';
    } else {
        return medicalprefix_get_option( $key1 )[0][ $key2 ];
    }
}

//meta box is empty
function is_postmeta_empty( $meta_key ) {
    if ( ! empty( get_post_meta( get_the_ID(), $meta_key, true ) ) ) {
        $voice_file = get_post_meta( get_the_ID(), $meta_key, true );

        return $voice_file;
    }

    return;
}