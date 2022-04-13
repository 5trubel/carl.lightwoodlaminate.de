<?php
include("db.php");

if(!isset($_POST['InPW']) || $_POST['InPW'] != $SUBPASSWD){
    die("Wrong password!");
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO carl (png) VALUES (?)");
$null = NULL;
$stmt->bind_param("b", $null);
$fp = fopen($_FILES['InFile']['tmp_name'], "r");
while (!feof($fp)) {
    $stmt->send_long_data(0, fread($fp, 8192));
}
fclose($fp);
$stmt->execute();

header("Location: submit.php");
