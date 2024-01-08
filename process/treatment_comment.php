<?php
session_start();
include_once('../process/connect_db.php');




if(isset($_POST['pseudo'], $_POST['content'])) {
    
    $pseudo = $_POST['pseudo'];
    $content = $_POST['content'];
    $song_id = $_POST['song_id'];
    
$request =$database->query("SELECT * FROM user WHERE pseudo ='$pseudo'");

$user = $request->fetch();


    
 

        $user_id = $user['id'];
       

    
        $request = $database->prepare("INSERT INTO comment (song_id, user_id, content ) VALUES (:song_id, :user_id, :content)");
        $request->execute([
            'song_id' => $song_id,
            'user_id' =>$user_id,
            'content' =>$content,

        ]);

        

    }

?>