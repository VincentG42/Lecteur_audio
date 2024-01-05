let playlistChose = document.querySelector('select');
let playlistChoseForm = document.querySelector('#select_playlist_form')

console.log(playlistChose)


playlistChose.addEventListener('change', ()=>{

     if (playlistChose.value){
            playlistChoseForm.submit()
        }


})
// let playlistChose = document.querySelector('.playlist_choice');
// let playlistChoseForm = document.querySelector('#select_playlist_form')

// console.log(playlistChose)


// playlistChose.addEventListener('click', ()=>{

//      if (playlistChose.value){
//             playlistChoseForm.submit()
//         }


// })

