<?php

require_once('../process/connect_db.php');


$request = $database->query("SELECT * FROM song");
    $songs = $request->fetchAll();






?>