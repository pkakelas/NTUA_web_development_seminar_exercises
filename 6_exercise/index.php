<?php 

    
    session_start();  

    $methods = array(
		'create' => 1,
		'sign_in' => 1,
		'listing' => 1,
		'get' => 0
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
		die(include 'views/main.php');
	}
	switch ($_SERVER['REQUEST_METHOD']){
		case 'POST':
				$http_vars = $_POST;
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
	foreach ($parameters as $parameter) {
		if (isset($http_vars[$parameter->name])) {
			$arguments[] = $http_vars[$parameter->name];
		}
		else {
			$arguments[] = $parameter->getDefaultValue();
		}
	}
		
	call_user_func_array(array($controllername, $methodname), $arguments);
		
?>

