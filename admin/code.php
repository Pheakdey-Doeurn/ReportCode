<?php
require '../config/function.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Upload image
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $position = $_POST['position'];

    // Check if the image with the same name already exists in the database
    $sqlCheck = "SELECT * FROM imagestructure WHERE image = '$image'";
    $resultCheck = $conn->query($sqlCheck);
    if ($resultCheck->num_rows > 0) {
        // Set error message
        $_SESSION['message'] = "Image already exists in the database.";
    } else {
        // File upload directory
        $targetDir = "imagesstructure/";
        $targetFilePath = $targetDir . basename($image);

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Resize image
            list($width, $height) = getimagesize($targetFilePath);
            $newWidth = 280;
            $newHeight = 330;

            // Create a new image with the specified dimensions
            $imageResized = imagecreatetruecolor($newWidth, $newHeight);

            // Load the uploaded image
            $imageTmp = imagecreatefromjpeg($targetFilePath); // Assuming uploaded images are JPEG

            // Resize the image to fit the specified dimensions
            imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            // Save the resized image
            imagejpeg($imageResized, $targetFilePath);

            // Free up memory
            imagedestroy($imageResized);
            imagedestroy($imageTmp);

            // Insert into database
            $sql = "INSERT INTO imagestructure (name, position, image) VALUES ('$name', '$position', '$image')";
            if ($conn->query($sql) === TRUE) {
                // Set success message
                $_SESSION['message'] = "Image uploaded successfully.";
            } else {
                // Set error message
                $_SESSION['message'] = "Error uploading image: " . $conn->error;
            }
        } else {
            // Set error message if file upload failed
            $_SESSION['message'] = "Error uploading image.";
        }
    }

    // Redirect to the page where you want to display the message
    header("Location: post-create.php");
    exit();
}
?>
