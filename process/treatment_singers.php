<?php

require_once('../process/connect_db.php');


$request = $database->query("SELECT * FROM song");
    $songs = $request->fetchAll();

?>

    <?php
    
    if(
        isset($_POST["title"]) && !empty($_POST["title"])
        
    ) { 
    
    $research = $_POST['title'];
    
    $request = $database->query('SELECT song FROM title WHERE singer LIKE "%' . $research . '%"');
    
    $title = $request->fetch();
    
    
    } else {
    $request = $database->query('SELECT * FROM song ORDER BY title DESC');
    
    $allUsers = $request->fetch();
    }
    ?>

?>