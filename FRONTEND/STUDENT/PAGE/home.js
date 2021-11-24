function openChat(){
    window.open('../CHAT/homeChat.php');
}


//for emoji
$(document).ready(function () {
    $('#exampleFormControlTextarea1').emojioneArea({
        pickerPosition:"bottom"
    });
    
});


//for like button

var likeBtn=document.getElementById('likeBtn')
;


//to change the button onclick
function likeFeature()
{

 if(likeBtn.classList.contains("far"))
    { 
    likeBtn.classList.remove("far");
    likeBtn.classList.add("fas");     
    }else
    {
     likeBtn.classList.remove("fas");
     likeBtn.classList.add("far"); 
    }
}
