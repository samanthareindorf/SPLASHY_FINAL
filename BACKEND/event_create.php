 <?php

 require_once('eventController.php');

            //check if form is submitted

            if(isset($_POST['SUBMIT'])){
                //grab form data
                  $eventOrganizer=$_POST['dropdown'];
                  $eventName=$_POST['NameEvent'];
                  $eventDate=$_POST['Day'];
                  $eventTime=$_POST['startTime'];
                  $eventDescription=$_POST['Description'];

                //validate data


                 //store in database

                 $newEvent=createEvent($eventOrganizer,$eventName,$eventDate,$eventTime,$eventDescription);
                 if($newEvent)
                 {
                    

                      header("location: ../FRONTEND/FACULTY/careerF.php ");
                     echo "<small style='color:green'>Event has been posted sucessfully!🤩</h3>";
                       
                 }else
                 {
                    echo "<h3 style='color:red'>Something went wrong</h3>";
                 }

            }



            


?>
