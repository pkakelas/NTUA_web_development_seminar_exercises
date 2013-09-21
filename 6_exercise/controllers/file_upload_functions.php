<?php

	function name_correct($filename) {
		$filename = strtolower($filename);
		$filename = str_replace(" ", "_", $filename);  
		return $filename;
	}
	
	function file_ext ($filename) {
		$allowed_ext = array('.jpg','.gif','.bmp','.png', '.tiff', '.zip', '.mpeg', '.txt', '.pdf', '.exe');
		$file_ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); 
		return in_array($file_ext, $allowed_ext);
	}
	
?>