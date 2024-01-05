<?php
require_once('../partials/header.php');
include_once('../process/treatment_singers.php');
include_once('../process/connect_db.php');
?>
<div class="d-flex justify-content-center">
<form id="search-form">
  <label for="search-input">Rechercher par auteur : </label>
  <input type="text" id="search-input" name="search" placeholder="Entrez le nom de votre zik">
  <button type="button" id="search-button">Rechercher</button>
</form>
</div>
<?php foreach ($songs as $song) { ?>
  <div class="songs_unit row justify-content-center align-items-center song-item hidden" data-author="<?= $song['singer'] ?>">

    <img class="minipic col-3" src="../img/<?= $song['pictures'] ?>">
    <div class="col-6">
      <p><?= $song['title'] ?></p>
      <p><?= $song['singer'] ?></p>
    </div>
    <div class="col-2 d-flex">
      <audio class="title" controls>
        <source src="../mp3/<?=$song['track'] ?>">
      </audio>
    </div> 
  </div>
<?php } ?>



<div class="songs_container w-100 bg-secondary">
  <div class="songs_card w-50 my-5 bg-light">
    

 



<script type="text/javascript" src="main.js"></script>
  <?php
  require_once('../partials/footer.php');
  ?>