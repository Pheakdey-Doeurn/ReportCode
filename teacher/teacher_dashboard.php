<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKBSS | Teachers</title>
</head>
<body>
     <!-- Sidebar Area End Here -->
     <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher Dashboard</h3>
                    <ul>
                        <li>
                            <a href="teacher_dashboard.php">Home</a>
                        </li>
                        <li>Teachers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Dashboard summery Start Here -->
                    <div class="col-12 col-4-xxxl">
                        <div class="row">
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-magenta">
                                        <i class="flaticon-classmates text-magenta"></i>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-number"><span class="counter" data-num="35000">35,000</span></div>
                                        <div class="item-title">Total Students</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-shopping-list text-blue"></i>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-number"><span class="counter" data-num="19050">19,050</span></div>
                                        <div class="item-title">Total Exams</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-mortarboard text-orange"></i>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-number"><span class="counter" data-num="23890">23,890</span></div>
                                        <div class="item-title">Graduate Studes</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-number"><span>$</span><span class="counter" data-num="2102050">21,02,050</span></div>
                                        <div class="item-title">Total Income</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard summery End Here -->
                    <!-- Students Chart End Here -->
                    <div class="col-lg-6 col-4-xxxl col-xl-6">
                        <div class="card dashboard-card-three">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Students</h3>
                                    </div>
                                   <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="doughnut-chart-wrap">
                                    <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                                </div>
                                <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
                                        <h4 class="item-title">Female Students</h4>
                                        <div class="item-number">10,500</div>
                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
                                        <h4 class="item-title">Male Students</h4>
                                        <div class="item-number">24,500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Students Chart End Here -->
                    <!-- Notice Board Start Here -->
                    <div class="col-lg-6 col-4-xxxl col-xl-6">
                        <div class="card dashboard-card-six">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Notifications</h3>
                                    </div>
                                   <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="notice-box-wrap">
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom tus eleifend lectus
                                            sed maximus mi faucibusnting.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag Nulla rhoncus eleifensed mim
                                            us mi faucibus id. Mauris vestibulum non purus lobortismenearea</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Notice Board End Here -->
                </div>
    <?php include 'footer.php' ?>
</body>
</html>