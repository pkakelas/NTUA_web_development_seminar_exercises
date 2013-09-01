<?php
	$filepath = "C:/test/" ;
	$name = $_GET["name"] ;
	$filename = $filepath.$name ;
	if (strpos($name,'.exe') !== false) {
		echo 'header("Content-Type: application/octet-stream");' ;
}
	else if (strpos($name,'.gif') !== false) {
		echo 'header("Content-Type: image/gif");';
} 
	else if (strpos($name,'.jpeg') !== false) {
			echo 'header("Content-Type: image/jpeg");';
	} 
	else if (strpos($name,'.bmp') !== false) {
			echo 'header("Content-Type: image/bmp");';
	} 
	else if (strpos($name,'.png') !== false) {
			echo 'header("Content-Type: image/png");';
	} 
	else if (strpos($name,'.zip') !== false) {
			echo 'header("Content-Type: application/zip");';
	} 
	else if (strpos($name,'.tiff') !== false) {
			echo 'header("Content-Type: image/tiff");';
	} 
	else if (strpos($name,'.mpeg') !== false) {
			echo 'header("Content-Type: video/mpeg");';
	} 
	else if (strpos($name,'.html') !== false) {
			echo 'header("Content-Type: text/html");';
	} 	
	else if (strpos($name,'.txt') !== false) {
			echo 'header("Content-Type: text/plain");';
	} 
	else if (strpos($name,'.pdf') !== false) {
		echo 'header("Content-Type: application/pdf");';
	} 
	header("Content-Type: application/pdf");
	header("Pragma: public"); 
	header("Expires: 0");
	header("Content-Type: $type");
	header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($filename));
	readfile($filename);
	exit();
?>