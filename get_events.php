<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "database_mo"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$events_for_reviews = array();

$sql = "SELECT * FROM event WHERE Happened='1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event = new stdClass();
        $event->ID = $row['ID'];
        $event->title = $row['title'];
        $event->date = $row['date'];
        $events_for_reviews[] = $event;
    }
} 
$conn->close();
?>