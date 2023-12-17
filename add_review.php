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

$ID = $_SESSION['ID'];
$text = $conn -> real_escape_string($_POST['text']);
$event_id = $_POST['event_id'];

date_default_timezone_set('Europe/Bratislava');
$t = time();
$date = date("Y-m-d H:i:s", $t);
$insertQuery = "INSERT INTO review (event_id, user_id, text, date_time) VALUES ('$event_id', '$ID',  '$text', '$date')";
$conn->query($insertQuery);
$conn->close();

header("Location: index.php#section_4");
?>