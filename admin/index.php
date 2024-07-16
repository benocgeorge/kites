<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>One Soure Fitout | Best Interior Design Company in Dubai</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="dash/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="dash/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="dash/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="dash/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="dash/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="dash/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="dash/css/custom.css" />
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="asset/img/home/onesource-fitout-logo.png" alt="#" /></a>
                     </div>
                  </div>    
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li><a href="index.php"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                     <li class="active">
                        <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Services</span></a>
                        <ul class="collapse list-unstyled" id="services">
                           <li>
                              <a href="add_services.php">> <span>Add Services</span></a>
                           </li>
                           <li>
                              <a href="view_service.php">> <span>View Services</span></a>
                           </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#projects" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Projects</span></a>
                        <ul class="collapse list-unstyled" id="projects">
                           <li>
                              <a href="add_projects.php">> <span>Add Projects</span></a>
                           </li>
                           <li>
                              <a href="view_projects.php">> <span>View Projects</span></a>
                           </li>
                        </ul>
                    </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="asset/img/home/onesource-fitout-logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">OTHER</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <?php
                                 include('../connection.php');
                                 $id = $_SESSION['loginid'];
                                 $sql = "SELECT COUNT(*) AS total_services FROM `services` WHERE loginid='$id'";
                                 $res = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($res);
                                 $total_services = $row['total_services'];
                                 ?>
                                 <p class="total_no"><?php echo $total_services; ?></p>
                                    <p class="head_couter">Total Services</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                              <div>
                                 <?php
                                 include('../connection.php');
                                 $id = $_SESSION['loginid'];
                                 $sql = "SELECT COUNT(*) AS total_services FROM `project` WHERE loginid='$id'";
                                 $res = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($res);
                                 $total_services = $row['total_services'];
                                 ?>
                                 <p class="total_no"><?php echo $total_services; ?></p>
                                    <p class="head_couter">Total Services</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024 Designed by Kites Marketing Solutions All rights reserved.<br><br>
                           Distributed By: <a href="#">Kites</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="dash/js/jquery.min.js"></script>
      <script src="dash/js/popper.min.js"></script>
      <script src="dash/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="dash/js/animate.js"></script>
      <!-- select country -->
      <script src="dash/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="dash/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="dash/js/Chart.min.js"></script>
      <script src="dash/js/Chart.bundle.min.js"></script>
      <script src="dash/js/utils.js"></script>
      <script src="dash/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="dash/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="dash/js/custom.js"></script>
      <script src="dash/js/chart_custom_style1.js"></script>
   </body>
</html>