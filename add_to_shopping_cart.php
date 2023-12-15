<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "database_mo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id =  $_SESSION["ID"];
$event_id = $_POST['event_id'];
$sql = "SELECT * FROM shopping_cart WHERE shopping_cart.user_id='$user_id' AND shopping_cart.event_id='$event_id'";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM user_event WHERE user_id='$user_id' AND event_id='$event_id'";
$result2 = $conn->query($sql2);

if ($result->num_rows > 0 || $result2->num_rows > 0) {
    $info = array();
    $alert = new stdClass();
    $alert->info = 'true';
    $info[] = $alert;
    echo json_encode($info);
} else {
    $sql = "INSERT INTO shopping_cart(event_id, user_id) VALUES ('$event_id', '$user_id')";
    $result = $conn->query($sql);
}
$conn->close();
?>