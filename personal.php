<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "database_mo"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$shopping_cart = array();
$user_ID = $_SESSION["ID"];
$sql = "SELECT shopping_cart.ID as scID, event.ID as eID, event.title, event.date, event.price, speaker.first_name, speaker.last_name, speaker.img FROM shopping_cart INNER JOIN event ON event.ID = shopping_cart.event_id INNER JOIN speaker ON speaker.ID = event.speaker_id WHERE shopping_cart.user_id='$user_ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $item = new stdClass();
        $item->shopping_cart_id = $row['scID'];
        $item->event_id = $row['eID'];
        $item->title = $row['title'];
        $item->date = $row['date'];
        $item->price = $row['price'];
        $item->speaker_first_name = $row['first_name'];
        $item->speaker_last_name = $row['last_name'];
        $item->img = $row['img'];
        $shopping_cart[] = $item;
    }
} 

$events_past = array();
$sql = "SELECT user_event.*, event.*, speaker.first_name, speaker.last_name, speaker.img FROM user_event INNER JOIN event ON event.ID = user_event.event_id INNER JOIN speaker ON speaker.ID = event.speaker_id WHERE user_event.user_id='$user_ID' ORDER BY user_event.ID DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event = new stdClass();
        $event->title = $row['title'];
        $event->date = $row['date'];
        $event->price = $row['price'];
        $event->happened = $row['happened'];
        $event->speaker_first_name = $row['first_name'];
        $event->speaker_last_name = $row['last_name'];
        $event->img = $row['img'];
        $events_past[] = $event;
    }
} 

$conn->close();
?>