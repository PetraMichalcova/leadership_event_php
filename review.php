<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "database_mo"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$events1= array(); //obsahuje jednotlivé eventy, ktoré majú v sebe reviews
$sql = "SELECT ID FROM event";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event = new stdClass();
        $event->event_id = $row['ID'];
        $events1[] = $event;
    }
} 

$reviews_for_event= array();
foreach($events1 as $event) {
$sql = "SELECT review.*, user.first_name, user.last_name, user.img FROM review INNER JOIN user ON user.ID=review.user_id WHERE review.event_id='$event->event_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $review = new stdClass();
        $review->review_id = $row['ID'];
        $review->event_id = $row['event_id'];
        $review->date_time = $row['date_time'];
        $review->user_id = $row['user_id'];
        $review->user_fn = $row['first_name'];
        $review->user_ln = $row['last_name'];
        $review->img = $row['img'];
        $review->review_text = $row['text'];
        $reviews_for_event[] = $review;
        }
        $event->reviews = $reviews_for_event;
        $reviews_for_event = array();
    }
    else {
        $review = new stdClass();
        $review->event_id = $event->event_id;
        $review->review_id = '0';
        
        $reviews_for_event[] = $review;
        $event->reviews = $reviews_for_event;
        $reviews_for_event = array();
    }
}

$conn->close();

?>