<?php
//partials
include get_template_directory() . '/partials/config.php';
include FILE_DIR . '/partials/load-files.php';

//add files inc
include FILE_DIR . '/inc/shortcodes.php';
include FILE_DIR . '/inc/ajax.php';
include FILE_DIR . '/inc/widgets/widget-main-page.php';
//cmb2
require_once dirname(__FILE__) . '/CMB2-develop/init.php';
require_once dirname(__FILE__) . '/cmb2/cmb2_options.php';
//partials
include FILE_DIR . '/partials/d-user-image.php';
include FILE_DIR . '/partials/image-sizes.php';
include FILE_DIR . '/partials/like-post.php';
include FILE_DIR . '/partials/pagination.php';
include FILE_DIR . '/partials/save-post.php';
include FILE_DIR . '/partials/search-filter.php';
include FILE_DIR . '/partials/validations.php';
include FILE_DIR . '/partials/view-counter.php';
if (is_admin()) {
    include FILE_DIR . '/partials/add-menus.php';
    include FILE_DIR . '/inc/meta-boxes.php';
    include FILE_DIR . '/inc/meta-taxonomy.php';
    include FILE_DIR . '/inc/admin/admin-menu.php';
    include FILE_DIR . '/inc/custom-post-type.php';
}