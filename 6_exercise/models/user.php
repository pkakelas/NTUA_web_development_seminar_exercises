<?php
    
    function sign_in($username, $password) {  // The function that makes the sign in sql query to the db.
        
        include 'models/encryption.php';
        include 'models/sql.php';
        $sql =	"SELECT	password, salt
                FROM users 
                WHERE 	username = '$username'";
        $result = $con->query($sql);
        if (!$result) {
        echo "problem";	
        }	
        $row = mysqli_fetch_array($result);
        $result = sign_in_check($password, $row['salt'], $row['password']);
        if ($result) {
            return true;	
        }
    }
    
    function register($name,  $surname,  $age,  $username,  $password, $email) {	
        include 'models/sql.php'; 	//The function that adds a new user. It doesn't contain the restriction.
        include 'models/encryption.php';		
        $name = addslashes($name); 		
        $surname = addslashes($surname);		
        $age = addslashes($age);
        $email = addslashes($email);
        $username = addslashes($username);
        $enc_result = encryption($password);
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
    
    function username_exists($username) { 
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

?>
