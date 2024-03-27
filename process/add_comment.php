<?php
require_once('../process/connect_db.php');

$songId = $_POST['song_id'];
$userId = $_POST['user_id'];
$content = $_POST['comment'];

  $request = $database->prepare("INSERT INTO comment (user_id, song_id, content ) VALUES (:user_id, :song_id, :content)");

    $request -> bindValue('user_id', $userId, PDO::PARAM_INT);
    $request -> bindValue('song_id', $songId,PDO::PARAM_INT);
    $request -> bindValue('content', $content, PDO::PARAM_INT);

    
        $request->execute();



header('Location: ../pages/titles.php');

?>