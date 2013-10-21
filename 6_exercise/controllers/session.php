<?php
 
    class session_controller {

		public static function create($username2, $password2) {
		    include 'models/session.php';
		    include 'models/user.php';
		    include 'models/sql.php';
		    $result = session_model::create($username2, $password2);
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
