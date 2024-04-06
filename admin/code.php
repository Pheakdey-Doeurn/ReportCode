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

//==================================================================== 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];

    // Check if a new image is uploaded
    if ($_FILES['image']['name'] != '') {
        // Check if the image with the same name already exists in the database
        $existing_image_query = "SELECT id FROM imagestructure WHERE image = ?";
        $stmt = $conn->prepare($existing_image_query);
        $stmt->bind_param("s", $_FILES['image']['name']);
        $stmt->execute();
        $stmt->store_result();

        // If an image with the same name exists, handle it accordingly
        if ($stmt->num_rows > 0) {
            $_SESSION['message'] = "An image with the same name already exists.";
            header("Location: update_image_ss.php?id=$id");
            exit();
        }

        // Upload new image
        $image = $_FILES['image']['name'];
        $targetDir = "imagesstructure/";
        $targetFilePath = $targetDir . basename($image);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Update with new image
            $sql_update = "UPDATE imagestructure SET name='$name', position='$position', image='$image' WHERE id = $id";
        } else {
            $_SESSION['message'] = "Error uploading new image.";
            header("Location: update_image_ss.php?id=$id");
            exit();
        }
    } else {
        // Update without changing the image
        $sql_update = "UPDATE imagestructure SET name='$name', position='$position' WHERE id = $id";
    }

    // Execute the update query
    if ($conn->query($sql_update) === TRUE) {
        $_SESSION['message'] = "Image updated successfully.";
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
    }

    // Redirect back to the update form
    header("Location: update_image_ss.php?id=$id");
    exit();
} else {
    // Redirect to an error page or handle the case where form submission is not valid
    header("Location: error.php");
    exit();
}

// ===================================================================



