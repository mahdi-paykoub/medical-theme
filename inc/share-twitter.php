<?php
$title     = get_the_title();
$short_url = 'sdcsdcsdc';
$url       = get_the_permalink();

$twitter_params =
	'?text=' . urlencode( $title ) . '+-' .
	'&amp;url=' . urlencode( $short_url ) .
	'&amp;counturl=' . urlencode( $url ) .
	'';


$link = "http://twitter.com/share" . $twitter_params . "";
