<?php

require_once('event.php');

  //creating new event
function createEvent($eventOrganizer,
$eventName, $eventDate, $eventTime, $eventDescription){
    //create instance of EVent class
    $event=new Event;

    //run sql query

    $runQuery=$event->createEvent($eventOrganizer,$eventName, $eventDate, $eventTime, $eventDescription); 

    //if query was successfully
    if($runQuery)
    {
        return $runQuery;

    }else
    {
        return false;
    }
    
    

}

//displaying Events
function showEvents(){
    //create instance of EVent class
    $event=new Event;

     //run sql query

    $runQuery=$event->showEvents();

     //if query was successfully
     if($runQuery)
     {
         //puts events in an array
          $events=array();

          //while there are records in event table
          
          while($record= $event->fetchResult())
          {   //append record to events array
              $events[]=$record;
          }
            return $events; 

 
     }else
     {
         return false;
     }

    }
     

     //show Single evnt function
    //  function showSingleEvent($id)
    //  {
    //     $event=new Event;

    //     //run sql query
   
    //    $runQuery=$event->showSingleEvent($id);
   
    //     //if query was successfully
    //     if($runQuery)
    //     {
    //         $singleEvent=$event->fetchResult();
    //         if(!empty($singleEvent))
    //         {
    //             return $singleEvent;
    //         }else
    //         { 
    //                 return [];
    //         }

    //     }
    // }


    // function updateEvent($id,$eventName, $eventDescription, $eventDate, $eventTime)
    // {//instance of class
    //     $event=new Event;

    //     //run sql query
   
    //    $runQuery=$event->updateEvent($id,$eventName, $eventDescription, $eventDate, $eventTime);
   
    //     //if query was successfully
    //     if($runQuery)
    //     {
    //         return $runQuery;

    //      }else
    //      {
    //          return false;
    //      }

    // }
    
    //  function deleteEvent($id)
    //  {
    //      $event=new Event;

    //      $runQuery=$event-> deleteEvent($id);
    //      //if query was successfully
    //      if($runQuery)
    //      {
    //          return $runQuery;

    //       }else
    //       {
    //           return false;
    //       }

    //  }
