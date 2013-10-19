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
                view("sign_in_false");  
            }   
        }
        
        public static function create_view() {
            view("sign_in");
        }
    }