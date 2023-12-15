<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "database_mo"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tickets = array();
$sql = "SELECT event.* FROM event WHERE Happened = '0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ticket = new stdClass();
        $ticket->event_id = $row['ID'];
        $ticket->title = $row['title'];
        $ticket->date = $row['date'];
        $ticket->price = $row['price'];
        $ticket->description = $row['description'];
        $tickets[] = $ticket;
    }
} 

$conn->close();
?>