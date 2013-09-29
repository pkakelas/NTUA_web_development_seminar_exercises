<?php
	
	$filepath = "C:/test/";
	$name = basename($_GET["name"]);
	$filename = $filepath . $name;
	$file_ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); 
	$file_ext = str_replace(".", "", $file_ext);
	$extension_to_type =   $mime_types = array(
		'txt' => 'text/plain',
		'htm' => 'text/html',
		'html' => 'text/html',
		'flv' => 'video/x-flv',
		'png' => 'image/png',	// images
		'jpe' => 'image/jpeg',
		'jpeg' => 'image/jpeg',
		'jpg' => 'image/jpeg',
		'gif' => 'image/gif',
		'bmp' => 'image/bmp',
		'ico' => 'image/vnd.microsoft.icon',
		'tiff' => 'image/tiff',
		'tif' => 'image/tiff',
		'zip' => 'application/zip',	// archives
		'rar' => 'application/x-rar-compressed',
		'exe' => 'application/x-msdownload',
		'msi' => 'application/x-msdownload',
		'mp3' => 'audio/mpeg',	// audio/video
		'qt' => 'video/quicktime',
		'mov' => 'video/quicktime',
		'pdf' => 'application/pdf',	// adobe
		'psd' => 'image/vnd.adobe.photoshop',
		'doc' => 'application/msword',	// ms office
		'rtf' => 'application/rtf',
		'xls' => 'application/vnd.ms-excel',
		'ppt' => 'application/vnd.ms-powerpoint',
		'odt' => 'application/vnd.oasis.opendocument.text',	// open office
		'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
	);
	if (isset($extension_to_type[$file_ext])) {
		header('Content-type: ' . $extension_to_type[$file_ext]);
	}
	header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename=' . basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
	readfile($filename);
?>