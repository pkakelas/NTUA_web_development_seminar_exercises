<?php	function sql_sign_in($username, $password) {  // The function that makes the sign in sql query to the db. 		include '..\models\sql.php';		$sql=			"SELECT				name 			FROM 				users 			WHERE 				username='$username' and password='$password'";		$result = $con->query($sql);		if (!$result) {			echo "good";		}		$row=mysqli_fetch_array($result);		$count=mysqli_num_rows($result);		if ($count>0) {			return "1";		}		else			return "0";		}			function sql_register($name,  $surname,  $age,  $username,  $password, $email) { 		include '..\models\sql.php'; //The function that adds a new user. It doesn't contain the restriction.		$sql=			"INSERT INTO 				`users` ( `name` ,`surname` ,`age` ,`username` ,`password` ,`email` )			VALUES				( '$name',  '$surname',  '$age',  '$username',  '$password',  '$email' )";			if (mysqli_query($con, $sql)) {			return "1";			}		else {			return "0";		}	}?>