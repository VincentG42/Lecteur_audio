<?php
require_once('../partials/header.php');
include_once('../process/treatment_titles.php');
include_once('../process/connect_db.php');
?>




<div class="songs_container w-100 bg-secondary">
  <div class="songs_card w-50 my-5 bg-light">
    <?php
   
 

    foreach ($songs as $song) { ?>
      <div class="songs_unit row justify-content-center align-items-center">

        <img class="minipic col-3" src="../img/<?= $song['pictures'] ?>">
        <div class="col-6">
          <p><?= $song['title'] ?></p>
          <p><?= $song['singer'] ?></p>
        </div>
        <div class="col-2 d-flex">
          <audio class="title" controls>
            <source src="../mp3/<?=$song['track'] ?>">
            </source>
          </audio>
        </div> 
      </div>
    <?php } ?>
  </div>
</div>
