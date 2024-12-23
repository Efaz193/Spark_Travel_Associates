<?php
// Database connection
$host = 'localhost';
$user = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$dbname = 'book_db'; // Replace with your database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    // Validate passwords
    if ($password !== $confirm_password) {
        die("Passwords do not match!"); // Stop execution if passwords don't match
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful signup
        header("Location: login.php");
        exit;
    } else {
        die("Error: " . $conn->error); // Display the exact error for debugging
    }
}

$conn->close();
?>
