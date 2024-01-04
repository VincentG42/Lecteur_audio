<?php
require_once('../partials/header.php');
include_once('../process/treatment_user.php');
?>

<div class="user_card container">
    <h2>Hello <?= $user['pseudo']?></h2>
    <div>
        <h3>Votre playlist</h3>
        <?php if (!empty($playlist)){ 
        foreach($playlist as $song){?>
            <p> <?= $song['title']?><span><?= $song['singer']?></span></p>
        <?php }}else{ ?>
                <p> Vous n'avez pas encore de playlist </p>
        <?php } ?>
            
    </div>
    <div>
        <form action="../process/add_playlist.php" method="post">
            <label for="playlist_name" class="form-label">PLaylist Name </label>
            <input type="text" class="form" name="playlist_name" id="playlist_name" Value="Ma playlist">

            <button type="submit" class="btn btn-black">+ Creer une playlist +</button>
        </form>
    </div>


</div>



<?php
    require_once('../partials/footer.php');
?>