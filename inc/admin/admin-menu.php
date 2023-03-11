<?php
function medical_contact_us_menu()
{
    $py_theme_options_hook = add_menu_page('فرمهای تماس با ما', 'فرمهای تماس با ما', 'manage_options', 'medical_contact_forms', 'medical_contact_forms', 'dashicons-lightbulb');
}
function medical_contact_forms(){
    include FILE_DIR . '/templates/admin/contact_us_forms.php';
}
add_action('admin_menu', 'medical_contact_us_menu');