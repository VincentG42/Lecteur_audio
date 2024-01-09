<?php
require_once('../partials/header.php');
include_once('../process/treatment_titles.php');
include_once('../process/connect_db.php');

?>

<div class="songs_container w-100">
  
  <div class="w-50 my-5">
  <?php foreach ($songs as $song) { ?>
    <div class="songs_card  row p-3">
      

        <img class="minipic col-1" src="../img/<?= $song['pictures'] ?>">
        <div class="col-4 d-flex justify-content-around">
          <p><?= $song['title'] ?></p>
          <p><?= $song['singer'] ?></p>
        </div>
     
        <audio class="title col-4" controls>
            <source src="../mp3/<?=$song['track'] ?>"></source>
        </audio>
        
        <form action="../process/treatment_add_to_playlist.php" method="post" class=" col-3 d-flex">
              <select name="playlist" id="" class="form-select">
                <option>Choississez votre playlist</option>
                    <?php foreach($playlists as $playlist){?>
                    <option value="<?=$playlist['id']?>"><?=$playlist['name']?></option>
                    <?php } ?>
              </select>
            <input type="hidden" name="song_id" value="<?=$song['id'] ?>">
            <button type="submit" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path opacity="1" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
        </form>
   
         
         
      <div class="mb-3 col-11"><!--commentaires-->
        <form form action="../process/treatment_comment.php" method="post" class="row">
          <input type="hidden" name="pseudo" value="<?=$_SESSION['pseudo'] ?>">
          <input type="hidden" name="song_id" value="<?=$song['id'] ?>">

          <label for="exampleInputPassword1" class="form-label col-2">Ecrivez Votre commentaire</label>
          <input type="text" class="form-control col-5" id="text" name="content">
          <button type="submit" class="btn btn-dark col-2">Envoyer</button>
        </form>
      </div>
    </div>
    <?php } ?>

  </div>

</div>



  <script type="text/javascript" src="../js/main.js"></script>
  <?php
  require_once('../partials/footer.php');
  ?>