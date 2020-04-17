<?php 

// Declare variables

$host = "localhost";
$db_name = "yt_colores";

$link = "mysql:host=$host;dbname=$db_name";
$user = "root";
$pass = "";

try{

    $pdo = new PDO($link, $user, $pass);

    echo "Conectado";

}catch(PDOException $err){
    print "ERROR: {$err->getMessage()} <br/>";
    die();
}

