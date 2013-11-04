<?php		

	 class FileController {

		public static function create($filename, $username, $description, $tmp_name, $size, $type) {
			include 'models/file.php';
			include 'models/session.php';
			$problems = array();
			$target_path = "/home/dimitris/test/$filename";
			$name = name_correct($filename);
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
                $variables = array(
                    'problems' => $problems
                );
			    view("file_create_problems", "html", $variables);	
			}
			else {
				move_uploaded_file($tmp_name, $target_path);
				$result = file_model::create($username, $name, $size, $type, $description, $target_path);
				if ($result) {			
					$_SESSION['name'] = $name;
			        view("upload_true", "html");
				}
				else  { 
					echo "shit";
				}		
			}	
		}
	
		public static function get($name) {
			include 'models/file.php';
            $name = basename($_GET['name']);
			$filepath = "/home/dimitris/test/";
			$name = basename($_GET["name"]);
			$filename = $filepath . $name;
			$file_ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); 
			$file_ext = str_replace(".", "", $file_ext);
	        $mime_type = FileModel::mime_type($file_ext); 
            if ($mime_type) {
                header('Content-type: ' . $mime_type);
			}
			header('Content-Description: File Transfer');
			header('Content-Disposition: attachment; filename=' . basename($filename));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($filename));
			FileModel::read($filename);
		}
		
		public static function listing_view() {
			include 'models/file.php';
			$names = FileModel::listing();
			if ($names) {
                $variables = array(
                    'names' => $names
                );
                view("list", "html", $variables);
            }
            else {
                view("list_false", "html", $variables);         
            }
		}
		
		public static function create_view() {
			view("home", "html");
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
