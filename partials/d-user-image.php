<?php
//display user image
function display_user_image( $user_id ) {
    if ( ! empty( get_user_meta( $user_id, 'user-profile-image', true ) ) ) {
        $user_profile_image = get_user_meta( $user_id, 'user-profile-image', true );
    } else {
        $user_profile_image = FILE_URI . '/assets/img/default.jpg';
    }
    echo $user_profile_image;
}
