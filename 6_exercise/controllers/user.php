<?php

    class user_controller {
    
        public static function create($name, $surname, $age, $email, $username, $password) {
            function register_validation($name, $surname, $age, $username, $password, $email) {
                $exist = username_exists($username);
                $problems = array();
                if ($name == "" || $surname == "" || $age == "" || $password == "" || $username == "" || $email == "") {
                    $problems[] = "All forms are required";
                }
                if (!is_numeric($age)) {
                    $problems[] = "Age must be a number";
                }
                else if ($age < 13) {
                    $problems[] = "You are to young to register to Boom Uploader.. Wait some years, until you are 13 and then discover the imagine world of  Boom Uploader !!";
                } 
                if ($exist) {
                    $problems[] = "The username exists. Please try another username.";
                }   
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                    $problems[] = "E-mail is not valid.";
                }
                return $problems;
            }
            include 'models/sessions.php';
            include 'models/user.php';
            $problems = register_validation($name, $surname, $age, $username, $password, $email);
            $arrlength = count($problems);
            if (count($problems)) {
                view('register_problems');
            }
            else {
                $result = register($name, $surname, $age, $username, $password, $email); 
                if ($result) {
                    $_SESSION['username'] = $username;
                    include 'views/register_true.php';
                }
                else {
                    include 'views/register_false_query.php';
                }
            }
        }
        
        public static function create_view() {
            include 'views/user_create.php';
        }
   }

?>  
    
