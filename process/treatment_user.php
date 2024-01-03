<?php
session_start();
$pseudo=$_SESSION['pseudo'];
include_once('/laragon/www/PHP-PDO/lecteur-audio/process/connect_db.php');


$request = $database->query("SELECT * FROM user WHERE pseudo='$pseudo'");
        
$user = $request->fetch();

?>