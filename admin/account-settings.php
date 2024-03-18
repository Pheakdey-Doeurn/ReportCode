<?php
require '../config/function.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Account Settings</title>

</head>

<body>
    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Account Setting</h3>
            <ul>
                <li>
                    <a href="admin.php">Home</a>
                </li>
                <li>Setting</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Account Settings Area Start Here -->
        <div class="row">
            <div class="col-4-xxxl col-xl-5">
                <div class="card account-settings-box height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-20">
                            <div class="item-title">
                                <h3>All User</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="all-user-box">
                            <div class="media media-none--xs active">
                                <div class="item-img">
                                    <img src="img/figure/user1.jpg" class="media-img-auto" alt="user">
                                </div>
                                <div class="media-body space-md">
                                    <h5 class="item-title">Steven Johnson</h5>
                                    <div class="item-subtitle">Super Admin</div>
                                </div>
                            </div>
                            <div class="media media-none--xs">
                                <div class="item-img">
                                    <img src="img/figure/user2.jpg" class="media-img-auto" alt="user">
                                </div>
                                <div class="media-body space-md">
                                    <h5 class="item-title">Maria Jane</h5>
                                    <div class="item-subtitle">Super Admin</div>
                                </div>
                            </div>
                            <div class="media media-none--xs">
                                <div class="item-img">
                                    <img src="img/figure/user3.jpg" class="media-img-auto" alt="user">
                                </div>
                                <div class="media-body space-md">
                                    <h5 class="item-title">Andrew Walles</h5>
                                    <div class="item-subtitle">Super Admin</div>
                                </div>
                            </div>
                            <div class="media media-none--xs">
                                <div class="item-img">
                                    <img src="img/figure/user4.jpg" class="media-img-auto" alt="user">
                                </div>
                                <div class="media-body space-md">
                                    <h5 class="item-title">Walter Emma</h5>
                                    <div class="item-subtitle">Super Admin</div>
                                </div>
                            </div>
                            <div class="media media-none--xs">
                                <div class="item-img">
                                    <img src="img/figure/user5.jpg" class="media-img-auto" alt="user">
                                </div>
                                <div class="media-body space-md">
                                    <h5 class="item-title">Stuart Johnson</h5>
                                    <div class="item-subtitle">Super Admin</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8-xxxl col-xl-7">
                <div class="card account-settings-box">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-20">
                            <div class="item-title">
                                <h3>User Details</h3>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add User Admin
                            </button>

                        </div>
                        <div class="user-details-box">
                            <div class="item-img">
                                <img src="img/figure/user.jpg" alt="user">
                            </div>
                            <div class="item-content">
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">Steven Johnson</td>
                                            </tr>
                                            <tr>
                                                <td>User Type:</td>
                                                <td class="font-medium text-dark-medium">Super Admin</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">Male</td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium">07.08.2016</td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium">Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Joining Date:</td>
                                                <td class="font-medium text-dark-medium">07.08.2016</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">stevenjohnson@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>ID No:</td>
                                                <td class="font-medium text-dark-medium">10005</td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">+ 88 98568888418</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Settings Area End Here -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="font-size: 1.5rem;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>
</body>

</html>