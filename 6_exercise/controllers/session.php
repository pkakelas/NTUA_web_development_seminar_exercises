<?php
 
    class SessionController {

		public static function create($username2, $password2) {
		    include 'models/user.php';
		    include 'models/sql.php';
		    $result = UserModel::authenticate($username2, $password2);
		    if ($result) {
                $variables = array(
                    'username' => $_SESSION['username']
                );
		        view("home", "html", $variables);
		    }
		    else {
		        view("session_create_false", "html");   
		    }   
		}
		
		public static function create_view() {
		    view("session_create", "html");
		}
    }
