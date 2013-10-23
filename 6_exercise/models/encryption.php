<?php

    class encryption {
      
        public static function authenticate_check($password, $salt, $hash) {
            $user = hash('sha256', $password . $salt);
            $sql = $hash;
            if ($user == $sql) {
                return true;
            }
        }
        
        public static function randomsalting() {         
            $max = 32;
            $salt = openssl_random_pseudo_bytes($max);
            return $salt;
        }   
        
        public static function encrypt($password) {
            $salt = encryption::randomsalting();
            $hash = hash('sha256', $password . $salt);
            return array(
                      "password" => "$hash", 
                      "salt" => "$salt"
                   );  
        }         
    
    }         

?>
    
