<?php
  
    include 'models/query_helper.php';
    include 'models/encryption.php';

    class UserModel {
        
        public static function register($name,  $surname,  $age,  $username,  $password, $email) {	
            $enc_result = encryption::encrypt($password);
            $password = $enc_result['password'];
            $salt = $enc_result['salt'];
            $sql = prepared_query("INSERT INTO
                                     `users` ( `name`, `surname`, `age`, `username`, `password`, `salt`, `email` )                   
                                   VALUES
                                      (?, ?, ?, ?, ?, ?, ?)", array($name, $surname, $age, $username,
                                                                    $password, $salt, $email));
            if ($sql) {
                return true;
            }
        }	
        
        public static function authenticate($username, $password) {  // The function that makes the sign in sql query to the db.
            $sql = prepared_query("SELECT
                                      password, salt
                                   FROM
                                      users 
                                   WHERE 
                                      username = ?", array($username));            
            if (!$sql) {
                die("problem");	
            }	
            $row = mysqli_fetch_array($sql);
            $result = encryption::authenticate_check($password, $row['salt'], $row['password']);
            if ($result) {
                return true;	
            }
        }

        public static function username_exists($username) { 
            $sql = prepared_query("SELECT
                                      name, surname
                                   FROM
                                      users
                                   WHERE
                                      username = ?", array($username));
            if (!$sql) {
                echo "problem";	
            }	
            $row = mysqli_fetch_array($sql);		
            if ($row) {	
                return true;
            }
            else {
                return false;
            }
        }
    }

?>

