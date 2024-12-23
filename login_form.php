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

session_start(); // Start a session

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to the home page
            header('Location: home.php');
            exit;
        } else {
            echo "<script>alert('Incorrect password. Please try again.'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with this email. Please sign up.'); window.location.href='signup.php';</script>";
    }
}

$conn->close();
?>
