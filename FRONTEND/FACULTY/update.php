<?php

//to require the database connection
require '../../BACKEND/databaseConnection.php';


//start a session to ensure condition is met
session_start();


//if the udate button is clicked
if(isset($_POST['UPDATEE'])){
    $_SESSION['deleted']=$_GET['updateid'];
    $event_id= $_GET['updateid'];
    
    //set the event name to what is in the input field
    $_SESSION['newName']=$_POST['NameEvent'];
     $eventName=$_POST['NameEvent'];
     echo $eventName;

     //set date to what is in input field
     $_SESSION['newDate']=$_POST['Day'];
     $event_date=$_POST['Day'];
     echo $event_date;

     //set time to what is in input field
     $_SESSION['newTime']=$_POST['startTime'];
     $event_time=$_POST['startTime'];
     echo $event_time;

     //set description to input description
     $_SESSION['newDescription']=$_POST['Description'];
     $event_description=$_POST['Description'];
     echo $event_description;

     //update query to update eventName,date,description and time to new inputs
    $sqlQuery="UPDATE events SET eventName='$eventName', event_date=''$event_date, event_description='$event_description', event_time='$event_time' WHERE event_id='$event_id'";
   
    //create an instance of the database
    $database=new Database;

    //run the query and genaret a result
    $result=$database->runQuery($sqlQuery);

    //condition to caeet out if query run successfully
    if($result){
       

       header('location:viewEvents.php');
       echo "<h5 style='color:green'>Event has been updated successfully</h5>";

       //query did not run successfully
    }else{

        echo "<h3 style='color:red>Something went wrong!</h3>";
    }
}




?>









<!--html section--> 


<!DOCTYPE html>
<html lang="en">
<head>
    <!--links for advanced styling-->
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>UPDATE PAGE</title>
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
          <link rel="stylesheet" href="careerF.css">


</head>


<body>
    

<!--sidebar links--> 

<div class="d-flex flex-column vh-200 flex-shrink-0 p-3 text-white bg-danger" style="width: 260px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="32"> </svg> <span class="fs-4">SPLASHY</span> </a>
    <hr>
    <h5>Students</h5>
    <hr>
    <!--home link-->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="../PAGE/home.php" class="nav-link text-white" aria-current="page"> <i class="fa fa-home"style="font-size: 23px;"></i><span class="ms-2">Home</span> </a> </li>
       
      <!--Master Link-->
        <li><a href="../CALENDAR/mc.php" class="nav-link text-white"> <i class="fa fa-graduation-cap" style="font-size:23px"></i><span class="ms-2">Master Calendar</span></a></li>

        <!--EventsLink-->
        <li> <a href="../EVENT/event.php" class="nav-link text-white"> <i class='fas fa-user-tie' style="font-size: 23px;"></i><span class="ms-2">Events</span></a></li>


        <!--Clubs Link-->
        <li> <a href="clubs.php" class="nav-link text-white"> <i class='fas fa-globe-europe' style='font-size:23px'></i><span class="ms-2">Clubs</span> </a> </li>

        <!--Church Link-->
        <li> <a href="../CHURCH/denominations.php" class="nav-link text-white"> <i class='fas fa-pray' style='font-size:23px'></i><span class="ms-2">Denominations</span> </a> </li>

        <!--Entcom Link-->
        <li> <a href="../ENTERCOM/entcom.php" class="nav-link text-white"> <i class='fas fa-theater-masks' style='font-size:23px'></i><span class="ms-2">Entcom</span></a></li>


    </ul>
    <hr>
    <h5>Faculty</h5>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
    <!-- <li> <a href="#" class="nav-link text-white"><i class="fa fa-home" style="font-size: 23px;"></i><span class="ms-2">Home</span></a></li> -->
        
        <li> <a href="../../FACULTY/master.php" class="nav-link text-white"> <i class="material-icons" style="font-size: 23px;">school</i><span class="ms-2">Master Calendar</span> </a> </li>
        <li> <a href="../../FACULTY/careerF.php" class="nav-link active"> <i class='fas fa-users' style="font-size: 23px;"></i><span class="ms-2">EVENTS SECTION</span> </a> </li>
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
        
    </ul>
    <hr>

 
</div>



    <!--code for form-->
     
  <section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="">Event Updating Form</h1>
                    <div class="px-2"><br>
                        <form action="" class="justify-content-center" method="POST">
                            <div class="form-group">
                              <label class="sr-only">Faculty Category</label>
                            <select class="form-select" name="dropdown">
                                  <option selected>Select Faculty Category</option>
                                  <option value="SLE">SLE</option>
                                  <option value="ODIP">ODIP</option>
                                  <option value="CAREER">CAREER</option>
                                  <option value="OTHERS">OTHERS</option>

                              </select>
                            </div>
                            <div class="form-group">
                                <label>Event Name:</label>
                                <input type="text" class="form-control" name="NameEvent" value="<?php  if(isset($_POST['NameEvent'])){ $_SESSION['newName']=$_POST['NameEvent']; echo $_POST['NameEvent'];}?>"> <!--show response in input field-->
                            </div>

                            <div class="form-group">
                            <label>Event Date:</label>
                            <input type="date" name="Day" value="" class="form-control"  value="<?php if(isset($_POST['Day'])){  $_SESSION['newDate']=$_POST['Day']; echo $_POST['Day'];}?> ">  <!--show response in input field-->

                            <div class="form-group">
                            <label>Event Start Time:</label>
                            <input type="time" name="startTime" class="form-control" value="<?php if(isset($_POST['startTime'])){ $_SESSION['newTime']=$_POST['startTime']; echo $_POST['startTime'];}?>">  <!--show response in input field-->
                            </div>

                            <div class="form-group">

                            <label>Event Details:</label> <br>
                           <input type="textarea" name="Description" class="form-control"  value="<?php if(isset($_POST['Description'])){ $_SESSION['newDescription']=$_POST['Description']; echo $_POST['Description'];}?> ">  <!--show response in input field-->

                            </div>

                            </div>
                            <button type="submit" name="UPDATEE" class="btn btn-info"><i class="fa fa-edit">Update Event</i></button>
                            <span><button onclick="openViewEventsPage()" class="btn btn-secondary"><i class="fa fa-eye">View Updated Event</i></button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--javascript to open view Events Page--> 
<script>
  function openViewEventsPage()
  {
    window.open('viewEvents.php');
  }
</script>



</body>

</html>
