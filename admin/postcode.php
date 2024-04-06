
<?php
require '../config/function.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);






if (isset($_POST['donate'])) {
    // Retrieve and sanitize inputs
    $name = $_POST['name'];
    $number_code = $_POST['numcode'];

    // File upload handling
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $imageType = $_FILES['image']['type'];

        // Validate image file type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Add more allowed types if needed
        if (!in_array($imageType, $allowedTypes)) {
            $_SESSION['message'] = "Invalid file type. Only JPEG, PNG, and GIF images are allowed.";
            header("Location: post_donate.php");
            exit();
        }

        // File upload directory
        $targetDir = "imagedonateqr/";
        $targetFilePath = $targetDir . basename($image);

        // Move uploaded file to target directory
        if (move_uploaded_file($imageTempName, $targetFilePath)) {
            // Insert data into database
            $sql = "INSERT INTO donations (name, numcode, image) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $number_code, $image);
            if ($stmt->execute()) {
                $_SESSION['message'] = "Image uploaded successfully.";
            } else {
                $_SESSION['message'] = "Error uploading image: " . $conn->error;
            }
            $stmt->close();
        } else {
            $_SESSION['message'] = "Error uploading image.";
        }
    } else {
        $_SESSION['message'] = "Error: " . $_FILES['image']['error'];
    }

    // Redirect back to the page where you want to display the message
    header("Location: post_donate.php");
    exit();
}














?>