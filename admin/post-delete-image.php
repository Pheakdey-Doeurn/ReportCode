<?php
    require '../config/config.php';

if (isset($_POST['image_id'])) {
    // Sanitize the input to prevent SQL injection
    $imageId = $conn->real_escape_string($_POST['image_id']);

    // Construct SQL query to delete the image
    $sql = "DELETE FROM pageaction WHERE id = '$imageId'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Image deleted successfully";
    } else {
        echo "Error deleting image: " . $conn->error;
    }
} else {
    echo "Image ID not provided";
}
?>
