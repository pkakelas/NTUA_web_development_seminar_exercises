<?php

    class session_controller {
    
        public static function create($username2, $password2) {
            include 'models/sessions.php';
            include 'models/user.php';
            include 'models/sql.php';
            $result = sign_in($username2, $password2);
            if ($result) {
                $_SESSION['username'] = $username;
                header('Location: index.php?resource=file&method=create');
            }
            else {
                include 'views/sign_in_false.php';  
            }   
        }
        
        public static function create_view() {
            include 'views/sign_in.php';
        }
    }