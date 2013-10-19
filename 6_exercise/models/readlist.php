<?php
    
    function readlist() {
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

?>
