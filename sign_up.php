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

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$mail = $_POST["mail"];
$pswd = $_POST["password"];
$file = $_POST["file"];

$insertQuery = "INSERT INTO user (first_name, last_name, mail, password, img) VALUES ('$first_name', '$last_name',  '$mail', '$pswd', '$file')";
$conn->query($insertQuery);
$conn->close();

header("Location: index.php#section_7");  
?>