<!DOCTYPE html>
<html lang="en">
<head>
    <!--link for advanced styling--> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page Students</title>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="event.css">
    <script src="../PAGE/home.js"></script> 
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    

</head>
<body>


<?php
include_once('../../../BACKEND/eventController.php');


//show events from the Controller
$events=showEvents(); 
?>
 

 <div class="container">
   <div class="cinner">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <!--outline for table--> 
                <th scope="col">Event Organizer</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Date</th>
                <th scope="col">Event Description</th>
                <th scope="col">Event Time</th>
                <th scope="col" colspan="2">Action</th>
                
            </tr>
        </thead>
      
    <h3 class="mt-5 p-5 text-align-center">Events</h3>
    <ul class="list_group">
   
        <?php 
         //for each loop to run through events
            foreach($events as $key=> $value){
                ?>
                

                <tr>
                     <td><li class="list_group_item"><?=$value['eventOrganizer']?></td>

                    <td><li class="list-group-item"><?=$value['eventName']?></td>

                    <td><li class="list-group-item"><?=$value['event_date']?></td>


                    <td colspan=""><li class="list-group-item"><?=$value['event_description']?></td>

                    <td colspan=""><li class="list-group-item"><?=$value['event_time']?></td>

                  

                    <td>
                         <button onclick="addToCalendar()" class="btn btn-success">Add to Calendar</button>


                     </td>
            </tr>

        


                
                </li>
            <?php
            }

            ?>
    </ul>
    </table>

    </div>
</div>

<!--javascript function to add to calendar--> 
    <script>
        function addToCalendar()
        {
            window.open('openCal.php');
        }
    </script>
</body>
</html>

    
