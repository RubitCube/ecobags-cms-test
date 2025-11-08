<?php
$servername   = "localhost";
$database = "shamzgiz_shamsnaturals_website";
$username = "shamzgiz_shamsnaturalweb";
$password = "QwedsA@@123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>