<?php	function randomsalting() {		$max = 32;		$salt = openssl_random_pseudo_bytes($max);		return $salt;	}		function encryption($password) {		$salt = randomsalting();		$hash = hash('sha256', $password . $salt);		return array("password" => "$hash","salt" => "$salt");	}			function sign_in_check($password, $salt, $hash) {		$user = hash('sha256', $password . $salt);		$sql = $hash;		if ($user == $sql) {			return true;		}	}	?>  