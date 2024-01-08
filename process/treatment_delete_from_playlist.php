
<?php

require_once('../process/connect_db.php');

$playlist_id = intval($_POST['playlist_id']);
$song_id = intval($_POST['song_id']);
var_dump($_POST);

$request = $database->prepare("DELETE FROM playlist_song WHERE playlist_id='$playlist_id' AND song_id='$song_id'");
$resultat = $request->execute();



header('Location: ../pages/user.php');

?>
