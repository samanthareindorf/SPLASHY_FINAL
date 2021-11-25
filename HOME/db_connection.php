<?php
// include database_credentials.php use require
require 'db_credentials.php';

// create connection
$connection = new mysqli(servername, username, password, dbname);
// getting user message through ajax
$getMesg = mysqli_real_escape_string($connection, $_POST['text']);

//checking user query to database query
$sql = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$result = mysqli_query($connection, $sql) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($result) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($result);
    //storing replay to a varible which we'll send to ajax
    $reply = $fetch_data['replies'];
    echo $reply;
}else{
    echo "Sorry I didn't understand you!";
}


?>