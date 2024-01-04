<?php
require_once('../partials/header.php');
include_once('../process/treatment_titles.php');
include_once('../process/connect_db.php');
?>



<div class="svg">
<svg xmlns="http://www.w3.org/2000/svg" height="56" width="72"class="d-flex justify-content-center"viewBox="0 0 384 512">
    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/>
  </svg>
</div>
<audio id="title">
  <source src="../mp3/MartijnSchmit-VacsInTheMorning.mp3"></source>
  
</audio>

<div class='svg2'>
<svg xmlns="http://www.w3.org/2000/svg" height="56" width="72" viewBox="0 0 320 512">
  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
<path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"/>
</svg>
</div>

<?php

foreach($songs as $song){ ?>
  <div class="songs_unit">

  <img src="../img/<?= $song['pictures']?>">
  <div>
    <p><?= $song['title']?></p>
    <p><?= $song['singer']?></p>

  </div>
  

    

  </div>
<?php } ?>

<span class="volume">

<a class="stick1" onclick="volume('audioPlayer', 0)"></a>

<a class="stick2" onclick="volume('audioPlayer', 0.3)"></a>

<a class="stick3" onclick="volume('audioPlayer', 0.5)"></a>

<a class="stick4" onclick="volume('audioPlayer', 0.7)"></a>

<a class="stick5" onclick="volume('audioPlayer', 1)"></a>

</span>


<script type="text/javascript" src="main.js"></script>
<?php
    require_once('../partials/footer.php');
?>