<?php        

     class FileController {

        public static function create($filename, $name, $description, $tmp_name, $filesize, $filetype) {
            include 'models/file.php';
            $problems = array();
            $target_path = "files/$filename";
            $name = FileController::name_correct($filename);
            if (!file_exists($tmp_name)) {
                $problems[] = "You haven't chosen any files yet.";
            }
            else if (FileController::valid_file_extension($filename)) {
                $problems[] = "I am afraid the file that you attempted to upload is not supported.";    
            }
            else if (file_exists("files/$filename")) {
                $problems[] = "The file exists. Please upload another file, or change the name of your file.";
            } 
            if (!empty($problems)) {
                $variables = array(
                    'problems' => $problems
                );
                view("file_create_problems", $variables, "html");    
            }
            else {
                move_uploaded_file($tmp_name, $target_path);
                $result = FileModel::create($name, $filename, $filesize, $filetype, $description, $target_path);
                if ($result) {            
                    $_SESSION['name'] = $name;
                    view("upload_true", $variables, "html");
                }
                else  { 
                    echo "shit";
                }        
            }    
        }
    
        public static function get($name) {
            include 'models/file.php';
            $name = basename($_GET['name']);
            $filepath = "files/";
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
            $names = FileModel::listing($target_path);
            if ($names) {
                $variables = array(
                    'names' => $names
                );
                view("list", $variables, "html");
            }
            else {
                view("list_false", $variables, "html");         
            }
        }
        
        public static function create_view() {
            view("home", $variables, "html");
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

?>

