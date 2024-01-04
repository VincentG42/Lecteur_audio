

 let player = document.querySelector('#title');
 console.log(player);

const button = document.querySelector('.svg');

 button.addEventListener("click", () => {
    player.play();
    
});

const button1 = document.querySelector('.svg2');

button1.addEventListener("click", () => {
    player.pause();
    
});








player.currentTime = 0;

function play(idPlayer, control) {

    player = document.querySelector('audioPlayer' + idPlayer);

     

    if (player.paused) {

        player.play();

        control.textContent = 'Pause';

    } else {

        player.pause();

        control.textContent = 'Play';

    }

}

 

function resume(idPlayer) {

    let  player = document.querySelector('#' + idPlayer);

     

    player.currentTime = 0;

    player.pause();

}






