<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Clubs Page</title>
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
          <link rel="stylesheet" href="../PAGE/home.css">
          <link rel="stylesheet" href="clubs.css">
          

          <!--links for post section--> 
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <link rel="stylesheet" href="emoji/emojionearea.min.css">

          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal-bs3patch.css">
          <script src="  https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
          

        
          

         

          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

       
         


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
                <div class="d-flex flex-column vh-300 flex-shrink-0 p-3 text-white bg-danger" style="width: 260px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="42"> </svg> <span class="fs-4">SPLASHY</span> </a>
                    <hr>
                    <h5>Students</h5>
                    <hr>
                    <!--home link-->
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item"> <a href="../PAGE/home.php" class="nav-link text-white" aria-current="page"> <i class="fa fa-home"style="font-size: 23px;"></i><span class="ms-2">Home</span> </a> </li>
                      
                      <!--Master Link-->
                        <li> <a href="../CALENDAR/mc.php" class="nav-link text-white"> <i class="fa fa-graduation-cap" style="font-size:23px"></i><span class="ms-2">Master Calendar</span> </a> </li>

                        <!--EventsLink-->
                        <li> <a href="../EVENT/event.php" class="nav-link text-white"> <i class='fas fa-user-tie' style="font-size: 23px;"></i><span class="ms-2">Events</span></a></li>


                        <!--Clubs Link-->
                        <li> <a href="clubs.php" class="nav-link active"> <i class='fas fa-globe-europe' style='font-size:23px'></i><span class="ms-2">Clubs</span> </a> </li>

                        <!--Church Link-->
                        <li> <a href="../CHURCH/denominations.php" class="nav-link text-white"> <i class='fas fa-pray' style='font-size:23px'></i><span class="ms-2">Denominations</span> </a> </li>

                        <!--Entcom Link-->
                        <li id="theatre"> <a href="../ENTERCOM/entcom.php" class="nav-link text-white"> <i  class='fas fa-theater-masks' style='font-size:23px'></i><span class="ms-2">Entcom</span></a></li>

                        


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


<!--main content of page-->
<!--outer container-->

<div class="container">
<!-- <h5 id="newSessions1">Explore Upcoming Events</h3> -->
    <div class="eventBox1">
    <div class="Box1Text">
        LEO CLUB
    </div>

    </div><br>
    <!--buttons for eventBox1 which triggers modal-->
    <button id="Box1Button1" class="btn btn-info" data-toggle="modal" data-target="#leoClub">
        View Club Details
    </button>

    <!-- Modal -->
<div class="modal fade" id="leoClub" tabindex="-1" role="dialog" aria-labelledby="leoClubCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="leoClubLongTitle"><strong>Leo Club</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="eventName"><strong>Club Name:</strong>Berekuso Ashesi Leo Club</div><hr>
        <div class="dateAndTime"><strong>Founded:</strong>April 2019</div><hr>
        <div class="description"><strong>Description:</strong>The Ashesi Leo club is a club passionate about community service. Our activities are based mainly on leadership, service and community.
        We engage in helping the less privileged in our society by focusing on health aspects such as clean communities, childhood cancer awareness, hunger relief, among others. Some of our activities include: Tree planting🌴 and community clean-ups.
    
      </div>
      <div class="modal-footer bg-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


     <button onclick="openClubForm()" id="Box1Button" class="btn btn-success">
        Join Club
    </button>
  

   <!--club2 -->

    <div class="eventBox2">
    <div class="Box2Text">
        JForce
    </div>

    </div><br>
    <!-- <buttons for eventBox1 which triggers modal -->
     <button id="Box2Button1" class="btn btn-info" data-toggle="modal" data-target="#Jforce">
        View Club details
    </button> 

    <!-- Modal -->
<div class="modal fade" id="Jforce" tabindex="-1" role="dialog" aria-labelledby="JforceCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="JforceLongTitle"><strong>Pannel Discussion!</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="eventName"><strong>Club Name:</strong> JForce</div><hr>
        <div class="dateAndTime"><strong>Date & Time:</strong>Founded in 2019</div><hr>
        <div class="description"><strong>Description:</strong>For all year groups to experience training sessions which 
        give you lifeskills and a bit of cash! 💰
        </div><hr>
      </div>
      <div class="modal-footer bg-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <button onclick="openClubForm()" id="Box2Button" class="btn btn-success">
        Join Club
    </button>
 




         <!--club3-->

    <div class="eventBox3">
    <div class="Box3Text">
        Developer Students Club
    </div>

    </div><br>
    <!--buttons for eventBox1 which triggers modal-->
     <button id="Box3Button1" class="btn btn-info" data-toggle="modal" data-target="#DSC">
        View Club details
    </button> 

   <!-- Modal --> 
 <div class="modal fade" id="DSC" tabindex="-1" role="dialog" aria-labelledby="DSCCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="viewDetails3LongTitle"><strong>DSC</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="eventName"><strong>Club Name:</strong> Developer Students Club</div><hr>
        <div class="dateAndTime"><strong>Founded:</strong>September 2021</div><hr>
        <div class="description"><strong>Description:</strong>For all year groups! You can learn 
        amazing skills like front-end, back-end development
        machine learning among other to make you the best in 
        every sector! Let's get coding 💻
      </div>
      <div class="modal-footer bg-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 </div>


    <button onclick="openClubForm()" id="Box3Button" class="btn btn-success">
        Join Club
    </button>



     <!--club4-->

    <div class="eventBox5">
    <div class="Box5Text">
        Ashesi Business Club
    </div>

    </div><br>
    <!--buttons for eventBox1 which triggers modal-->
     <button id="Box5Button1" class="btn btn-info" data-toggle="modal" data-target="#ABC">
        View Club details
    </button> 

   <!-- Modal --> 
 <div class="modal fade" id="ABC" tabindex="-1" role="dialog" aria-labelledby="ABCCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="ABCLongTitle"><strong>Ashesi Business Club</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class="eventName"><strong>Club Name:</strong> Ashesi Business Club</div><hr>
        <div class="dateAndTime"><strong>Founded:</strong>September 2018</div><hr>
        <div class="description"><strong>Description:</strong>Register your own Businesswith the 
        Ashesi Business Club and take advantage of the plethora of students
        waiting to patronize your service. Lezz gain some cash 💰💰💵
      </div>
      <div class="modal-footer bg-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 </div>


    <button onclick="openClubForm()" id="Box5Button" class="btn btn-success">
        Join Club
    </button>



   <!--club4-->

                        <div class="eventBox6">
    <div class="Box6Text">
        Ashesi Real Estate Club
    </div>

    </div><br>
    <!--buttons for eventBox1 which triggers modal-->
     <button id="Box6Button1" class="btn btn-info" data-toggle="modal" data-target="#ARC">
        View Club details
    </button> 

   <!-- Modal --> 
 <div class="modal fade" id="ARC" tabindex="-1" role="dialog" aria-labelledby="ARCCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="ARCLongTitle"><strong>Ashesi Real Estate Club</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class="eventName"><strong>Club Name:</strong> Ashesi Real Estate Club</div><hr>
        <div class="dateAndTime"><strong>Founded:</strong>September 2018</div><hr>
        <div class="description"><strong>Description:</strong>Learn more about 
        real estate, investing, growing your revenue with amazing guest speakers who
        are successful in real estate. You stand a chance of winning some internships as well. 
        🏚⛪🏩
      </div>
      <div class="modal-footer bg-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 </div>


    <button onclick="openClubForm()" id="Box6Button" class="btn btn-success">
        Join Club
    </button>



    <!--club4-->

    <div class="eventBox7">
    <div class="Box7Text">
        Ashesi TedX Club
    </div>

    </div><br>
    <!--buttons for eventBox1 which triggers modal-->
     <button id="Box7Button1" class="btn btn-info" data-toggle="modal" data-target="#TEDX">
        View Club details
    </button> 

   <!-- Modal --> 
 <div class="modal fade" id="TEDX" tabindex="-1" role="dialog" aria-labelledby="TEDXCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="TEDXLongTitle"><strong>Ashesi TedX</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class="eventName"><strong>Club Name:</strong> Ashesi TedX Club</div><hr>
        <div class="dateAndTime"><strong>Founded:</strong>September 2020</div><hr>
        <div class="description"><strong>Description:</strong>Learn more about 
       how to plan, schedule and organize an in-person TedX meeting and a virtual TedX 
       meeting and actually hold one in Ashesi! 🎥📸
      </div>
      <div class="modal-footer bg-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 </div>


    <button onclick="openClubForm()" id="Box7Button" class="btn btn-success">
        Join Club
    </button>



  <!--javascript to open club form--> 
<script>
  function openClubForm(){
    window.open('club_form.php');
}
</script>



    

</div>
</body>
</html>