<?php
// session_start();
require_once('../process/connect_db.php');

// var_dump($_SESSION);
var_dump($_POST);
$playlist_id = intval($_POST['playlist']);
$song_id = intval($_POST['song_id']);


$request = $database->prepare("INSERT INTO playlist_song (playlist_id, song_id) VALUES (:playlist_id, :song_id)");
$resultat = $request->execute(['playlist_id' => $playlist_id,
                                'song_id' => $song_id
]);


 header('Location: ../pages/user.php')
?>
