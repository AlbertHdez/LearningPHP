<?php

class DB{
	public static function conect(){
		$conexion = new mysqli("localhost", "root", "", "notes");
		$conexion->query("SET NAMES 'utf8'");


		return $conexion;
	}
}