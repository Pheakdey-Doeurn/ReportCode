<?php
require '../config/function.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Add ImageSlide</title>
</head>
<style>
    .btn_del {
        background-color: #FF5733 !important;
    }

    .btn-primary {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: #337ab7;
        color: #fff;
    }

    .success {
        margin: 5xp auto;
        border-radius: 5px;
        border: 3px solid #fff;
        background: #33CC00;
        color: #fff;
        font-size: 20px;
        padding: 10px;
        box-shadow: 8px 5px 5px grey;
    }
</style>

<body>
    <?php
    // Checking if the form has been submitted
    if (isset($_POST['upload'])) {
        $folder = 'Imageslide/'; // Folder where the images will be stored
        $image_file = $_FILES['image']['name']; // Name of the uploaded image file
        $file = $_FILES["image"]["tmp_name"]; // Temporary file name stored in a variable

        $path = $_FILES["image"]["name"]; // Name of the file on the server
        $target_file = $folder . basename($image_file); // Target file path

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); // Extracting the file extension

        // Validating file type
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $error[] = 'Sorry, Only JPG, JPEG, PNG File are allowed';
        }

        // Validating file size
        if ($_FILES['image']['size'] > 1048576) { // 1 MB in bytes
            $error[] = 'Sorry, your file is too large. Upload less than 1 MB';
        }

        // Check if the image already exists in the database
        $existing_image_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM pageslide WHERE image='$image_file'");
        $existing_image_result = mysqli_fetch_assoc($existing_image_query);
        if ($existing_image_result['count'] > 0) {
            $error[] = 'This image has already been uploaded';
        }

        // If no errors, proceed with upload
        if (!isset($error)) {
            move_uploaded_file($file, $target_file); // Moving the uploaded file to its destination
            // Inserting image information into the database
            $result = mysqli_query($conn, "INSERT INTO pageslide(image) VALUES('$image_file')");
            if ($result) {
                $image_success = 1; // Flag to indicate successful upload
            } else {
                echo 'Something went wrong'; // Error message if insertion fails
            }
        }

        // If there are errors, display them
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<div class="message">' . $error . '</div>'; // Displaying error messages
            }
        }
    }
    ?>



    <div class="dashboard-content-one">
        <!-- Dashboard summery Start Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>ImageSlide</h3>
                <ul>
                    <li>
                        <a href="admin.php">Home</a>
                    </li>
                    <li>Add ImageSlide</li>
                </ul>
            </div>
            <div class="card height-auto">
                <div class="card-body">
                    <?php if (isset($image_success)) {
                        echo '<div class="success">Image Uploaded Seccessfully</div><br>';
                    } ?>
                    <?php if (isset($_GET['deleted'])) {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Image Daleted Seccessfully!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                        unset($_GET['deleted']);
                    }
                    ?>
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add ImageSlide</h3>
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
                        <h3>View ImageSlide</h3>
                    </div>
                </div>
                <!-- == table view ImageSlide == -->
                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>FileImage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res = mysqli_query($conn, "SELECT * FROM pageslide ORDER BY id  DESC");
                            while ($row = mysqli_fetch_array($res)) {
                                echo '<tr>
                                       <td><img src="Imageslide/' . $row['image'] . '" width="300" height="100"> </td>
                                       <td>
                                       <a href=\'slideDelete.php?id=' . $row['id'] . '\' onClick=\'return confirm("Are you sure you want to delete?")\'">
                                        <button class="btn-primary btn_del text-center">Delete</button> 
                                        </a>
                                       </td>
                                       </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
</body>

</html>