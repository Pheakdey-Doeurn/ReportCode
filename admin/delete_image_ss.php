<?php
require '../config/function.php';

// Check if the ID parameter exists in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $id = $_GET['id'];

    // SQL to delete the record from the database
    $sql = "DELETE FROM imagestructure WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect the user back to the page where they were viewing images
        header("Location: post-create.php");
        exit();
    } else {
        // Error handling if deletion fails
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // Redirect the user back to the page where they were viewing images
    header("Location: post-create.php");
    exit();
}

// Close the database connection
$conn->close();
?>
