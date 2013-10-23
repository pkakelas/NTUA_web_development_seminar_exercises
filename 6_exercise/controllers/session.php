<?php
 
    class SessionController {

		public static function create($username2, $password2) {
		    include 'models/user.php';
		    include 'models/sql.php';
		    $result = UserModel::authenticate($username2, $password2);
		    if ($result) {
		        $_SESSION['username'] = $username;
		        header('Location: index.php?resource=file&method=create');
		    }
		    else {
		        include'views/session_create_false.php';  
		    }   
		}
		
		public static function create_view() {
		    include 'views/session_create.php';
		}
    }

?>	
