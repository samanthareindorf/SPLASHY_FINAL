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
          <link rel="stylesheet" href="../STUDENT/PAGE/home.css">
          
          <script src="../STUDENT/PAGE/home.js"></script>

          <!--links for post section--> 
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
         

          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

         

          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <link rel="stylesheet" href="careerF.css">
          
          
      

        

       
         


</head>
<body>



                  <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active p-15">
        <a class="nav-link" href="../../HOME/index.html">Splashy <span class="sr-only">(current)</span><i class='fas fa-water'></i></a>
      </li>
      <li class="nav-item p-15">
        <a class="nav-link" href="../../seedMain/seedJournal.html">Seed Journal</a>
      </li>
      <li class="nav-item p-15">
        <a class="nav-link" href="careerF.php">Faculty</a>
      </li>
      <li class="nav-item p-15">
        <a class="nav-link" href="../STUDENT/EVENT/event.php">Students</a>
      </li>

    </ul>
    
  </div>
</nav>

<!--sidebar-->
                <div id="sticky" class="d-flex flex-column vh-300 flex-shrink-0 p-3 text-white bg-danger" style="width: 260px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="42"> </svg> <span class="fs-4">SPLASHY</span> </a>
                    <hr>
                    <h5>Faculty</h5>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    <!-- <li> <a href="#" class="nav-link text-white"><i class="fa fa-home" style="font-size: 23px;"></i><span class="ms-2">Home</span></a></li> -->
                        
                    <li> <a href="master.php" class="nav-link text-white"> <i class="material-icons" style="font-size: 23px;">school</i><span class="ms-2">Master Calendar</span> </a> </li>
                        <li> <a href="careerF.php" class="nav-link text-white"> <i class='fas fa-users' style="font-size: 23px;"></i><span class="ms-2">EVENTS SECTION</span> </a> </li>
                       
                    </ul>
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
                    <br>
                    
                    

</div>
<!--code for form-->
     
  <div  id="cover" class="min-vh-100">
    <div id="cover-caption" >
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="">Event Registration Form</h1>
                    <div class="px-2"><br>
                        <form  id="onlyCareer" action="../../BACKEND/event_create.php" class="justify-content-center" method="POST">
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
                                <input type="text" class="form-control" name="NameEvent">
                            </div>

                            <div class="form-group">
                            <label>Event Date:</label>
                            <input type="date" name="Day" value="" class="form-control">

                            <div class="form-group">
                            <label>Event Start Time:</label>
                            <input type="time" name="startTime" class="form-control">
                            </div>

                            <div class="form-group">

                            <label>Event Details:</label> <br>
                           <input type="textarea" name="Description" class="form-control">

                            </div>

                            </div>
                            <button type="submit" name="SUBMIT" class="btn btn-primary"><i class="fa fa-send-o">Post Event</i></button>
                            <span><button onclick="openViewEventsPage()" class="btn btn-secondary"><i class="fa fa-eye">View Created Event</i></button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--javascript to open view Events Page--> 
<script>
  function openViewEventsPage()
  {
    window.open('viewEvents.php');
  }
</script>


       

     
  


</body>

</html>