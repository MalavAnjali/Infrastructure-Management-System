<?php

$servername = "localhost";
$userName = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $userName, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sq = "INSERT INTO iitj (date) VALUES ( CURDATE() )";
if ($conn->multi_query($sq) === TRUE) {
    echo "date successfully submitted";
} else {
    echo "Error: " . $sq . "<br>" . $conn->error;
}

?>