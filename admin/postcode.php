
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

        // Check if the image already exists in the database
        $sqlCheck = "SELECT * FROM donations WHERE image = ?";
        $stmtCheck = $conn->prepare($sqlCheck);
        $stmtCheck->bind_param("s", $image);
        $stmtCheck->execute();
        $resultCheck = $stmtCheck->get_result();

        if ($resultCheck->num_rows > 0) {
            $_SESSION['message'] = "Image already exists in the database.";
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

// =====================================

// Check if form is submitted for update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number_code = $_POST['numcode'];

    // Check if a new image is uploaded
    if ($_FILES['image']['name'] != '') {
        // Check if the image with the same name already exists in the database
        $existing_image_query = "SELECT id FROM donations WHERE image = ?";
        $stmt = $conn->prepare($existing_image_query);
        $stmt->bind_param("s", $_FILES['image']['name']);
        $stmt->execute();
        $stmt->store_result();

        // If an image with the same name exists, handle it accordingly
        if ($stmt->num_rows > 0) {
            $_SESSION['message'] = "An image with the same name already exists.";
            header("Location: post_update_donate.php?id=$id");
            exit();
        }

        // Upload new image
        $image = $_FILES['image']['name'];
        $targetDir = "imagedonateqr/";
        $targetFilePath = $targetDir . basename($image);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Update with new image
            $sql_update = "UPDATE donations SET name=?, numcode=?, image=? WHERE id = ?";
            $stmt = $conn->prepare($sql_update);
            $stmt->bind_param("sssi", $name, $number_code, $image, $id);
        } else {
            $_SESSION['message'] = "Error uploading new image.";
            header("Location: post_update_donate.php?id=$id");
            exit();
        }
    } else {
        // Update without changing the image
        $sql_update = "UPDATE donations SET name=?, numcode=? WHERE id = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssi", $name, $number_code, $id);
    }

    // Execute the update query
    if ($stmt->execute()) {
        $_SESSION['message'] = "Donation QR details updated successfully.";
    } else {
        $_SESSION['message'] = "Error updating donation QR details: " . $conn->error;
    }

    // Close the statement
    $stmt->close();

    // Redirect back to the update form
    header("Location: post_update_donate.php?id=$id");
    exit();
} else {
    // Redirect to an error page or handle the case where form submission is not valid
    header("Location: error.php");
    exit();
}












?>