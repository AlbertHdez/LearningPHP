<?php

require_once 'ModelBase.php';

class User extends ModelBase{
	public 
		$firstname,
		$lastname,
		$email,
		$password;

	public function __construct(){
		parent::__construct();
	}

	public function getFirstname (){
		return $this->firstname;
	}

	public function setFirstName ($value){
		$this->firstname = value;
	}

	public function getEmail (){
		return $this->email;
	}

	public function setEmail ($value){
		$this->email = value;
	}
	public function getLastname (){
		return $this->lastname;
	}

	public function setLastname ($value){
		$this->lastname = value;
	}
	public function getPassword (){
		return $this->password;
	}

	public function setPassword ($value){
		$this->password = value;
	}

	

}
