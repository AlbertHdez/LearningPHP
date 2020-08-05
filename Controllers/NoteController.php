<?php

class NoteController {
	public function list(){
		//Model
		require_once 'Models/Note.php';

		//Logic
		$note = new Note();
		//Get all notes
		$notes = $note->getAll('notes');
		//View
		require_once 'Views/Note/list.php';
	}
	public function create(){
		//Model
		require_once 'Models/Note.php';

		$note = new Note();
		$note->setUserId(1);
		$note->setTitle("Saludo");
		$note->setDescription("Hola Mundo PHP POO MVC");

		$note->save();
		header("Location: index.php?controller=Note&action=list");
	}
	public function remove(){

	}
}