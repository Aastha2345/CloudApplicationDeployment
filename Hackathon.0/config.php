<?php
$servername = "localhost:3300";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the user is in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // User is authenticated - redirect to home page
  header("Location: home.html");
} else {
  // User is not authenticated - display error message
  echo "Invalid username or password";
}

// Close the database connection
$conn->close();
?>
