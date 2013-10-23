<?php
    
    include 'models/query_helper.php';

    class file_model {

        public static function create($username, $name, $size, $type, $description, $target_path) {
            include 'models/sql.php';
            $query = "INSERT INTO 
                        `data (`user`, `filename` ,`filesize`, `filetype`, `description`, `saved`)
                      VALUES 
                        (?, ?, ?, ?, ?, ?)";
            $array = array($username, $password, $size, $type, $description, $target_path);            
            $sql = prepared_query($query, $array ); 
            if ($sql) {	
                return true;
            }
        }
   
        
    
        public static function listing() {
            $dir = opendir('/home/dimitris/test/'); 
            $names = array();
            while ($read = readdir($dir)) {
                if ($read != '.' && $read != '..' && $read != 'desktop.ini') {
                    $names[] = $read;
                }
            } 
            closedir($dir); 
            return $names;
        }
    }   	
       
?>
