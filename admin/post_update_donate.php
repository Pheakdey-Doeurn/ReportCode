<?php
require '../config/function.php';
include 'header.php';

// Check if image ID is set in URL parameters
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve image information from the database
    $sql = "SELECT * FROM donations WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if image exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Update Donate QR</title>
</head>
<body>
    <!-- === Update Post === -->
    <div class="dashboard-content-one">
        <!-- Dashboard summery Start Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Update Donate QR</h3>
                <ul>
                    <li>
                        <a href="admin.php">Home</a>
                    </li>
                    <li>Update Donate QR</li>
                </ul>
            </div>
            <!-- Update Form -->
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
                            <h3>Update Donate QR Details</h3>
                        </div>
                    </div>
                    <!-- Update Form -->
                    <form class="new-added-form" action="postcode.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Name Card</label>
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="" required class="form-control">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Number Code</label>
                                <input type="number" name="numcode" value="<?php echo $row['numcode']; ?>" placeholder="" required class="form-control">
                            </div>
                        </div>
                        <!-- Display current image -->
                        <div class="col-lg-6 col-12 form-group">
                            <label class="text-dark-medium">Current Image</label>
                            <br>
                            <img src="imagedonateqr/<?php echo $row['image']; ?>" width="200" height="100" alt="Current Image">
                        </div>
                        <!-- End of current image display -->

                        <!-- Upload new image -->
                        <div class="col-lg-6 col-12 form-group">
                            <label class="text-dark-medium">Upload New Image (Optional)</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <!-- End of upload new image -->

                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="update" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                            <a href="post_donate.php" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>
<?php include 'footer.php'; ?>
</html>

<?php
    } else {
        $_SESSION['message'] = "Image not found.";
        header("Location: post_donate.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Image ID not specified.";
    header("Location: post_donate.php");
    exit();
}
?>
