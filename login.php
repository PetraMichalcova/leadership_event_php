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

$mail = $_POST['mail'];
$pswd = $_POST['pswd'];

$sql = "SELECT ID, mail FROM speaker WHERE mail = '$mail' and password = '$pswd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["mail"] = $row['mail'];
        $_SESSION["speaker"] = 1;
    }
} else {
    $sql = "SELECT ID, mail FROM user WHERE mail = '$mail' and password = '$pswd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["ID"] = $row['ID'];
            $_SESSION["mail"] = $row['mail'];
            $_SESSION["speaker"] = 0;
        }
    }
}
$conn->close();

header("Location: index.php");  
?>