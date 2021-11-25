<?php
require_once "db.php";

$eventName = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";

$sqlInsert = "INSERT INTO studentevents (eventName, eventTime) VALUES ('".$title."'".$start.")";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>