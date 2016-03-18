<?php

session_start();
echo "With user name ". $_SESSION["username"]."<br>";
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
$sql="INSERT INTO iitj (userId,username,hostel_number,room_number,room_type)
 SELECT  username,name,hostel_number,roomNumber,roomType 
 FROM users
 WHERE username='".$_SESSION["username"]."'";

if ($conn->multi_query($sql) === TRUE) {
    echo "Complain successfully submitted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sq = "INSERT INTO iitj (date) VALUES (CURDATE)  WHERE username='".$_SESSION["username"]."' ";
if ($conn->multi_query($sql) === TRUE) {
    echo "Complain successfully submitted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo"<br>";
include 'update.php';

?> 
