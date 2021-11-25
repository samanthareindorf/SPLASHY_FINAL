<?php
include('databaseConnection.php');
include_once('../FRONTEND/STUDENT/CHURCH/denominationForm.php');


//check if form has been submitted

if(isset($_POST['submit'])){
    $userName=$_POST['name'];
    $userYear=$_POST['yearSelect'];
    $userChurch=$_POST['denomSelect'];
    $addUser= "INSERT INTO join_place (full_name, yeargroup, club_name) VALUES ('$userName','$userYear','$userChurch')";
    if (mysqli_query($connect, $addUser))
    {
       
        header("Location:../FRONTEND/STUDENT/CHURCH/denominations.php");
        echo "<h3 style='color:green'>You've succesfully joined Denomination</h3>";
    }else{
        echo "<h3 style='color:red'>Sorry, something went wrong.</h3>";
        }
}






?>