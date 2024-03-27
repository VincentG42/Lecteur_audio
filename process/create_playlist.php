<?php
require_once('../process/connect_db.php');
session_start();
$pseudo = $_SESSION['pseudo'];

$request = $database->query("SELECT * FROM user WHERE pseudo='$pseudo'");

$user = $request->fetch();

$user_id = $user['id'];
$playlist_name = htmlspecialchars($_POST['playlist_name']);

$request = $database->query("SELECT * FROM playlist WHERE name='$playlist_name' AND user_id ='$user_id'");

$playlist_exist = $request->fetch();

if(!$playlist_exist){

        
        $request = $database->prepare("INSERT INTO playlist (name, user_id) VALUES (:name, :user_id)");

        $request -> bindValue('name', $playlist_name, PDO::PARAM_INT);
        $request -> bindValue('user_id', $user['id'], PDO::PARAM_INT);
        $resultat = $request->execute();
}



header('Location: ../pages/user.php')
        ?>