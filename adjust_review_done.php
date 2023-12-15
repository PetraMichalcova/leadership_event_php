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

$ID = $_POST['review_id'];
$text = $_POST['text'];
date_default_timezone_set('Europe/Bratislava');
$t = time();
$date = date("Y-m-d H:i:s", $t);

$updateQuery = "UPDATE review SET text='$text', date_time='$date' WHERE ID='$ID'";
$conn->query($updateQuery);
$_SESSION["event_id_for_review_id"] = $_POST['event_id'];

$conn->close();
header("Location: index.php#section_4");
?>
