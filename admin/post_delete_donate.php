<?php
require '../config/config.php';

// Check if the image ID is set in the URL parameters
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve image information from the database
    $sql = "SELECT * FROM donations WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image = $row['image'];

        // Delete the image file from the server
        $imagePath = "imagedonateqr/" . $image;
        if (file_exists($imagePath)) {
            unlink($imagePath); // Delete the image file
        }

        // Delete the image record from the database
        $sqlDelete = "DELETE FROM donations WHERE id = ?";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->bind_param("i", $id);
        if ($stmtDelete->execute()) {
            $_SESSION['message'] = "Image deleted successfully.";
        } else {
            $_SESSION['message'] = "Error deleting image: " . $conn->error;
        }
    } else {
        $_SESSION['message'] = "Image not found.";
    }

    // Redirect back to the page where images are displayed
    header("Location: post_donate.php");
    exit();
} else {
    $_SESSION['message'] = "Image ID not specified.";
    header("Location: post_donate.php");
    exit();
}
