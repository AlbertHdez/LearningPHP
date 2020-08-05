<?php

class UserController {

	public function showAll(){

		//Requier the model to use
		require_once 'Models/User.php';

		//Create a new class intance
		$user = new User();
		//Get a list of users 
		$users = $user->getAll('users');

		//Require the view to show
		require_once 'Views/User/show-all.php';
	}

	public function create(){

		//Require the view to show
		require_once 'Views/User/create.php';
	}
}