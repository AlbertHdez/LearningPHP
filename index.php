<?php

require_once 'vendor/autoload.php';

// DB conexion
$conexion = new mysqli("localhost", "ADMIN", "Masis12031964", "notes");
$conexion->query("SET NAMES 'utf8'");


// consult to pagination
$consult = $conexion->query("SELECT COUNT(id) as 'total' FROM notes");
$rows = $consult->fetch_object()->total;
$number_elements_page = 2;
// Make pagination
$pagination = new Zebra_Pagination();

// Number of elements to page
$pagination->records($rows);

// Number of elements per page
$pagination->records_per_page($number_elements_page);

$page = $pagination->get_page();

$start = ($page - 1) * $number_elements_page;

$sql = "SELECT * FROM notes LIMIT $start, $number_elements_page";

$notes = $conexion->query($sql);

echo '<link rel="stylesheet" href="vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($note = $notes->fetch_object()){
		echo "<br><h3>{$note->title}</h3>";
		echo "<p>{$note->description}</p> <br> <hr>";
}

$pagination->render();
