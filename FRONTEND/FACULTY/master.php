<!--php section--> 

<?php 
//if attachments have been uploaded send to uploads folder
if(isset($_FILES['attachments'])){
    $msg="";
    $targetFile="uploads/" . basename($_FILES['attachments']['name'][0]);

    //check if file exists
    if(file_exists($targetFile))
    $msg=array("status"=>0, "msg"=> "File already exists!");

    elseif (move_uploaded_file($_FILES['attachments']['tmp_name'][0], $targetFile));
    $msg=array("status"=>1, "msg"=>"File has been uploaded", "path"=> $targetFile);

    exit(json_encode($msg));
}



?>
<!--php section ended, html begins--> 




<!--hyml section--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Calendar</title>
    <link rel="stylesheet" href="testing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!--jquery link--> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="js/jquery.iframe-transport.js" type="text/javascript"></script>

    <script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>

    <script src="js/jquery.fileupload.js" type="text/javascript"></script>

    <!--custom javascript file--> 
    <script src="master.js"></script>


    <!--custom css file--> 
    <link rel="stylesheet" href="master.css">

</head>
<body>

<div class="container-fluid h-100 bg-light text-dark">
    <img src="ashLogo.png" alt="Ashesi Logo">
  
  
  
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3" id="dropZone">
        <h1>Drag and Drop Files</h1>
        <input type="file" id="fileupload" name="attachments[]" multiple><br>
        <!--download button--> 

        <!-- <a href="" id="downlink" download="">
        <button class="btn"><i class="fa fa-download"></i> Download All Calendars for the Semester</button>
        </a> -->
     
    </div>
    <h1 id="progress"></h1><br>
    <h1 id="error"></h1><br>

    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3" id="files"></div>

    

  
</div>


    
</body>
</html>