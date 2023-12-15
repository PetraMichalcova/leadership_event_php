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

$message = "The mail is already used";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mail = $_POST['mail'];
$pswd = $_POST['pswd'];

$checkEmailQuery = "SELECT * FROM user WHERE mail = '$mail'";
$result = $conn->query($checkEmailQuery);


if ($result->num_rows == 0) {
    $insertQuery = "INSERT INTO user (first_name, last_name, mail, password) VALUES ('$first_name', '$last_name', '$mail', '$pswd')";
    $conn->query($insertQuery);
} else {
    echo $message;
}

$conn->close();
header("Location: index.php");
?>