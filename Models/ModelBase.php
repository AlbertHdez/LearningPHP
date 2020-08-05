<?php 

require_once 'Config/DB.php';

class ModelBase{

	public $db;

	public function __construct(){
		$this->db = DB::conect();
	}

	public function getAll($table)
	{
		$query = $this->db->query(
			"SELECT * FROM {$table} ORDER BY id DESC"
		);
		return $query;
	}

}