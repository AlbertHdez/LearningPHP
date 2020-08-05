<?php

//Create the autoload function 
function autoload($className){
	//Include the dynamic directory of controllers
	include_once "Controllers/{$className}.php";
}

//Call at the autoload register with the autoload function's name as parameter
spl_autoload_register('autoload');