<?php
$mainPageWidgetTop = array(
	'name' => 'ویجت صفحه اصلی (بالا)',
	'id' => 'main_page_widget',
	'description' => 'ویجت برای اطلاعات پایین صفحه اصلی و توضیحات اصلی سایت',
);
register_sidebar($mainPageWidgetTop);

$mainPageWidgetMiddle= array(
	'name' => 'ویجت صفحه اصلی (وسط)',
	'id' => 'main_page_widget_middle',
	'description' => 'ویجت برای اطلاعات پایین صفحه اصلی و توضیحات اصلی سایت',
);
register_sidebar($mainPageWidgetMiddle);

$mainPageWidgetBottom = array(
	'name' => 'ویجت صفحه اصلی (پایین)',
	'id' => 'main_page_widget_bottom',
	'description' => 'ویجت برای اطلاعات پایین صفحه اصلی و توضیحات اصلی سایت',
);
register_sidebar($mainPageWidgetBottom);

$aboutUsWidgetBottom = array(
	'name' => 'ویجت صفحه درباره ما (بالا)',
	'id' => 'about_us_widget_top',
	'description' => 'ویجت برای اطلاعات پایین صفحه اصلی و توضیحات اصلی سایت',
);
register_sidebar($aboutUsWidgetBottom);

$aboutUsWidgetMain = array(
	'name' => 'ویجت صفحه درباره ما (توضیحات اصلی)',
	'id' => 'about_us_widget_main_description',
	'description' => 'ویجت برای توضیحات درباره ما',
);
register_sidebar($aboutUsWidgetMain);

$contactUsLeftSide = array(
    'name' => 'ویجت صفحه تماس با ما (توضیحات کنار فرم)',
    'id' => 'contact_us_widget_form_left',
    'description' => 'ویجت برای توضیحات  تماس با ما',
);
register_sidebar($contactUsLeftSide);