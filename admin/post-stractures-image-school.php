<?php
require '../config/function.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Image Action</title>
</head>

<body>
    <?php


    // Function to display alert messages
    function alertmg($message, $type = 'info')
    {
        echo "<script>alert('$message');</script>";
    }

    // Check if form is submitted
    if (isset($_POST['upload'])) {
        // Check if file is selected
        if (isset($_FILES['image'])) {
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];

            // Check file size (assuming maximum size of 5MB)
            $max_size = 5 * 1024 * 1024; // 5MB in bytes
            if ($file_size > $max_size) {
                alertmg("Error: Image size exceeds the limit (5MB), 'danger'");
            } else {
                // Check if file already exists in database
                $query = "SELECT COUNT(*) AS count FROM pageaction WHERE file_name = '$file_name'";
                $result = $conn->query($query);
                if ($result && $result->num_rows > 0) {
                    $existing_image_result = $result->fetch_assoc();
                    if ($existing_image_result['count'] > 0) {
                        $_SESSION['duplicate'] = true;
                        alertmg("Error: This image already exists.");
                    } else {
                        // Move uploaded file to desired directory
                        $upload_directory = "uploads/";
                        $destination = $upload_directory . $file_name;
                        if (move_uploaded_file($file_tmp, $destination)) {
                            // Insert file information into database
                            $sql = "INSERT INTO pageaction (file_name, file_size, file_type) VALUES ('$file_name', '$file_size', '$file_type')";
                            if ($conn->query($sql) === TRUE) {
                                alertmg("Image uploaded successfully and inserted into database, 'success");
                            } else {
                                alertmg("Error: " . $conn->error, 'danger');
                            }
                        } else {
                            alertmg("Error: Failed to upload image, 'danger'");
                        }
                    }
                } else {
                    alertmg("Error: Failed to fetch existing images, 'danger'");
                }
            }
        }
    }
    ?>



    <div class="dashboard-content-one">
        <!-- Dashboard summery Start Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>ImageAction</h3>
                <ul>
                    <li>
                        <a href="admin.php">Home</a>
                    </li>
                    <li>Add ImageAction</li>
                </ul>
            </div>
            <div class="card height-auto">

                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add Image Action</h3>
                        </div>
                    </div>
                    <form action="#" method="POST" action="" enctype="multipart/form-data">
                        <div class="col-lg-12 form-group mg-t-10">
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn-fill-lmd radius-30 text-light bg-true-v" name="upload" style="font-size: 1.5rem;">Upload Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>View ImageAction</h3>
                    </div>
                </div>
                <!-- == table view ImageSlide == -->
                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>File Image</th>
                                <th>File Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch image data from database
                            $sql = "SELECT * FROM pageaction";
                            $result = $conn->query($sql);

                            // Check if the query was successful and if there are any rows returned
                            if ($result === false) {
                                // Handle SQL error
                                echo "Error: " . $conn->error;
                            } elseif ($result->num_rows > 0) {
                                // Loop through fetched image data and display in table rows
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td><img src='uploads/{$row['file_name']}' alt='Image' style='max-width: 200px; max-height: 200px;'></td>";
                                    echo "<td>{$row['file_name']}</td>";
                                    echo "<td><button class='btn btn-danger' onclick='deleteImage({$row['id']})'><i class='fa fa-trash'></i> Delete</button></td>";
                                    echo "</tr>";
                                }
                            } else {
                                // No images found
                                echo "<tr><td colspan='4'>No images found.</td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            function deleteImage(imageId) {
                if (confirm("Are you sure you want to delete this image?")) {
                    // Send an AJAX request to delete the image
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "post-delete-image.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Reload the page after successful deletion
                            location.reload();
                        }
                    };
                    xhr.send("image_id=" + imageId);
                }
            }
        </script>
</body>

</html>

<?php include 'footer.php' ?>