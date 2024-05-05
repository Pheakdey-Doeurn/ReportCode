<?php
session_start();

// Check if user is already logged in, redirect them to the dashboard
if(isset($_SESSION['user_id'])) {
    header("Location: admin.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establish connection to database
    $conn = mysqli_connect("localhost", "root", "", "schooldb");

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password
    $hashed_password = hash('sha256', $password); // You should use a stronger hashing algorithm like bcrypt or Argon2

    // Query to retrieve user from database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify hashed password
        if($user['password'] === $hashed_password) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect user based on role
            switch($_SESSION['role']) {
                case 'admin':
                    header("Location: admin/admin.php");
                    break;
                case 'teacher':
                    header("Location: teacher/teacher_dashboard.php");
                    break;
                case 'student':
                    header("Location: students/student_dashboard.php");
                    break;
                default:
                    // Redirect to login page with error if role is not recognized
                    header("Location: login.php?error=unknown_role");
                    break;
            }
            exit();
        } else {
            // Redirect to login page with error if credentials are invalid
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    } else {
        // Redirect to login page with error if username is not found
        header("Location: login.php?error=username_not_found");
        exit();
    }
}
?>
