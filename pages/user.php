<?php
require_once('../partials/header.php');
include_once('../process/treatment_user.php')
?>

<h2>Hello <?= $user['pseudo']?></h2>
<div class="user_card container">

</div>



<?php
    require_once('../partials/footer.php');
?>