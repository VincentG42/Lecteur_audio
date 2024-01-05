<?php
session_start();
$pseudo = $_SESSION['pseudo'];

require_once('../process/connect_db.php');


$request = $database->query("SELECT * FROM user WHERE pseudo='$pseudo'");

$user = $request->fetch();


$request = $database->query("SELECT playlist.id, playlist.name, user.pseudo FROM `playlist`
                            JOIN user ON playlist.user_id = user.id 
                            WHERE pseudo ='$pseudo'");

$playlists = $request->fetchAll();




