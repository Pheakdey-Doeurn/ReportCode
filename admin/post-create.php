<?php
require '../config/function.php';
include 'header.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Add Post</title>

</head>

<body>
   
          <!-- === Add Post === -->
          <div class="dashboard-content-one">
                <!-- Dashboard summery Start Here -->
                <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Post</h3>
                    <ul>
                        <li>
                            <a href="admin.php">Home</a>
                        </li>
                        <li>Add Post</li>
                    </ul>
                </div>
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                <?= alertMessage(); ?>
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Post</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">      
                                    <a class="dropdown-item" href="post-edit.php"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" placeholder="" required class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Tag </label>
                                    <input type="text" name="tag" placeholder="" required class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input type="date" placeholder="dd/mm/yyyy" name="date" required class="form-control" data-position="bottom right">
                                    <!-- <i class="far fa-calendar-alt"></i> -->
                                </div>                               
                                
                                <div class="col-lg-3 col-lg-12 col-12 form-group">
                                    <label>Title</label>
                                    <input type="text" placeholder="" name="title" required class="form-control">
                                </div> 
                                <div class="col-lg-3 col-lg-12 col-12 form-group">
                                    <label>Description</label>
                                    <textarea class="textarea form-control" name="text_body" id="form-message" cols="9" rows="9"></textarea>
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
            </div>
        <?php include 'footer.php' ?>
</body>

</html>