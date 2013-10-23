<?php

    class Encryption {
      
        public static function authenticate_check($password, $salt, $hash) {
            $user = hash('sha256', $password . $salt);
            if ($user == $hash) {
                return true;
            }
        }
        
        public static function randomsalting() {         
            $max = 32;
            $salt = openssl_random_pseudo_bytes($max);
            return $salt;
        }   
        
        public static function encrypt($password) {
            $salt = Encryption::randomsalting();
            $hash = hash('sha256', $password . $salt);
            return array(
                      "password" => $hash, 
                      "salt" => $salt
                   );  
        }         
    
    }         

?>
   
