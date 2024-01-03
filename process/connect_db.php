<?php


try{

    $dsn = 'mysql:host=localhost;dbname=tp-spotify';
    
    $username = 'root';
    $password = ''; 
    
    $database = new PDO($dsn, $username, $password);
}

catch(Exception $message){

    echo "probleme <br>". $message;
}