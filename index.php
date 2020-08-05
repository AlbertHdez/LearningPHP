<?php
//Require autoload
require_once 'autoload.php';

echo "<h1>Bienvenido a mi web</h1>";

//Check if the controller variable exist
if($_GET['controller']){
	//Complete the Controller's name
	$controllerName = $_GET['controller']."Controller";
}else{
	echo "Page not found";
	exit(); //If doesn't exist, exit the program
}

//Check if the controller class exists
if(class_exists($controllerName)){
	//Create a new Controller's Intance
	$controller = new $controllerName();
}else{
	echo "Page not found";
	exit();
}

//Check if the action and its method exists
if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
	$action = $_GET['action'];
	$controller->$action(); // Call the action function
}else{
	echo "Page not found";
	exit();	
}

