<?php
include("db.php");

$conn = new mysqli($servername, $username, $password, $dbname);

// Get image data from database 
$result = $conn->query("SELECT png FROM carl ORDER BY RAND() LIMIT 1"); 

$row = mysqli_fetch_assoc($result);
header("Content-type: image/png");
echo $row['png'];

