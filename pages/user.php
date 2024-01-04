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


</div>



<?php
    require_once('../partials/footer.php');
?>