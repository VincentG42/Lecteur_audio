<?php

require_once('../process/connect_db.php');


$request = $database->query("SELECT * FROM song");
    $singers = $request->fetchAll();

    // var_dump($singers);

?>



