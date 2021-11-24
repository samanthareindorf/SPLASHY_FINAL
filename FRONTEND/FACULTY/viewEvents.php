<?php
include_once('../../BACKEND/eventController.php');

$events=showEvents(); 
?>
 
<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <style>
        /*style for body*/
        body{
            background-color: wheat;
        }

    </style>
</head>
<body>


   
<!--faculty side event outline--> 
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <!--creates a table to display event--> 
                <th scope="col">Event Name</th>
                <th scope="col">Event Date</th>
                <th scope="col">Event Description</th>
                <th scope="col">Event Time</th>
                <th scope="col" colspan="2">Action</th> 
                
            </tr>
        </thead>
      
        <!--heading fir table--> 
    <h3 class="mt-5 p-5 text-align-center">Events</h3>
    <ul class="list_group">
   
        <?php 
        //php forach loop to loop through each event and display the set variables
            foreach($events as $key=> $value){
                ?>
                

                <tr>
                    <!--shows event name--> 
                    <td><li class="list-group-item"><?=$value['eventName']?></td>

                    <!--shows event date--> 
                    <td><li class="list-group-item"><?=$value['event_date']?></td>

                    <!--shows event description--> 
                    <td colspan=""><li class="list-group-item"><?=$value['event_description']?></td>

                    <!--shows event time-->
                    <td colspan=""><li class="list-group-item"><?=$value['event_time']?></td>


                    <td>
                        <!--for buttons--> 
                        <!--update button--> 
                         <a href="update.php?updateid=<?=$value['event_id']?>"class="btn btn-info mt-3 mb-0">Update</a>

                          <!--delete button--> 
                    <a href="delete.php?deleteid=<?=$value['event_id']?>"class="btn btn-danger mt-3 mb-0 ">Delete</a>
                    </td>
            </tr>

           


                
                </li>
            <?php
            }

            ?>
    </ul>
    </table>

</div><br><br>


<!--button to go back to previous page--> 
<center>
<button onclick=" goToCareerPage()" class="btn btn-warning" style="width: 500px;">Back</button>

<script>
    //javascript code for button
    function goToCareerPage()
    {
        window.open('careerF.php');
    }
</script>
</center>
</body>
</html>