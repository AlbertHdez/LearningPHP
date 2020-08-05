<?php

require_once 'ModelBase.php';

class Note extends ModelBase{
	protected 
		$title,
		$description,
		$user_id;

	public function __construct(){
		parent::__construct();
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($value){
		$this->title = $value;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($value){
		$this->description = $value;
	}

	public function getUserId(){
		return $this->user_id;
	}

	public function setUserId($value){
		$this->user_id = $value;
	}

	public function save(){
		$sql = "INSERT INTO notes(user_id, title, description, date) VALUES({$this->user_id}, '{$this->title}', '{$this->description}', CURDATE())";

		$save = $this->db->query($sql);

		return $save;
	}
}