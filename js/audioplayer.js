function entierAleatoire(max){
    indexRandom = Math.floor(Math.random() * (max - 0 + 1));
    return  indexRandom
}
let shuffleNext= document.querySelector('#shuffle');


audioPlayer();


function audioPlayer(){

    $("#audioplayer")[0].src = $("#playlist li a")[0];
    $("#audioplayer")[0].play();

    $("#playlist li a").click(function (e){
        e.preventDefault();
        $("#audioplayer")[0].src = this;
        $("#audioplayer")[0].play();
        currentSong =$(this).parent().index(); 
    })

    let currentIndex = $("#playlist li a").length;
    let currentSong =0;
    let audioPlayer = document.querySelector('#audioplayer');

    audioPlayer.addEventListener("ended",function () {
        if (shuffleNext.checked === true){
            entierAleatoire(currentIndex)
            audioPlayer.src = $("#playlist li a")[indexRandom].href;
            audioPlayer.play(); 
        }else{
            currentSong++;
            if (currentSong == $("#playlist li a").length){
                currentSong = 0}
                audioPlayer.src = $("#playlist li a")[currentSong].href;
                audioPlayer.play(); 
            }
    });

    let forward = document.querySelector('#forward')

    forward.addEventListener("click",function () {
        if (shuffleNext.checked === true){
            entierAleatoire(currentIndex)
            audioPlayer.src = $("#playlist li a")[indexRandom].href;
            audioPlayer.play(); 
        }else{
            currentSong++;
            if (currentSong == $("#playlist li a").length){
            currentSong = 0}
            audioPlayer.src = $("#playlist li a")[currentSong].href;
            audioPlayer.play(); 
        }
    });

    let backward = document.querySelector('#backward')

    backward.addEventListener("click",function () {
        if (shuffleNext.checked === true){
            entierAleatoire(currentIndex)
            audioPlayer.src = $("#playlist li a")[indexRandom].href;
            audioPlayer.play(); 
        }else{
         currentSong--;           
            audioPlayer.src = $("#playlist li a")[currentSong].href;
            audioPlayer.play(); 
        }
    });
    audioPlayer.addEventListener('play', ()=>{
            let currentTitle = document.querySelector('.current_title')

            currentTitle.innerHTML= "Titre en cours : <i>"+audioPlayer.src.split('/')[6].split('.')[0]+"</i>";
        // console.log(audioPlayer.src.split('/')[6].split('.')[0]);
    })
}






    
    
    
        
     


