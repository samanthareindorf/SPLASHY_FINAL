<?php
include('databaseConnection.php');
include_once('../FRONTEND/STUDENT/CLUB/club_form.php');


//check if form has been submitted

if(isset($_POST['submit'])){
    $userName=$_POST['name'];
    $userYear=$_POST['yearSelect'];
    $userClub=$_POST['clubSelect'];
    $addUser= "INSERT INTO join_place (full_name, yeargroup, club_name) VALUES ('$userName','$userYear','$userClub')";
    if (mysqli_query($connect, $addUser))
    {
        echo "<h3 style='color:green'>You've succesfully joined club</h3>";
        header("Location:../FRONTEND/STUDENT/CLUB/clubs.php");
    }else{
        echo "<h3 style='color:red'>Sorry, something went wrong.</h3>";
        }
}





?>