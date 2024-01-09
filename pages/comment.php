<?php
require_once('../process/connect_db.php');
session_start();
include_once('../process/connect_db.php');
include_once('../partials/header.php');


    
$pseudo = $_SESSION['pseudo'];
$song_id = $_POST['song_id'];


$request =$database->query("SELECT * FROM song WHERE id ='$song_id'");
$song = $request->fetch();

    
$request =$database->query("SELECT * FROM user WHERE pseudo ='$pseudo'");
$user = $request->fetch();

$user_id = $user['id'];
       
$request =$database->query("SELECT comment.id, comment.content, user.pseudo, comment.song_id FROM comment JOIN user ON comment.user_id=user.id  WHERE  song_id ='$song_id'"); 
$commentList = $request->fetchAll();

// var_dump($commentList)

    
      
?>

<div class="d-flex flex-column justify-content-center ms-5">
    <div class="">
        <h2 class="text-light"><?= $song['title']?> de <?= $song['singer']?> </h2>
        <img src="../img/<?=$song['pictures'] ?>" alt="pochette chanson" height="200em" width="200em">

    </div>

    <div>
        <h5 class="text-light">Commentaires</h5>
    <?php  foreach($commentList as $comment){?>

        <p class="text-light"><?= $comment['pseudo']?> a écrit: <i><?=$comment['content']?></i></p>

    <?php } ?>
    </div>


    <form action="../process/add_comment.php" method="post">
    <label for="content" class="text-light">Commentaire:</label>
    <input type="text" id="comment" name="comment">
        <input type="hidden" name="song_id" value="<?=$song_id?>">
        <input type="hidden" name="user_id" value="<?=$user['id']?>">

        <button type="submit" class="btn btn-dark">Valider</button>

    </form>

</div>




<?php
include_once('../partials/footer.php');
?>