<?php
    
    class file_model {

        public static function create($username, $name, $size, $type, $description, $target_path) {
            include 'models/sql.php';
            $description = addslashes($description);
            $sql =	"INSERT INTO 
                        `data (`user`, `filename` ,`filesize`, `filetype`, `description`, `saved`)
                    VALUES 
                        ('$username', '$name', '$size', '$type', '$description', '$target_path')";	
            if (mysqli_query($con, $sql)) {	
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
