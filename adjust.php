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
$data = array();

$sql = "SELECT ID, text FROM review WHERE review.ID='$review_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $review = new stdClass();
        $review->ID = $row['ID'];
        $review->text = $row['text'];
        $data[] = $review;
    }
}
$conn->close();
echo json_encode($data);
?>