<?php
    
    include 'models/query_helper.php';

    class FileModel {
    
        public static function create($username, $name, $size, $type, $description, $target_path) {
            $target_path = "files/";
            $sql = prepared_query("INSERT INTO 
                                      `data (`user`, `filename` ,`filesize`, `filetype`, `description`, `saved`)
                                   VALUES 
                                      (?, ?, ?, ?, ?, ?)", array($username, $password, $size, $type, $description, $target_path));
            if ($sql) {	
                return true;
            }
        }
    
        public static function listing() {
            $dir = opendir("files/"); 
            $names = array();
            while ($read = readdir($dir)) {
                if ($read != '.' && $read != '..' && $read != 'desktop.ini') {
                    $names[] = $read;
                }
            } 
            closedir($dir);
            if (empty($names)) {
                return FALSE;
            }
            else {
                return $names;
            }
        }
        
        public static function mime_type($file_ext) {
            $sql = prepared_query("SELECT
                                      mime_type 
                                   FROM
                                      mime_types
                                   WHERE 
                                      file_ext = ?", array($file_ext)); 
            if (!$sql) {
                die("problem");	
            }
            $res = mysqli_fetch_array($sql);
            return $res[0];
        }

        public static function read($filename) {
            readfile($filename);
        }
    }


       
?>
