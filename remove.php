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

$user_event_id = $_GET['shopping_cart_item_id'];

$sql = "DELETE FROM shopping_cart WHERE ID='$user_event_id'";
$result = $conn->query($sql);
$conn->close();

header("Location: my_events.php");  
?>