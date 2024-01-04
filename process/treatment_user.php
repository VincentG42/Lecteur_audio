<?php
session_start();
$pseudo = $_SESSION['pseudo'];

require_once('../process/connect_db.php');


$request = $database->query("SELECT * FROM user WHERE pseudo='$pseudo'");

$user = $request->fetch();





$request = $database->query("SELECT user.pseudo, playlist.name, song.title, song.singer FROM user 
                                JOIN playlist ON user.id= playlist.user_id 
                                JOIN playlist_song ON playlist.id=playlist_song.playlist_id 
                                JOIN song ON playlist_song.song_id=song.id 
                                WHERE user.pseudo= '$pseudo';
                            ");

$playlist = $request->fetch();

