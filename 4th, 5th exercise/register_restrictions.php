<?php	if ( $name == "" || $surname == "" || $age == "" || $password == "" || $username == "" || $email == "") {		echo application_error("Please fill in all forms.");	} 		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {		application_error("<p>E-mail is not valid.Click <a href='index.php'> here</a> to visitthe Boom Uploader starting page </p>");	}  	else if ($_POST['age']<13) {		application_error("<p id='error'> $name I'm afraid you are to young to register to Boom Uploader..		Wait some years, until you are 13 and then discover the imagine world of  Boom Uploader !! 		Click <a href=index.php> here</a> to visit the Boom Uploader starting page </p>");	}  ?>						