<?php
require '../config/function.php';
include 'header.php';
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TKBSS | View Post</title>
</head>

<body>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Posts</h3>
                <ul>
                    <li>
                        <a href="admin.php">Home</a>
                    </li>
                    <li>View Post</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>View Post</h3>
                        </div>
                        <div class="col-xxxl form-group">                           
                            <button type="submit" class="btn-fill-md text-light bg-dodger-white shadow">
                            <a href="post-create.php"><i class="fas fa-plus"></i> Add Post </a></button>
                        </div>
                    </div>
                    <form class="mg-b-20">
                        <div class="row gutters-8">

                            <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Roll ..." class="form-control">
                            </div>
                            <div class="col-2 col-xl-2 col-lg-6 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                            </div>
                        </div>
                    </form>
                    <!-- == table view post == -->
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Roll</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $post = getAll('post');
                                if ($post) {
                                    if (mysqli_num_rows($post) > 0) {
                                        foreach ($post as $item) {
                                ?>
                                            <tr>
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['title'] ?></td>
                                                <td><?= $item['text_body'] ?></td>
                                                <td>
                                                <a href="post-edit.php?id=<?= $item['id']; ?>" class="btn btn-success btn-sm-6">
                                                <i class="fas fa-edit text-dark-pastel-green"></i>  Edit
                                                <a href="post-delete.php?id=<?= $item['id']; ?>"
                                                class="btn btn-danger btn-sm-6 mx-2 mb-1"
                                                 onclick="return confirm('Are you sure you want to delete this data?')">
                                                    <i class="fas fa-trash text-orange-white"></i>  Delete</a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="4">No Record Found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Student Table Area End Here -->

            <?php include 'footer.php' ?>

</body>

</html>