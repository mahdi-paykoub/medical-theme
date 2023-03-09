<?php
function text_style_callback($atts, $content = null)
{
	ob_start();
	include get_template_directory() . '/templates/text-style1.php';
	$login_form_html = ob_get_clean();
	return $login_form_html;
}

add_shortcode('text_style1', 'text_style_callback');

