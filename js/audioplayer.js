audioPlayer();


let audio= document.querySelector('audio');
console.log( $("#audioplayer")[0]);



function audioPlayer(){

    let currentSong =0;
    let audioPlayer = document.querySelector('#audioplayer');

    $("#audioplayer")[0].src =$("#playlist li a")[0];
    $("#audioplayer")[0].play();

    $("#playlist li a").click(function (e){
        e.preventDefault();
        $("#audioplayer")[0].src = this;
        $("#audioplayer")[0].play();
        currentSong =$(this).parent().index();    
    })

    audioPlayer.addEventListener("ended",function () {
        currentSong++;
        if (currentSong == $("#playlist li a").length)
            currentSong = 0;
        audioPlayer.src = $("#playlist li a")[currentSong].href;
        audioPlayer.play(); 
    });

    let forward = document.querySelector('#forward')

    forward.addEventListener("click",function () {
        currentSong++;
        if (currentSong == $("#playlist li a").length)
        currentSong = 0;
        audioPlayer.src = $("#playlist li a")[currentSong].href;
        audioPlayer.play(); 
    });

    let backward = document.querySelector('#backward')

    backward.addEventListener("click",function () {
        currentSong--;           
        audioPlayer.src = $("#playlist li a")[currentSong].href;
        audioPlayer.play(); 
    });

    let currentIndex = $("#playlist li a").length;

    function entierAleatoire(max){
        indexRandom = Math.floor(Math.random() * (max - 0 + 1));
        return  indexRandom
    }


    let shuffleNext= document.querySelector('#shuffle')
    
    shuffleNext.addEventListener("click",function () {       
        
        entierAleatoire(currentIndex)
        audioPlayer.src = $("#playlist li a")[indexRandom].href;
        audioPlayer.play(); 
    });

    // let onPlay= document.querySelector('#onplay');
    // $trackOnPLay = $("#audioplayer")[0].src.split('/')[6].split('.')[0];
    // console.log($trackOnPLay);
    // onPlay.innerHTML ="En cours de lecture: "+$trackOnPlay    
}





    
    
    
        
     


