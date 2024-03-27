<?php

require_once("../process/connect_db.php");
// var_dump($_POST["pseudo"]);

session_start();


if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){


    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $_SESSION['pseudo']= $pseudo;
    var_dump($pseudo);
    $request = $database->query("SELECT id FROM user WHERE pseudo = '$pseudo' ");
        $pseudoexist = $request->fetch();

    if ($pseudo === 'admin'){
        header("Location: ../pages/admin.php");

    } else if (!$pseudoexist) {
        $request = $database->prepare("INSERT INTO user (pseudo) VALUES (:pseudo)");

        $request ->bindValue('pseudo', $pseudo, PDO::PARAM_INT);
        $resultat = $request->execute();
        header("Location: ../pages/user.php");
    
    }else{
        header("Location: ../pages/user.php");
    };

}
    




?>