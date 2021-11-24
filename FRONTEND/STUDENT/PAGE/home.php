<?php
// require_once ('../../../SECURITY/Includes/DB-connection.php');
require_once('../../../BACKEND/databaseCredentials.php');
// require_once('home.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Splashy Index</title>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"> 
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
          <link rel="stylesheet" href="home.css">
          <script src="home.js"></script>

          <!--links for post section--> 
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <link rel="stylesheet" href="emoji/emojionearea.min.css">

          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

         

          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          

      

        <script src="emoji/emojionearea.min.js"></script>

       
         


</head>
<body>



                  <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active p-15">
        <a class="nav-link" href="../../../HOME/index.html">Splashy <span class="sr-only">(current)</span><i class='fas fa-water'></i></a>
      </li>
      <li class="nav-item p-15">
        <a class="nav-link" href="../../seedMain/seedJournal.html">Seed Journal</a>
      </li>
      <li class="nav-item p-15">
        <a class="nav-link" href="../../FACULTY/careerF.php">Faculty</a>
      </li>

    </ul>
    
  </div>
</nav>

<!--sidebar-->
                <div id="sticky" class="d-flex flex-column vh-300 flex-shrink-0 p-3 text-white bg-danger" style="width: 260px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="42"> </svg> <span class="fs-4">SPLASHY</span> </a>
                    <hr>
                    <h5>Students</h5>
                    <hr>
                    <!--home link-->
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item"> <a href="home.php" class="nav-link active" aria-current="page"> <i class="fa fa-home"style="font-size: 23px;"></i><span class="ms-2">Home</span> </a> </li>
                      
                      <!--Master Link-->
                        <li> <a href="../CALENDAR/mc.php" class="nav-link text-white"> <i class="fa fa-graduation-cap" style="font-size:23px"></i><span class="ms-2">Master Calendar</span> </a> </li>

                        <!--EventsLink-->
                        <li> <a href="../EVENT/event.php" class="nav-link text-white"> <i class='fas fa-user-tie' style="font-size: 23px;"></i><span class="ms-2">Events</span></a></li>


                        <!--Clubs Link-->
                        <li> <a href="../CLUB/clubs.php" class="nav-link text-white"> <i class='fas fa-globe-europe' style='font-size:23px'></i><span class="ms-2">Clubs</span> </a> </li>

                        <!--Church Link-->
                        <li> <a href="../CHURCH/denominations.php" class="nav-link text-white"> <i class='fas fa-pray' style='font-size:23px'></i><span class="ms-2">Denominations</span> </a> </li>

                        <!--Entcom Link-->
                        <li id="theatre"> <a href="../ENTERCOM/entcom.php" class="nav-link text-white"> <i  class='fas fa-theater-masks' style='font-size:23px'></i><span class="ms-2">Entcom</span></a></li>

                        <link rel="stylesheet" href="home.css">


                    <!-- </ul>
                    <hr>
                    <h5>Faculty</h5>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto"> -->
                    <!-- <li> <a href="#" class="nav-link text-white"><i class="fa fa-home" style="font-size: 23px;"></i><span class="ms-2">Home</span></a></li> -->
                        
                        <!-- <li> <a href="../../FACULTY/master.php" class="nav-link text-white"> <i class="material-icons" style="font-size: 23px;">school</i><span class="ms-2">Master Calendar</span> </a> </li>
                        <li> <a href="../../FACULTY/careerF.php" class="nav-link text-white"> <i class='fas fa-users' style="font-size: 23px;"></i><span class="ms-2">EVENTS SECTION</span> </a> </li> -->
                       
                    <!-- </ul>
                    <br> -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    

                                  </div>

                <!--viewing others posts--> 
                <!-- Columns are always 50% wide, on mobile and desktop -->
                
                    <div class="container-others">
                    <div class="row">
                      <!-- <div class="col"> -->
                      <?php
                        $sql="SELECT * FROM `posts` ";
                        $result3=mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_assoc($result3)) 

                        { echo "<h5>{$row['post_details']}</h5>"
                          ?>
                          <img id="flex" src="<?=$row['post_image']?>" width="150px" height="300px">
                     
                         
                          <?php
                          
                        }
                    
                        
                      ?>
                      </div>
                     
                    </div>

                    <!-- </div> -->




                <!--posting section--> 
                <div class="container-outer">
                
              <div class="container">

              <div class="row">


                  <form action="home.php" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                      <label for="exampleFormControlTextarea1"><h3>Post Something</h3></label>
                      <textarea class="form-control" name="post_details" id="exampleFormControlTextarea1" rows="6" placeholder="Tell us how you're feeling"></textarea>
                    </div><br>
                    <!--for emjis and others--> 
                    
                    
                    <span><input type="file" name="image" value="Upload files"></span>
                    <!-- <span><button><i class='fas fa-microphone' style='font-size:28px'></i></button></span><br><br> -->
                    <span><button type="submit" name="post_btn" class="btn btn-success">Post</button></span>
                  <!-- <button type="button" class="btn btn-warning">Edit</button>
                  <button type="button" class="btn btn-primary">Reset</button><br><br> -->

                  </form>
                  
              </div>
              </div>
              </div>

              
                 
                   

             <div class="container-fluid">    
                  
                  <?php
                      if(isset($_SESSION["errors"]))
                      {
                          $errors = $_SESSION["errors"];
                          // loop through errors and display them
                          foreach($errors as $error){
                              ?>
                                  <small style="color: red"><?= $error."<br>"; ?></small>
                              <?php
                          }
                      }
                      // destroy session after displaying errors
                      $_SESSION["errors"] = null;
                    ?>
                  </div>
                  
                  
                
   <?php

$errors = array();
// check if the button has been clicked
if (isset($_POST["post_btn"])) 
{
    // callect the data
    $post_details=$_POST["post_details"];
    
    //image validation
    $target_dir="images/";
    $target_file= $target_dir.basename($_FILES["image"]["name"]);
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // chech if the file is an image
    if(!empty($_FILES["image"]["name"]))
    {
        // chech if the file is an image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check==false) 
        {
            array_push($errors, "The file is not an image");
            // header ("location: home.php");
            
        }
        //limit file size to 5mb
        if ($_FILES["image"]["size"] > 5000000) 
        {
            array_push($errors, "The file is too large(5MB is the maximun");
            // header ("location: home.php)");
            
        }
        // limit file type
        if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif" && $image_file_type != "jpeg")
        {
            array_push($errors, "Sorry, only JPG, PNG & GIF files are allowed");
            // header ("location: home.php?error=Sorry, only JPG, PNG & GIF files are allowed");
            
        }
        // upload image
        $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        if($upload_image)
        {
            // continue
        }else
        {
            array_push($errors, "Upload failed");
            // header ("location: home.php");
        }
    }
    // check errors
    if(count($errors) == 0)
    {
        //session_start();
        $user_id=["post_id"];   
        // insert the data into the DB
        $sql="INSERT INTO `posts`(`my_id`,`post_details`, `post_image`) 
        VALUES (?,?,?)";

        $stmt= mysqli_stmt_init($connect);//initialized statement
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            array_push($errors, "SYSTEM ERROR");
            echo "<h3 style='color:red'>System error</h3>";
            // header ("location: home.php?stmt was not prepared)");
        }
        //if it does not fail, then insert the data
        mysqli_stmt_bind_param($stmt,"iss",$user_id,$post_details,$target_file);
        // now execute the statement
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo '<script type= "text/javascript"> alert("POSTED") </script> ';
        // header("location: home.php");
    }else 
    {
        // session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        echo "<h3 style='color:red'>An error occured</h3>";
        // header("location: home.php?error");
    }

    
    
}


?>

   
</div>                 
           
                
   
</body>
</html>

