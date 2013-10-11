<?php

	function name_correct($filename) {
		$filename = strtolower($filename);
		$filename = str_replace(" ", "_", $filename);  
		return $filename;
	}
	
	function valid_file_extension($filename) {
		$allowed_ext = array('txt', 'htm', 'html', 'flv', 'swf', 'flv', 'png', 'jpeg', 'jpe', 'jpg', 'gif', 'ico', 'bmp', 'tif', 'tiff', 'svg', 'svgz', 'zip', 'rar', 'exe', 'msi', 'cab', 'mp3', 'mov', 'pdf', 'psd', 'rtf', 'doc', 'xls', 'ppt', 'odf', 'odt');
		$file_ext = substr($filename, strpos($filename,'.'), strlen($filename) - 1); 
		$file_ext = str_replace(".", "", $file_ext);
		return in_array($file_ext, $allowed_ext);
	}
	
?>
