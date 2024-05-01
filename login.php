<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="admin/image/x-icon" href="admin/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="admin/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="admin/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="admin/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="admin/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="admin/css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="admin/style.css">
    <!-- Modernize js -->
    <script src="admin/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <form action="login_process.php" method="post"
                    class="login-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Enter usrename" required class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password" required class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <button type="submit" value="Login" class="login-btn">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="admin/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="admin/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="admin/js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="admin/js/main.js"></script>

</body>

</html>