<?php
     
    class session_model {
        
        public static function create($username, $password) {  // The function that makes the sign in sql query to the db.
            include 'models/sql.php';
            $query =	"SELECT
                        password, salt
                     FROM
                        users 
                    WHERE 
                        username = ?";            
            $array = array($username);
            $sql = prepared_query($query, $array);
            if (!$sql) {
            echo "problem";	
            }	
            $row = mysqli_fetch_array($sql);
            $result = session_model::create_check($password, $row['salt'], $row['password']);
            if ($result) {
                return true;	
            }
        }
        
        
        public static function start() {
            session_start();  
        }

        public static function create_check($password, $salt, $hash) {
            $user = hash('sha256', $password . $salt);
            $sql = $hash;
            if ($user == $sql) {
                return true;
            }
        }
    }
     

?>
