<?php
// Establish database connection or include necessary files to do so
include "config.php";

// Function to resize the image
function resize_image($file, $width, $height) {
    // Load the image
    $image = imagecreatefromjpeg($file);

    // Get the current dimensions of the image
    $orig_width = imagesx($image);
    $orig_height = imagesy($image);

    // Calculate the new dimensions based on the zoom factor
    $new_width = $orig_width * $width;
    $new_height = $orig_height * $height;

    // Create a new image with the new dimensions
    $new_image = imagecreatetruecolor($new_width, $new_height);

    // Resize the image
    imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $orig_width, $orig_height);

    // Free up memory
    imagedestroy($image);

    // Return the resized image
    return $new_image;
}

// Assuming you have already established a database connection
$image_id = isset($_GET['image_id']) ? $_GET['image_id'] : null;

if ($image_id) {
    // Query database to get the image file path based on the image ID
    // Example: $sql = "SELECT file_path FROM images WHERE id = $image_id";
    // Example: $result = $conn->query($sql);
    // Example: if ($result->num_rows > 0) { $row = $result->fetch_assoc(); $image_file = $row['file_path']; }

    // Example usage
    $image_file = 'admin/uploads/example.jpg'; // Path to your image file
    $zoom_factor = 1.5; // Change this value to adjust zoom level

    // Resize the image
    $zoomed_in_image = resize_image($image_file, $zoom_factor, $zoom_factor);

    // Output the image
    header('Content-Type: image/jpeg');
    imagejpeg($zoomed_in_image); // Output zoomed in image

    // Free up memory
    imagedestroy($zoomed_in_image);
} else {
    // No image ID provided
    echo "Image ID not provided.";
}
?>
