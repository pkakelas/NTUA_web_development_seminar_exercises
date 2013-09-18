<?php
	
	function file_in_form($tmp_name) {
		if (file_exists($tmp_name)) {
			return true;
		}
		else { 
			return false;
		}
	}
	
	function name_correct($filename) {
		$filename = strtolower($filename);
		$filename = str_replace(" ", "_", $filename);  
		return $filename;
	}
	
	function file_ext ($filename) {
		$allowed_ext = array('.jpg','.gif','.bmp','.png', '.tiff', '.zip', '.mpeg', '.txt', '.pdf', '.exe');
		$file_ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); 
		if(in_array($file_ext,$allowed_ext)) {
			return true;
		}
		else {
			return false;
		}
	}
	
?>