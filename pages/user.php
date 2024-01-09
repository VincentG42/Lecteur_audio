<?php
require_once('../partials/header.php');
include_once('../process/treatment_user.php');
// var_dump($playlists)
if(isset($_POST['playlists'])){
    $playlistID = intval($_POST['playlists']);
    $request = $database->query("SELECT * FROM playlist 
                                JOIN playlist_song ON playlist.id = playlist_song.playlist_id 
                                JOIN song ON playlist_song.song_id = song.id
                                WHERE playlist_id ='$playlistID'");

$playlist_songs = $request->fetchAll();
}

?>

<div class="user_card container-fluid w-100 d-flex flex-column  pt-2 text-light justify-content-center align-items-center">
    <h2>Hello <?= $user['pseudo']?></h2>
    <div class="playlist_wrapper m-4 p-5 d-flex flex-column justify-content-center align-items-center">
        <h3>Vos playlists</h3>
            <?php if (!empty($playlists)){ ?>
                <form action="" id="select_playlist_form" method="post">
                    <select name="playlists" id="">
                            <option>Choississez votre playlist</option>
                        <?php foreach($playlists as $playlist){?>
                            <option value="<?=$playlist['id']?>"><?=$playlist['name']?></option>
                        <?php } ?>
                    </select>
                </form>
                
            <?php }else{ ?>
                    <p> Vous n'avez pas encore de playlist </p>
            <?php } ?>
        <ul>
            <?php if(isset($_POST['playlists'])){
            foreach($playlist_songs as $song){ ?>
                <li class="playlist_song_list d-flex my-2 justify-content-between align-items-center p-1"> 
                    <div class="d-flex align-items-center">

                        <img src="../img/<?=$song['pictures']?>" alt="song cover" height="50px" width="auto" class="m-3">
                       
                            <p><?= $song['title']?><span class="text-secondary"> par </span><i> <?= $song['singer']?></i> </p>
                        
                    </div>
                    <div class="add_playlist col-2 me-5">
                        <form action="../process/treatment_delete_from_playlist.php" method="post" class="">
                            <input type="hidden" name="playlist_id" value="<?=$playlist['id'] ?>">
                            <input type="hidden" name="song_id" value="<?=$song['id'] ?>">
                            <button type="submit" class="btn btn-danger suppr_button">Supprimer de la playlist</button>
                        </form>
                    </div>
                </li>
            <?php } }?>
        </ul>
        <div>
            <form action="../pages/audioplayer_playlist.php" method='post'>
                <input type="hidden" name="playlist_id" value="<?=$playlist['id'] ?>">
                <button type="submit" class="btn btn-dark">Lancer la playlist</button>
            </form>
        </div>
            
    </div>
    <div>
        <form action="../process/create_playlist.php" method="post">
            <label for="playlist_name" class="form-label">Choissisez un nom:  </label>
            <input type="text" class="form" name="playlist_name" id="playlist_name" Value="Ma playlist">

            <button type="submit" class="btn btn-dark">+ Creer une playlist +</button>
        </form>
    </div>


</div>


<script src="../js/autosubmit.js"></script>
<?php
    require_once('../partials/footer.php');
?>