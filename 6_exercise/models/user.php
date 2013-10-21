<?php
    
    class user_model {
      
        public static function register($name,  $surname,  $age,  $username,  $password, $email) {	
            include 'models/sql.php'; 	//The function that adds a new user. It doesn't contain the restriction.
            $name = addslashes($name); 		
            $surname = addslashes($surname);		
            $age = addslashes($age);
            $email = addslashes($email);
            $username = addslashes($username);
            $enc_result = user_model::encryption($password);
            $password = $enc_result['password'];
            $salt = $enc_result['salt'];
            $sql = "INSERT INTO
                        `users` ( `name`, `surname`, `age`, `username`, `password`, `salt`, `email` )
                    VALUES 
                        ( '$name', '$surname', '$age', '$username', '$password', '$salt', '$email' )";
            if (mysqli_query($con, $sql)) {
                return true;
            }	
            else {
                return false;	
            }	
        }	
        
        public static function username_exists($username) { 
            include 'models/sql.php'; // The function that makes the sign in sql query to the db.
            $sql= "SELECT 
                        name, surname
                   FROM 
                        users
                   WHERE
                        username = '$username'";	
            $result = $con->query($sql);	
            if (!$result) {
                echo "problem";	
            }	
            $row = mysqli_fetch_array($result);		
            if ($row) {	
                return true;
            }	
        }

                    
        public static function randomsalting() {                                                                         $max = 32;
            $salt = openssl_random_pseudo_bytes($max);
            return $salt;
        }   
        
        function encryption($password) {
            $salt = user_model::randomsalting();
            $hash = hash('sha256', $password . $salt);
            return array(
                      "password" => "$hash", 
                      "salt" => "$salt"
                   );  
        }         
    }         

?>

