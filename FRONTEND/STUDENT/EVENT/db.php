<?php
$conn = mysqli_connect("localhost","root","","ashesi_socialmedia") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>