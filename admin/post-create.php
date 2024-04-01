<?php
require '../config/function.php';
include 'header.php';
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
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add Images Structure School</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="post-edit.php"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form" action="#" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Name</label>
                                <input type="text" name="author" placeholder="" required class="form-control">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Position </label>
                                <input type="text" name="tag" placeholder="" required class="form-control">
                            </div>

                            <div class="col-lg-6 col-12 form-group ">
                                <label class="text-dark-medium">Upload Photo</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" name="add-post" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
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

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php include 'footer.php' ?>
</body>

</html>