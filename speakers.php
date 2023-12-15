<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "database_mo"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$speakers = array();
$sql = "SELECT * FROM speaker";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $speaker = new stdClass();
        $speaker->speaker_name = $row['first_name'];
        $speaker->speaker_mail = $row['mail'];
        $speaker->speaker_position = $row['position'];
        $speaker->speaker_image = $row['img'];
        $speakers[] = $speaker;
    }
} 
$conn->close();

?>