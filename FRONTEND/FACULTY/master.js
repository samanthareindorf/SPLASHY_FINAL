$(function() {
    var files=$("#files");

    //@Hamed things to change 
    // var fileTypeAllowed=/.\.(xlsx|xls|csv|pdf)$/i; 
    // should be (image/jpeg)
    // so var fileTypeAllowed=/.\.(jpeg|jpg|png)$/i;
    // url:'home.php every Other thing is the same'



    //for fileupload
    $("#fileupload").fileupload({
        url:'master.php',
        dropZone:'#dropZone',
        dataType: 'json',
        autoUpload: false

    }).on('fileuploadadd', function(e, data){
        var fileTypeAllowed=/.\.(xlsx|xls|csv|pdf)$/i;
        var fileName=data.originalFiles[0]['name'];
        var fileSize=data.originalFiles[0]['size'];
        if(!fileTypeAllowed.test(fileName))
        $('#error').html('Only Excel files are allowed!');

        else if (fileSize > 5000000)
        $('#error').html('File is too large');
        
        else{
            data.submit();
        }

    } ).on('fileuploaddone', function(e, data){
        var status=data.jqXHR.responseJSON.status;
        var msg=data.jqXHR.responseJSON.msg;


        //file has been uploaded
        if(status==1){
            var path=data.jqXHR.responseJSON.path;
            $('#files').fadeIn().append('<p><img src="+path+"</p>');
           



        }

    }).on('fileuploadprogressall', function(e, data){
        var progress=parseInt(data.loaded / data.total *100, 10);
        $('#progress').html("Completed: " + progress + "%");

    });

});


//IF CLICKED DIRECT THE STUDENT TO UPLOADS FOLDER
$(document).ready(function () {
    $("#downlink").click(function (e) {
        e.preventDefault();
        window.location.href = "uploads/";
    });
});



// var imageLoader = document.getElementById('filePhoto');
// imageLoader.addEventListener('change', handleImage, false);

// function handleImage(e) {
//     var reader = new FileReader();
//     reader.onload = function (event) {
//         $('.uploader img').attr('src',event.target.result);
//     }
//     reader.readAsDataURL(e.target.files[0]);
// }

// Edit for multiple images
// I didn't try but it should work.
// Also you need write some CSS code to see all images in container properly.
// function handleImages(e) {
//     $('.uploader img').remove();
//     for(var i = 0; i < e.target.files.length; i++){
//         var reader = new FileReader();
//         reader.onload = function (event) {
//             var $img = $('<img/>');
//             $img.attr('src', event.target.result);
//             $('.uploader').append($img);
//         }
//         reader.readAsDataURL(e.target.files[i]);
//     }
// }