
let player = document.querySelector('#title');
console.log(player);

const buttons = document.querySelectorAll('.svg');

buttons.forEach(button => {
    button.addEventListener("click", () => {
        player.play();
    });
});

const buttons1 = document.querySelectorAll('.svg2');

buttons1.forEach(button => {
    button.addEventListener("click", () => {
        player.pause();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    let authorListItems = document.querySelectorAll('#author-list li');
    let songItems = document.querySelectorAll('.song-item');
  
    authorListItems.forEach(item => {
      item.addEventListener('click', () => {
        let author = item.textContent;
        updateSongs(author);
      });
    });
  
    function updateSongs(author) {
      authorName.textContent = author;
  
      songItems.forEach(item => {
        let songAuthor = item.getAttribute('data-author');
        let displayStyle = songAuthor === author ? 'block' : 'none';
  
        // Ajoutez ou retirez la classe .hidden en fonction de l'auteur sélectionné
        item.style.display = displayStyle;
  
        // Mettez en pause ou lancez la lecture en fonction de l'auteur sélectionné
        let audioPlayer = item.querySelector('.title');
        if (displayStyle === 'block') {
          audioPlayer.play();
        } else {
          audioPlayer.pause();
        }
      });
    }
  });

 document.addEventListener('DOMContentLoaded', function() {


 
  let searchButton = document.getElementById('search-button');
  let searchInput = document.getElementById('search-input');
  

  searchButton.addEventListener('click', function() {
    let searchValue = searchInput.value.trim().toLowerCase();
    searchSongs(searchValue);
    
 
  });

  function searchSongs(searchValue) {
  
    songItems.forEach(item => {
      item.style.display = 'block';
    });

    
    if (searchValue !== '') {
      songItems.forEach(item => {
        let songAuthor = item.getAttribute('data-author').toLowerCase();
        let displayStyle = songAuthor.includes(searchValue) ? 'block' : 'none';
        item.style.display = displayStyle;
      });
    }
  }
});


document.addEventListener('DOMContentLoaded', function () {
  const commentForms = document.querySelectorAll('.comment-form');

  commentForms.forEach(form => {
      form.addEventListener('submit', function (e) {
          e.preventDefault();

        
          const comment = form.querySelector('.comment-input').value;
          const songId = form.dataset.songId;

         
          sendComment(songId, comment);

         
          form.querySelector('.comment-input').value = '';
      });
  });

 
  function sendComment(songId, comment) {
      
      fetch('comment_handler.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
          },
          body: JSON.stringify({ songId: songId, comment: comment }),
      })
      .then(response => response.json())
      .then(data => {
          
          console.log(data);
      })
      .catch(error => {
          console.error('Error:', error);
      });
  }
});











