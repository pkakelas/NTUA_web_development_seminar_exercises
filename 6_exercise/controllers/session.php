<?php
 
    class SessionController {

        public static function create($username2, $password2) {
            include 'models/user.php';
            include 'models/sql.php';
            $result = UserModel::authenticate($username2, $password2);
            if ($result) {
                $_SESSION['username'] = $username2;
                view(
                    'home',
                    array('username' => $_SESSION['username']), 
                    'html'
                );
            }
            else {
                view("session_create_false", array(), "html");   
            }   
        }
        
        public static function create_view() {
            view("session_create", array(), "html");
        }
    }

?>

