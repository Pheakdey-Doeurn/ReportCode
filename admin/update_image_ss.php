<?php
require '../config/function.php';
include 'header.php';

// Check if the ID parameter exists in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $id = $_GET['id'];

    // Retrieve the current data of the image record based on its ID
    $sql = "SELECT * FROM imagestructure WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc(); // Assign the fetched record to $row
    } else {
        // Redirect the user back to the page where they were viewing images
        $_SESSION['message'] = "Image record not found.";
        header("Location: post-create.php");
        exit();
    }
} else {
    // Redirect the user back to the page where they were viewing images
    $_SESSION['message'] = "Invalid request.";
    header("Location: post-create.php");
    exit();
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Update Images SS</title>
</head>

<body>

    <!-- === Update Post === -->
    <div class="dashboard-content-one">
        <!-- Dashboard summery Start Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Post Images Structure School</h3>
                <ul>
                    <li>
                        <a href="admin.php">Home</a>
                    </li>
                    <li>Update Images Structure School</li>
                </ul>
            </div>
            <!-- Add New Teacher Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <!-- Display message if set -->
                    <?php if (isset($_SESSION['message'])) : ?>
                        <div class="alert alert-<?php echo strpos($_SESSION['message'], 'Error') !== false ? 'danger' : 'success'; ?>" role="alert">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php unset($_SESSION['message']); ?>
                    <?php endif; ?>
                    <!-- End of message display -->
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Update Images Structure School</h3>
                        </div>
                    </div>
                    <!-- Update Form -->
                    <form class="new-added-form" action="code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" required class="form-control" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Position</label>
                                <input type="text" name="position" placeholder="" required class="form-control" value="<?php echo $row['position']; ?>">
                            </div>
                            <div class="col-lg-6 col-12 form-group">
                                <label class="text-dark-medium">Current Image</label>
                                <br>
                                <img src="imagesstructure/<?php echo $row['image']; ?>" width="200" height="100" alt="Current Image">
                            </div>
                            <div class="col-lg-6 col-12 form-group">
                                <label class="text-dark-medium">Upload New Image</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" name="update" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                <a href="post-create.php" class=" btn-fill-lg btn-info bg-info btn-hover-secondary">Back</a>
                            </div>
                        </div>
                    </form>
                    <!-- End of Update Form -->
                </div>
            </div>
            <?php include 'footer.php' ?>
        </div>
    </div>
</body>

</html>
