<?php
require_once('../process/connect_db.php');
// echo 'post';
// var_dump($_POST);
// echo 'files';
// var_dump($_FILES);

if (isset($_POST["title"]) && !empty($_POST["title"])
    &&isset($_POST["singer"]) && !empty($_POST["singer"])
    &&isset($_FILES["image"]) && !empty($_FILES["image"])
    &&isset($_FILES["mp3"]) && !empty($_FILES["mp3"])
    ){

        $title = $_POST["title"];
        $singer = $_POST["singer"];
        $img = $_FILES["image"];
        $mp3 = $_FILES["mp3"];
        $album = $_POST["album"];

        move_uploaded_file($_FILES['image']['tmp_name'], '../img/' . basename($_FILES['image']['name']));
        move_uploaded_file($_FILES['mp3']['tmp_name'], '../mp3/' . basename($_FILES['mp3']['name']));

        $requete = $database->prepare("INSERT INTO song (title, album, pictures, track, singer) 
                                        VALUES (:title,:album,:pictures,:track, :singer)");

            $result = $requete->execute(['title' => $title, 
                                        'album' => $album, 
                                        'pictures' => $img['name'], 
                                        'track' => $mp3["name"],
                                        'singer' => $singer
                                    ]);

    }
    header('Location: ../pages/admin.php')
?>

