<?php
require '../config/function.php';
include 'header.php';

$sql = "SELECT * FROM imagestructure";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Add Images SS</title>

</head>

<body>

    <!-- === Add Post === -->
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
                    <li>Add Images Structure School</li>
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
                            <h3>Add Images Structure School</h3>
                        </div>
                        
                    </div>
                    <form class="new-added-form" action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" required class="form-control">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Position </label>
                                <input type="text" name="position" placeholder="" required class="form-control">
                            </div>

                            <div class="col-lg-6 col-12 form-group ">
                                <label class="text-dark-medium">Upload Photo</label>
                                <input type="file" name="image" class="form-control-file" required>
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>View Image Structure School</h3>
                        </div>
                    </div>
                    <!-- == table view ImageSlide == -->
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>File Image</th>
                                    <th> Name</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    // Loop through fetched image data
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td><img src="imagesstructure/<?php echo $row['image']; ?>" width="200" height="100"></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['position']; ?></td>
                                            <td>
                                                <!-- Update button -->
                                                <a href="update_image_ss.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Update</a>
                                                <!-- Delete button -->
                                                <a href="delete_image_ss.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"> <i class="fas fa-trash-alt"></i> Delete</a>
                                            </td>
                                        </tr>
                                <?php
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
            <?php include 'footer.php' ?>
</body>

</html>