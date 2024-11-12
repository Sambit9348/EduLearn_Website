<?php
$servername = "localhost:3306"; // Change if using a different host
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "eduLearnDB"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if ($stmt->execute()) {
    echo "<script>alert('Thank you for contacting us, $name!'); window.location.href='index.html';</script>";
} else {
    echo "<script>alert('There was an error submitting your message.'); window.location.href='index.html';</script>";
}

// Close connections
$stmt->close();
$conn->close();
?>
