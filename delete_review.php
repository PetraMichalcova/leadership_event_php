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

$review_id = $_POST['review_id'];

$deleteQuery = "DELETE FROM review WHERE ID='$review_id'";
$conn->query($deleteQuery);
$conn->close();

header("Location: index.php#section_4");
?>