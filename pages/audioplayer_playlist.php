<?php
// var_dump($_POST);
require_once('../process/connect_db.php');
include_once('../partials/header.php');

if (isset($_POST['playlist_id'])){
    $playlistId = $_POST['playlist_id'];

    $request = $database->query("SELECT * FROM playlist_song JOIN song ON playlist_song.song_id = song.id where playlist_id='$playlistId'");


    $playlistToPLay = $request -> fetchAll();
}
var_dump($playlistToPLay);
?>
<div class="audioplayer_wrapper">
        <audio  src="" controls id="audioplayer">
           test
        </audio>

        <ul id="playlist">
            <?php foreach ($playlistToPLay as $song){ ?>
                <li class="current_song">
                    <a href="../mp3/<?= $song['track']?>"> <img src="../img/<?= $song['pictures']?>" alt="" height="20px" width="auto"><?= $song['title']?> - <?= $song['singer']?></a>
                </li>
                
            <?php } ?>
        </ul>
    </div>





    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../js/audioplayer.js"></script>