<?php
include_once('../process/treatment_admin.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotdeez-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body class="p-5">
    <h2>Enregistrer une nouvelle chanson</h2>
    <form action="../process/treatment_admin.php" method="post" enctype= "multipart/form-data">
        <label for="title" class="form-label">Title : </label>
        <input type="text" class="form-control" name="title" id="title">

        <label for="album" class="form-label">Album : </label>
        <input type="text" class="form-control" name="album" id="album">

        <label for="title" class="form-label">Singer : </label>
        <input type="text" class="form-control" name="singer" id="title">

        <label for="title" class="form-label">Image : </label>
        <input type="file"  class="form-control" name="image" id="picture" accept=".jpg, .jpeg, .png">

        <label for="mp3" class="form-label">mp3 : </label>
        <input type="file" class="form-control" name="mp3" id="mp3" accept=".mp3">



    <button type="submit" class="btn btn-dark mt-3">Valider</button>

    </form>
    <a type="button"  class="btn btn-danger my-3" href="../pages/connect.php">Se déconnecter</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>