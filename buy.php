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

$user_id = $_SESSION["ID"];

$sql = "SELECT * FROM shopping_cart WHERE user_id='$user_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event = $row['event_id'];
        $sql2 = "INSERT INTO user_event (user_id, event_id) VALUES ('$user_id', '$event')";
        $result2 = $conn->query($sql2);
    }
}

$sql3 = "DELETE FROM shopping_cart WHERE user_id='$user_id'";
$result3 = $conn->query($sql3);
$shopping_cart = array();
$conn->close();

header("Location: my_events.php");
?>