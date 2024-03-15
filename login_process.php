<?php
 session_start();
 $host = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'schooldb';
 
 // Connect to MySQL
 $conn = mysqli_connect($host, $username, $password, $database);
 
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

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
        $_SESSION["username"] = $row["username"]; 

        switch ($_SESSION["role"]) {
            case 'admin':
                header("Location: admin/admin.php");
                break;
            case 'student':
                header("Location: students/student_dashboard.php");
                break;
            case 'teacher':
                header("Location: teacher/teacher_dashboard.php");
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
