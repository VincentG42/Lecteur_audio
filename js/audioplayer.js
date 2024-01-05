
audioPlayer();


function audioPlayer(){
    let currentSong =0
    $("#audioplayer")[0].src =$("#playlist li a")[0];
    $("#audioplayer")[0].play();
    $("#playlist li a").click(function (e){
        e.preventDefault();
        $("#audioplayer")[0].src = this;
        $("#audioplayer")[0].play();
        $("#playlist li").removeClass("current_song");
        currentSong =$(this).parent().index();
        $(this).parent.addClass("current_song");    
    })
    
}

