<?php
$ds = DIRECTORY_SEPARATOR;

$storeFolder = '../assets/upload-profile-img/';

if ( ! empty( $_FILES ) ) {

	$tempFile = $_FILES['file']['tmp_name'];

	$targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;




	$end = explode( ".", $_FILES["file"]["name"] );

	$newfilename = $end[0] . round( microtime( true ) ) . '.' . end( $end );


	$targetFile = $targetPath . $newfilename;


	move_uploaded_file( $tempFile, $targetFile );

	echo '/assets/upload-profile-img/' . $newfilename;

}