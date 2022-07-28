<!DOCTYPE html>
<html lang="en">

<head>
<title>Pix Prints</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="../image/jpg" href="../images/logo.jpg" />
<link rel="stylesheet" href="hover_image.css" />
</head>

<?php include("nav.php");?>

<?php
$servername = "localhost";
$username = "sec_user";
$password = "greenChair153";
$dbname = "atestdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to $dbname";
?>