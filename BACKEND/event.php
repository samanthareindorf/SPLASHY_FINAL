<?php

        require_once('databaseConnection.php');



//Post child class of Database class
class Event extends Database{
        //function to create a post

        public function createEvent($eventOrganizer,$eventName, $eventDate, $eventTime, $eventDescription)
        {
                $sqlQuery="INSERT INTO events(eventOrganizer,eventName, event_date, event_time, event_description) VALUES ('$eventOrganizer','$eventName', '$eventDate', '$eventTime', '$eventDescription')";

                return $this->runQuery($sqlQuery);
        }
         

        //function to display creted events
         public function showEvents()
         {
                $sqlQuery="SELECT * FROM events ORDER BY event_date ASC, eventOrganizer";

                return $this->runQuery($sqlQuery);

                  
         }  


         //function to display one event
        //  public function showSingleEvent($id)
        //  {
        //         $sqlQuery= "SELECT * FROM events WHERE event_id ='$id'";

        //         return $this->runQuery($sqlQuery);
        //  }


        //update function
        public function updateEvent($id,$eventName, $eventDescription, $eventDate, $eventTime)
        {
                $sqlQuery="UPDATE events SET eventName='$eventName', event_description='$eventDescription', event_date='$eventDate, event_time='$eventTime' WHERE event_id='$id'";

                return $this->runQuery(
                        $sqlQuery);

        }

        //delete function

        // public function deleteEvent($id)
        // {
        //         $sqlQuery="DELETE FROM events WHERE event_id = '$id'";

        // }

}




?>
