<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_bolt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into the database
$sql = "INSERT INTO feedback_data (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Form Sucessfully Submitted")</script>';
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
