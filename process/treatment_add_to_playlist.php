<?php
// session_start();
require_once('../process/connect_db.php');

// var_dump($_SESSION);
var_dump($_POST);
$playlistId = intval($_POST['playlist']);
$songId = intval($_POST['song_id']);


$request = $database->prepare("INSERT INTO playlist_song (playlist_id, song_id) VALUES (:playlist_id, :song_id)");

$request ->bindValue('playlist_id', $playlistId, PDO::PARAM_INT);
$request ->bindValue('song_id', $songId, PDO::PARAM_INT);

$resultat = $request->execute();


    header('Location: ../pages/user.php')
?>
