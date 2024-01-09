<?php
require_once('../partials/header.php');
include_once('../process/treatment_singers.php');

?>
<div class="singers_wrapper mt-4 ms-3 ps-2">

  <?php foreach ($singers as $singer) { ?>
    <h4 class="singer_list text-center w-25"><?= $singer['singer']?></h4>

    <div class="songs_of_singer w-25 text-center text-light">
        <?php if($singer){
            $singerForList=$singer['singer'];
            $request = $database->query("SELECT * FROM song WHERE singer='$singerForList'");
            $songsOfSinger = $request->fetchAll();
          foreach($songsOfSinger as $song){ ?>
          <p><?= $song['title'] ?></p>
         <?php } }?>
    </div>
    
    <?php } ?>
</div>



<script type="text/javascript" src="../js/main.js"></script>
  <?php
  require_once('../partials/footer.php');
  ?>