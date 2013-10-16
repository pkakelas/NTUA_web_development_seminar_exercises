<?php		

	 class file_controller {

		public static function Create($filename, $username, $description, $tmp_name, $size, $type) {
			include 'models/data.php';
			include 'models/sessions.php';
			$problems = array();
			$target_path = "/home/dimitris/test/$filename";
			$name = nameCorrect($filename);
			if (!file_exists($tmp_name)){
				$problems[] = "You haven't chosen any files yet.";
			}
			else if (!valid_file_extension($filename)) {
				$problems[] = "I am afraid the file that you attempted to upload is not supported.";	
			}
			else if (file_exists("/home/dimitris/test/$filename")) {
				$problems[] = "The file exists. Please upload another file, or change the name of your file.";
			} 
			if (count($problems)) {
				include 'views/fileCreateProblems.php';
			}
			else {
				move_uploaded_file($tmp_name, $target_path);
				$result = file_upload($username, $name, $size, $type, $description, $target_path);
				if ($result) {			
					$_SESSION['name'] = $name;
					include 'views/upload_true.php';
				}
				else  { 
					echo "shit";
				}		
			}	
		}
	
		public static function file_get($name) {
			$name = basename($_GET['name']);
			$filepath = "/home/dimitris/test/";
			$name = basename($_GET["name"]);
			$filename = $filepath . $name;
			$file_ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); 
			$file_ext = str_replace(".", "", $file_ext);
			$extension_to_type =   $mime_types = array(
				'txt' => 'text/plain',
				'htm' => 'text/html',
				'html' => 'text/html',
				'flv' => 'video/x-flv',
				'png' => 'image/png', // images
				'jpe' => 'image/jpeg',
				'jpeg' => 'image/jpeg',
				'jpg' => 'image/jpeg',
				'gif' => 'image/gif',
				'bmp' => 'image/bmp',
				'ico' => 'image/vnd.microsoft.icon',
				'tiff' => 'image/tiff',
				'tif' => 'image/tiff',
				'zip' => 'application/zip', // archives
				'rar' => 'application/x-rar-compressed',
				'exe' => 'application/x-msdownload',
				'msi' => 'application/x-msdownload',
				'mp3' => 'audio/mpeg', // audio/video
				'qt' => 'video/quicktime',
				'mov' => 'video/quicktime',
				'pdf' => 'application/pdf', // adobe
				'psd' => 'image/vnd.adobe.photoshop',
				'doc' => 'application/msword', // ms office
				'rtf' => 'application/rtf',
				'xls' => 'application/vnd.ms-excel',
				'ppt' => 'application/vnd.ms-powerpoint',
				'odt' => 'application/vnd.oasis.opendocument.text', // open office
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
		}
		
		public static function Read() {
			include 'models/readlist.php';
			$names = readlist();
			include 'views/list.php';
		}
		
		public static function create_view() {
			include 'views/home.php';
		}

		private static function name_correct($filename) {
			$filename = strtolower($filename);
			$filename = str_replace(" ", "_", $filename);  
			return $filename;
		}
		
		private static function valid_file_extension($filename) {
			$allowed_ext = array('txt', 'htm', 'html', 'flv', 'swf', 'flv', 'png', 'jpeg', 
										'jpe', 'jpg', 'gif', 'ico', 'bmp', 'tif', 'tiff', 'svg',
										'svgz', 'zip', 'rar', 'exe', 'msi', 'cab', 'mp3', 'mov',
										'pdf', 'psd', 'rtf', 'doc', 'xls', 'ppt', 'odf', 'odt');
			$file_ext = substr($filename, strpos($filename,'.'), strlen($filename) - 1); 
			$file_ext = str_replace(".", "", $file_ext);
			return in_array($file_ext, $allowed_ext);
		}
		
		
	}
