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

$first_name = $conn -> real_escape_string($_POST["first_name"]);
$last_name = $conn -> real_escape_string($_POST["last_name"]);
$mail = $conn -> real_escape_string($_POST["mail"]);
$pswd = $conn -> real_escape_string($_POST["password"]);
$file = $conn -> real_escape_string($_POST["file"]);

$checkEmailQuery = "SELECT * FROM user WHERE mail = '$mail'";
$result = $conn->query($checkEmailQuery);

if ($result->num_rows == 0) {
    $insertQuery = "INSERT INTO user (first_name, last_name, mail, password, img) VALUES ('$first_name', '$last_name',  '$mail', '$pswd', '$file')";
    $conn->query($insertQuery);
} 
$conn->close();

header("Location: index.php#section_7");  
?>