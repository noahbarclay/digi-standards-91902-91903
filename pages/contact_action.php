<?php
session_start();
include ('../admin/setup.php');

print_r ($_POST);

$name = $_POST["name"];
$email = $_POST["email"];
$phone = addslashes($_POST["phone"]);
$message = addslashes($_POST["message"]);

$sql = "INSERT INTO contact (name, email, phone, message)
VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $_SESSION['messages'] = "Message Sent!";
  header('Location: contact.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>