<?php
	$filepath = "C:/test/" ;
	$name = $_GET["name"] ;
	$filename = $filepath.$name ;
	$file_ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); 
	if ($file_ext == ".exe") {
		echo 'header("Content-Type: application/octet-stream");' ;
}
	else if ($file_ext == ".gif") {
		echo 'header("Content-Type: image/gif");';
} 
	else if ($file_ext == ".jpeg") {
			echo 'header("Content-Type: image/jpeg");';
	} 
	else if ($file_ext == ".bmp") {
			echo 'header("Content-Type: image/bmp");';
	} 
	else if ($file_ext == ".png") {
			echo 'header("Content-Type: image/png");';
	} 
	else if ($file_ext == ".zip") {
			echo 'header("Content-Type: application/zip");';
	} 
	else if ($file_ext == ".tiff") {
			echo 'header("Content-Type: image/tiff");';
	} 
	else if ($file_ext == ".mpeg") {
			echo 'header("Content-Type: video/mpeg");';
	} 
	else if ($file_ext == ".txt") {
			echo 'header("Content-Type: text/plain");';
	} 
	else if ($file_ext == ".pdf") {
		echo 'header("Content-Type: application/pdf");';
	} 
	header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename='.basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
	readfile($filename);
?>