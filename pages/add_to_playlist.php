<?php
require_once('../process/connect_db.php');

include_once('../partials/header.php');

// var_dump($_POST);
$pseudo = $_POST['pseudo'];
$songTitle =$_POST['song_title'];

$request = $database->query("SELECT * FROM `song` 
                                
                                WHERE title ='$songTitle';");
    $song = $request->fetch();
$request = $database->query("SELECT * FROM `playlist` 
                                JOIN user ON playlist.user_id=user.id 
                                WHERE user.pseudo ='Vincent';");
    $userPLaylists = $request->fetchAll();
// var_dump($userPLaylists);
// var_dump($song);

?>

<div class="m-5 w-50">
    <img src="../img/<?=$song['pictures']?>" alt="song cover">
    <h3 class="m-2">A quelle playlist souhaitez-vous ajouter "<i><?=$songTitle ?></i>" </h3>
    <form class="m-2" action="../process/treatment_add_to_playlist.php" method="post">
        <label for="playlist-select">Choississez votre playlist:</label>
        <select name="playlist_id" class="form-control w-50" id="playlist-select">
            <option value="">--Please choose an option--</option>
            <?php foreach($userPLaylists as $playlist){ ?>
            <option value="<?=$playlist['id']?>"><?= $playlist['name']?></option>
           <?php } ?>
        </select>
        <input type="hidden" name="song_id" value="<?=$song['id'] ?>">
        <button type="submit" class=" mt-2 btn btn-dark">Ajouter</button>
    </form>
</div>