<?php
session_start();
require_once('../process/connect_db.php');

$pseudo= $_SESSION['pseudo'];


$request = $database->query("SELECT * FROM song");
    $songs = $request->fetchAll();


    $request = $database->query("SELECT playlist.id, playlist.name, user.pseudo FROM `playlist`
    JOIN user ON playlist.user_id = user.id 
    WHERE pseudo ='$pseudo'");

$playlists = $request->fetchAll();



?>