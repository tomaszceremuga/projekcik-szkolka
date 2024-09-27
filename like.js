let btnlike = document.getElementById('btnlike')
loadLikes()

function Liked() {
    if (btnlike.className == "bi bi-heart") {
        
        addLikes()
    }
    else {
      removeLikes()
    }

}

function loadLikes() {

    $.post('../../src/Likes/GetLikes.php', { article: 'nades' })
        .done((response) => {
         
            $('#count_of_likes').html(response.count);

            if(response.is_filled == 1){
                btnlike.className = "bi bi-heart-fill";
            }
        })
        .catch((error)=>{
       
        })

}

function addLikes()
{
    $.post('../../src/Likes/AddLikes.php', { article: 'nades' })
    .done((response) => {
        
        loadLikes()
        btnlike.className = "bi bi-heart-fill";
    })
    .catch((error)=>{
       
    })
}
function removeLikes()
{
    $.post('../../src/Likes/RemoveLikes.php', { article: 'nades' })
    .done((response) => {
        
        loadLikes()
        btnlike.className = "bi bi-heart"
    })
    .catch((error)=>{
      
    })
}