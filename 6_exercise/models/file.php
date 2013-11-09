<?php
    
    include 'models/query_helper.php';
    include 'models/settings.php';

    class FileModel {
    
        public static function create($name, $filename, $filesize, $filetype, $description, $target_path) {
            $sql = prepared_query("INSERT INTO 
                                      `data (`user`, `filename` ,`filesize`, `filetype`, `description`, `saved`)
                                   VALUES 
                                      (?, ?, ?, ?, ?, ?)", array($name, $filename, $filesize, $filetype, $description, $target_path));
            if ($sql) {    
                return true;
            }
        }
    
        public static function listing($target_path) {
            $dir = opendir($target_path); 
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

