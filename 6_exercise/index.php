<?php 

    session_start();  
    include 'views/layout.php';

    $methods = array(
        'create' => 1,
        'get' => 0,
        'listing' => 1
    );
    if (isset( $_GET[ 'resource' ])) {
        $resource = $_GET['resource']; 
    }
    else {
        $resource = '';
    }
    if (isset($_GET['method'])) {
        $method = $_GET['method'];
    }
    else {
        $method = '';
    }
    if (!isset($methods[$method])) {
       die(view ("main", $variables, "html"));    
    }
    switch ($_SERVER['REQUEST_METHOD']){
        case 'POST':
            if (!empty($_FILES['file'])) {
                $_FILES['filename'] = $_FILES["file"]["name"]; 
                $_FILES['filetype'] = $_FILES["file"]["type"];         
                $_FILES['filesize'] = $_FILES["file"]["size"]; 
                $_FILES['tmp_name'] = $_FILES["file"]["tmp_name"]; 
                $http_vars = array($_FILES, $_POST);
            }
            else {
                $http_vars = $_POST;
            }
            break;
        case 'GET':
            $http_vars = $_GET;
            break;
    }
    if ($methods[$method] == 1 && $_SERVER['REQUEST_METHOD'] != 'POST') {
        $method = $method . '_view';
    }
    $resource = basename( $resource );
    $filename = 'controllers/' . $resource . '.php';
    include $filename;
    $resource = ucwords(strtolower($resource));
    $controllername = $resource  . 'Controller';
    $methodname = $method;
    $reflection = new ReflectionMethod($controllername, $methodname);
    $parameters = $reflection->getParameters();
    $arguments = array();
    if ($http_vars = '$_GET') {
        foreach ($parameters as $parameter) {
            if (isset($http_vars[$parameter->name])) {
                $arguments[] = $http_vars[$parameter->name];
            }
            else {
                echo "fuck2"; 
            }
        }   
    }
    else {
        foreach ($http_vars as $value) {
            foreach ($parameters as $parameter) {
                if (isset($value[$parameter->name])) {
                    $arguments[] = $value[$parameter->name];
                }
                else {
                    echo "fuck1";    
                }
            }
        }
    }
        
    call_user_func_array(array($controllername, $methodname), $arguments);
        
?>

