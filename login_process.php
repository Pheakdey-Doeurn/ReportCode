<?php
 session_start();

// Database connection parameters
require 'config/config.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Query to retrieve user from database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if a matching user was found
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["role"] = $row["role"]; // Assuming your users table has a 'role' column
        switch ($_SESSION["role"]) {
            case 'admin':
                header("Location: admin.php");
                break;
            case 'student':
                header("Location: student_dashboard.php");
                break;
            case 'teacher':
                header("Location: teacher_dashboard.php");
                break;
            default:
                // Redirect back to login page with error if role is not recognized
                header("Location: login.php?error=1");
                break;
        }
        exit;
    } else {
        // Redirect back to login page with error if credentials are invalid
        header("Location: login.php?error=1");
        exit;
    }
}

// Close MySQL connection
mysqli_close($conn);
?>
