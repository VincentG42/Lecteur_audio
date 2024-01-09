<?php
require_once('../process/connect_db.php');

$song_id = $_POST['song_id'];
$user_id = $_POST['user_id'];
$content = $_POST['comment'];

  $request = $database->prepare("INSERT INTO comment (user_id, song_id, content ) VALUES (:user_id, :song_id, :content)");
        $request->execute([
            'user_id' =>$user_id,
            'song_id' => $song_id,
            'content' =>$content

        ]);



header('Location: ../pages/titles.php');

?>